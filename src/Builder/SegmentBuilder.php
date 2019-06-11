<?php
declare(strict_types=1);


namespace CVTrust\SutterHealthAetna\Eligibility\EdiSegment;

use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapBaseDataElement;
use CVTrust\EdiEngine\EdiEngine\Common\MapSegment;
use CVTrust\EdiEngine\EdiEngine\Runtime\EdiSegment;
use CVTrust\EdiEngine\EdiEngine\Runtime\EdiSimpleDataElement;
use CVTrust\SutterHealthAetna\Eligibility\EdiDataElement\DataElement;
use Zend\Stdlib\ArrayObject;

class SegmentBuilder
{
    /**
     * @var MapSegment
     */
    protected $definition;

    /**
     * @var DataElement[]
     */
    protected $dataElements = [];

    final public function __construct(MapSegment $definition)
    {
        $this->definition = $definition;
    }

    public function setDataElement(DataElement $dataElement): void
    {
        $this->dataElements[$dataElement->DataElementReferencePosition()] = $dataElement;
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
