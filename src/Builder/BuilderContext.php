<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\Builder;

use CVTrust\EdiEngine\ConfigDefinition\Definition;
use CVTrust\EdiEngine\ConfigDefinition\LoopDefinition;
use CVTrust\EdiEngine\ConfigDefinition\SegmentDefinition;
use CVTrust\EdiEngine\EdiDataElement\MaintenanceType;

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

    /**
     * @var MaintenanceType
     */
    private $maintenanceType;

    public function __construct(TransactionBuilder $transactionBuilder, MaintenanceType $maintenanceType)
    {
        $this->transactionBuilder = $transactionBuilder;
        $this->maintenanceType = $maintenanceType;
    }

    public function CurrentLoopBuilder(): LoopBuilder
    {
        return $this->currentLoopBuilder ?? $this->transactionBuilder->LoopBuilder();
    }

    public function CurrentSegmentBuilder(): SegmentBuilder
    {
        return $this->currentSegmentBuilder;
    }
    
    public function maintenanceType(): MaintenanceType
    {
        return $this->maintenanceType;
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
