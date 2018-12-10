<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/18/2018
 * Time: 3:51 PM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiEngine;


use CVTrust\EdiEngine\EdiEngine\Common\MapSegment;

class EdiDataWriterSettings
{

    /**
     * @var MapSegment
     */
    private $isaDef;
    /**
     * @var MapSegment
     */
    private $ieaDef;
    /**
     * @var MapSegment
     */
    private $gsDef;
    /**
     * @var MapSegment
     */
    private $geDef;
    /**
     * @var MapSegment
     */
    private $stDef;
    /**
     * @var MapSegment
     */
    private $seDef;
    /**
     * @var string
     */
    private $isaSenderQual;
    /**
     * @var string
     */
    private $isaSenderId;
    /**
     * @var string
     */
    private $isaReceiverQual;
    /**
     * @var string
     */
    private $isaReceiverId;
    /**
     * @var string
     */
    private $gsSenderId;
    /**
     * @var string
     */
    private $gsReceiverId;
    /**
     * @var string
     */
    private $isaEdiVersion;
    /**
     * @var string
     */
    private $gsEdiVersion;
    /**
     * @var string
     */
    private $isaUsageIndicator;
    /**
     * @var int
     */
    private $isaFirstControlNumber;
    /**
     * @var int
     */
    private $gsFirstControlNumber;
    /**
     * @var string
     */
    private $segmentSeparator;
    /**
     * @var string
     */
    private $elementSeparator;

    /**
     * @var string
     */
    private $isaComponentSeparator;

    public function __construct(
        MapSegment $isaDef,
        MapSegment $ieaDef,
        MapSegment $gsDef,
        MapSegment $geDef,
        MapSegment $stDef,
        MapSegment $seDef,
        string $isaSenderQual,
        string $isaSenderId,
        string $isaReceiverQual,
        string $isaReceiverId,
        string $isaComponentSeparator,
        string $gsSenderId,
        string $gsReceiverId,
        string $isaEdiVersion,
        string $isaRepetitionSeparator,
        string $gsEdiVersion,
        string $isaUsageIndicator,
        int $isaFirstControlNumber,
        int $gsFirstControlNumber,
        string $segmentSeparator,
        string $elementSeparator
    )
    {
        $this->isaDef = $isaDef;
        $this->ieaDef = $ieaDef;
        $this->gsDef = $gsDef;
        $this->geDef = $geDef;
        $this->stDef = $stDef;
        $this->seDef = $seDef;
        $this->isaSenderQual = $isaSenderQual;
        $this->isaSenderId = $isaSenderId;
        $this->isaReceiverQual = $isaReceiverQual;
        $this->isaReceiverId = $isaReceiverId;
        $this->isaComponentSeparator = $isaComponentSeparator;
        $this->gsSenderId = $gsSenderId;
        $this->gsReceiverId = $gsReceiverId;
        $this->isaRepetitionSeparator = $isaRepetitionSeparator;
        $this->isaEdiVersion = $isaEdiVersion;
        $this->gsEdiVersion = $gsEdiVersion;
        $this->isaUsageIndicator = $isaUsageIndicator;
        $this->isaFirstControlNumber = $isaFirstControlNumber;
        $this->gsFirstControlNumber = $gsFirstControlNumber;
        $this->segmentSeparator = $segmentSeparator;
        $this->elementSeparator = $elementSeparator;
    }

    /**
     * @return MapSegment
     */
    public function getIsaDef(): MapSegment
    {
        return $this->isaDef;
    }

    /**
     * @return MapSegment
     */
    public function getIeaDef(): MapSegment
    {
        return $this->ieaDef;
    }

    /**
     * @return MapSegment
     */
    public function getGsDef(): MapSegment
    {
        return $this->gsDef;
    }

    /**
     * @return MapSegment
     */
    public function getGeDef(): MapSegment
    {
        return $this->geDef;
    }

    /**
     * @return MapSegment
     */
    public function getStDef(): MapSegment
    {
        return $this->stDef;
    }

    /**
     * @return MapSegment
     */
    public function getSeDef(): MapSegment
    {
        return $this->seDef;
    }

    /**
     * @return string
     */
    public function getIsaSenderQual(): string
    {
        return $this->isaSenderQual;
    }

    /**
     * @return string
     */
    public function getIsaSenderId(): string
    {
        return $this->isaSenderId;
    }

    /**
     * @return string
     */
    public function getIsaReceiverQual(): string
    {
        return $this->isaReceiverQual;
    }

    /**
     * @return string
     */
    public function getIsaReceiverId(): string
    {
        return $this->isaReceiverId;
    }

    /**
     * @return string
     */
    public function getGsSenderId(): string
    {
        return $this->gsSenderId;
    }

    /**
     * @return string
     */
    public function getGsReceiverId(): string
    {
        return $this->gsReceiverId;
    }

    public function getIsaRepetitionSeparator(): string
    {
        return $this->isaRepetitionSeparator;
    }
    
    /**
     * @return string
     */
    public function getIsaEdiVersion(): string
    {
        return $this->isaEdiVersion;
    }

    /**
     * @return string
     */
    public function getGsEdiVersion(): string
    {
        return $this->gsEdiVersion;
    }

    /**
     * @return string
     */
    public function getIsaUsageIndicator(): string
    {
        return $this->isaUsageIndicator;
    }

    /**
     * @return int
     */
    public function getIsaFirstControlNumber(): int
    {
        return $this->isaFirstControlNumber;
    }

    /**
     * @return string
     */
    public function getIsaComponentSeparator(): string
    {
        return $this->isaComponentSeparator;
    }

    /**
     * @param string $isaComponentSeparator
     */
    public function setIsaComponentSeparator(string $isaComponentSeparator): void
    {
        $this->isaComponentSeparator = $isaComponentSeparator;
    }

    /**
     * @return int
     */
    public function getGsFirstControlNumber(): int
    {
        return $this->gsFirstControlNumber;
    }

    /**
     * @return string
     */
    public function getSegmentSeparator(): string
    {
        return $this->segmentSeparator;
    }

    /**
     * @return string
     */
    public function getElementSeparator(): string
    {
        return $this->elementSeparator;
    }
}