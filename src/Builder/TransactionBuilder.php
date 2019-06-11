<?php
declare(strict_types=1);


namespace CVTrust\SutterHealthAetna\Eligibility\EdiSegment;

use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapLoop;
use CVTrust\EdiEngine\EdiEngine\Runtime\EdiTrans;

class TransactionBuilder
{
    /**
     * @var LoopBuilder
     */
    private $loopBuilder;

    public function __construct(MapLoop $loopDefinition)
    {
        $this->loopBuilder = new LoopBuilder($loopDefinition);
    }

    public function LoopBuilder(): LoopBuilder
    {
        return $this->loopBuilder;
    }

    public function addLoopByName(string $loopName): LoopBuilder
    {
        return $this->loopBuilder->addLoopByName($loopName);
    }

    public function addSegmentByName(string $segmentName): SegmentBuilder
    {
        return $this->loopBuilder->addSegmentByName($segmentName);
    }

    public function build(): EdiTrans
    {
        $transaction = new EdiTrans($this->loopBuilder->Definition());
        $mainLoop = $this->loopBuilder->build();

        foreach ($mainLoop->getContent() as $element) {
            $transaction->getContent()->append($element);
        }

        return $transaction;
    }
}
