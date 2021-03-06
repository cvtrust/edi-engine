<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/18/2018
 * Time: 3:47 PM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiEngine;


use CVTrust\EdiEngine\EdiEngine\Common\MemoryStream;
use CVTrust\EdiEngine\EdiEngine\Common\StreamInterface;
use CVTrust\EdiEngine\EdiEngine\Runtime\DataElementBase;
use CVTrust\EdiEngine\EdiEngine\Runtime\EdiBaseEntity;
use CVTrust\EdiEngine\EdiEngine\Runtime\EdiGroup;
use CVTrust\EdiEngine\EdiEngine\Runtime\EdiLoop;
use CVTrust\EdiEngine\EdiEngine\Runtime\EdiSegment;
use CVTrust\EdiEngine\EdiEngine\Runtime\EdiTrans;
use CVTrust\EdiEngine\EdiEngine\Runtime\GE;
use CVTrust\EdiEngine\EdiEngine\Runtime\GS;
use CVTrust\EdiEngine\EdiEngine\Runtime\IEA;
use CVTrust\EdiEngine\EdiEngine\Runtime\ISA;
use CVTrust\EdiEngine\EdiEngine\Runtime\SE;
use CVTrust\EdiEngine\EdiEngine\Runtime\ST;

class EdiDataWriter extends DataWriter
{
    /**
     * @var int
     */
    private $_currentTranSegCount = 0;

    /**
     * @var EdiDataWriterSettings
     */
    private $_settings;

    /**
     * @var string
     */
    protected $currentSegmentSeparator;

    /**
     * @var string
     */
    protected $currentElementSeparator;

    public function __construct(?EdiDataWriterSettings $settings = null)
    {
        if (null === $settings)
            return;

        $this->_settings = $settings;
        $this->currentSegmentSeparator = $settings->getSegmentSeparator();
        $this->currentElementSeparator = $settings->getElementSeparator();
    }

    function WriteToString(EdiBatch $batch): string
    {
        $stream = new MemoryStream();
        $this->WriteToStream($batch, $stream);
        return $stream->getContents();
    }

    function WriteToStream(EdiBatch $batch, StreamInterface $stream): void
    {
        $icn = $this->_settings->getIsaFirstControlNumber();
        $gcn = $this->_settings->getGsFirstControlNumber();

        foreach ($batch->getInterchanges() as $interchange)
        {
            $interchange->setIsa(new ISA(
                $this->_settings->getIsaDef(),
                $this->_settings->getIsaSenderQual(),
                $this->_settings->getIsaSenderId(),
                $this->_settings->getIsaReceiverQual(),
                $this->_settings->getIsaReceiverId(),
                $this->_settings->getIsaRepetitionSeparator(),
                $this->_settings->getIsaEdiVersion(),
                $icn,
                $this->_settings->getIsaUsageIndicator(),
                $this->_settings->getIsaComponentSeparator()
            ));

            $this->writeEntity($interchange->getIsa(), $stream);

            /** @var EdiGroup $group */
            foreach ($interchange->getGroups() as $group)
            {
                $currentTranIdx = 1;
                $group->setGS(new GS(
                    $this->_settings->getGsDef(),
                    $group->FunctionalCode(),
                    $this->_settings->getGsSenderId(),
                    $this->_settings->getGsReceiverId(),
                    $gcn,
                    $this->_settings->getGsEdiVersion()
                ));
                $this->writeEntity($group->getGS(), $stream);

                /** @var EdiTrans $transaction */
                foreach ($group->Transactions() as $transaction)
                {
                    $this->_currentTranSegCount = 0;

                    $transaction->setSt(new ST(
                        $this->_settings->getStDef(),
                        $transaction->getDefinition()->getEdiName(),
                        $currentTranIdx,
                        $this->_settings->getGsEdiVersion()
                    ));

                    $this->writeEntity($transaction->getSt(), $stream);

                    /** @var EdiBaseEntity $ent */
                    foreach ($transaction->getContent() as $ent)
                    {
                        $this->writeEntity($ent, $stream);
                    }

                    $this->_currentTranSegCount++;

                    $transaction->setSe(new SE(
                        $this->_settings->getSeDef(),
                        $this->_currentTranSegCount,
                        $currentTranIdx
                    ));
                    $this->writeEntity($transaction->getSe(), $stream);

                    $currentTranIdx++;
                }

                $group->setGE(new GE(
                    $this->_settings->getGeDef(),
                    $group->Transactions()->count(),
                    $gcn++
                ));
                $this->writeEntity($group->getGE(), $stream);
            }

            $interchange->setIea(new IEA(
                $this->_settings->getIeaDef(),
                $interchange->getGroups()->count(),
                $icn++
            ));
            $this->writeEntity($interchange->getIea(), $stream);
        }
        $stream->rewind();
    }

    protected function writeEntity(EdiBaseEntity $ent, StreamInterface $stream): void
    {
        if ($ent instanceof EdiLoop) {
            foreach ($ent->getContent() as $child) {
                $this->writeEntity($child, $stream);
            }
        } else if ($ent instanceof EdiSegment) {
//            $seg = $ent;

            $this->_currentTranSegCount++;

            $stream->write($ent->getName());
            /** @var DataElementBase $el */
            foreach ($ent->getContent() as $el) {
                $stream->write($this->currentElementSeparator . $el->getVal());
            }
            $stream->write($this->currentSegmentSeparator);
        }
    }
}