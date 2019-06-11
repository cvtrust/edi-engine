<?php
declare(strict_types=1);


namespace CVTrust\SutterHealthAetna\Eligibility\EdiSegment;

class BuilderContext {
    /**
     * @var TransactionBuilder
     */
    private $transactionBuilder;

    /**
     * @var LoopBuilder
     */
    private $lastLoopBuilder;

    /**
     * @var LoopBuilder
     */
    private $currentLoopBuilder;

    /**
     * @var SegmentBuilder
     */
    private $currentSegmentBuilder;

    public function __construct(TransactionBuilder $transactionBuilder)
    {
        $this->transactionBuilder = $transactionBuilder;
    }

    public function CurrentLoopBuilder(): LoopBuilder
    {
        return $this->currentLoopBuilder ?? $this->transactionBuilder->LoopBuilder();
    }

    public function CurrentSegmentBuilder(): SegmentBuilder
    {
        return $this->currentSegmentBuilder;
    }

    public function changeContext(Definition $definition): void
    {
        if ($definition instanceof LoopDefinition) {
            $this->lastLoopBuilder = $this->CurrentLoopBuilder();
            $this->currentLoopBuilder = $this->CurrentLoopBuilder()->addLoopByName($definition->LoopName());
            $this->currentSegmentBuilder = null;
        }

        if ($definition instanceof SegmentDefinition) {
            $this->currentSegmentBuilder = $this->CurrentLoopBuilder()->addSegmentByName($definition->MapSegment()->getName());
        }
    }

    public function previousContext(): void
    {
        $this->currentLoopBuilder = $this->lastLoopBuilder;
        $this->currentSegmentBuilder = null;
    }

    public function resetContext(): void
    {
        $this->currentLoopBuilder = null;
        $this->currentSegmentBuilder = null;
    }
}
