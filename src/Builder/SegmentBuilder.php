<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\Builder;

use CVTrust\EdiEngine\EdiDataElement\DataElement;
use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapBaseDataElement;
use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapLoop;
use CVTrust\EdiEngine\EdiEngine\Common\MapSegment;
use CVTrust\EdiEngine\EdiEngine\Runtime\EdiSegment;
use CVTrust\EdiEngine\EdiEngine\Runtime\EdiSimpleDataElement;

class SegmentBuilder
{
    /**
     * @var LoopBuilder
     */
    protected $loopBuilder;
    
    /**
     * @var MapSegment
     */
    protected $definition;

    /**
     * @var DataElement[]
     */
    protected $dataElements = [];

    final public function __construct(LoopBuilder $loopBuilder, MapSegment $definition)
    {
        $this->loopBuilder = $loopBuilder;
        $this->definition = $definition;
    }

    public function getLoopBuilder(): LoopBuilder
    {
        return $this->loopBuilder;
    }

    public function setDataElement(DataElement $dataElement): void
    {
        $this->dataElements[$dataElement->DataElementReferencePosition()] = $dataElement;
    }

    public function getDataElement(DataElement $dataElement): ?DataElement
    {
        return $this->dataElements[$dataElement->DataElementReferencePosition()] ?? null;
    }

    public function build(): EdiSegment
    {
        $seg = new EdiSegment($this->definition);

        /** @var MapBaseDataElement $dataElementDef */
        foreach ($this->definition->getContent() as $dataElementPos => $dataElementDef) {
            if (isset($this->dataElements[$dataElementPos])) {
                $seg->getContent()->append(new EdiSimpleDataElement($dataElementDef, $this->dataElements[$dataElementPos]->toString()));
            }
        }

        return $seg;
    }
}
