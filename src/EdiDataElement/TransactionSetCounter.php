<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiDataElement;

use CVTrust\EdiEngine\ConfigDefinition\Processor\DataElementReference;

class TransactionSetCounter implements DataElement
{
    /**
     * @var DataElementReference
     */
    private $dataElementReference;

    /**
     * @var int
     */
    private $count = 0;

    public function setDataElementReference(DataElementReference $dataElementReference): void
    {
        $this->dataElementReference = $dataElementReference;
    }

    public function DataElementReferenceClass(): string
    {
        return $this->dataElementReference->DataElementReferenceClass();
    }

    public function DataElementReferencePosition(): int
    {
        return $this->dataElementReference->DataElementReferencePosition();
    }

    public function increment(): void
    {
        $this->count++;
    }

    public function toString(): string
    {
        return (string)$this->count;
    }
}
