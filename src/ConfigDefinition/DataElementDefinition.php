<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\ConfigDefinition;


use CVTrust\EdiEngine\ConfigDefinition\Processor\DataElementReference;
use CVTrust\EdiEngine\EdiDataElement\DataElement;
use CVTrust\EdiEngine\Mapper\Mapper;

class DataElementDefinition implements Definition
{
    /**
     * @var ?Mapper
     */
    private $mapper;
    /**
     * @var DataElementReference
     */
    private $dataElementReference;
    /**
     * @var DataElement|null
     */
    private $dataElement;

    public function __construct(DataElementReference $dataElementReference, ?Mapper $mapper, ?DataElement $dataElement)
    {
        $this->mapper = $mapper;
        $this->dataElementReference = $dataElementReference;
        $this->dataElement = $dataElement;
    }

    public function Mapper(): ?Mapper
    {
        return $this->mapper;
    }

    public function DataElement(): ?DataElement
    {
        return $this->dataElement;
    }

    public function DataElementReference(): DataElementReference
    {
        return $this->dataElementReference;
    }

    public function toArray(): array
    {
        return [
            'type' => 'data_element',
            'data_element' => $this->dataElementReference->DataElementReferenceClass(),
            'position' => $this->dataElementReference->DataElementReferencePosition(),
            'mapper' => $this->mapper ? get_class($this->mapper) : null
        ];
    }
}
