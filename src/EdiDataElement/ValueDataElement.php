<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiDataElement;

use CVTrust\SutterHealthAetna\Eligibility\EdiSegment\DataElementReference;

abstract class ValueDataElement implements DataElement
{

    /**
     * @var string
     */
    protected $value;
    /**
     * @var DataElementReference
     */
    private $dataElementReference;

    final public function __construct(string $value, DataElementReference $dataElementReference)
    {
        $this->value = $value;
        $this->dataElementReference = $dataElementReference;
    }

    final public function toString(): string
    {
        return $this->value;
    }

    final public function DataElementReferenceClass(): string
    {
        return $this->dataElementReference->DataElementReferenceClass();
    }

    final public function DataElementReferencePosition(): int
    {
        return $this->dataElementReference->DataElementReferencePosition();
    }

}
