<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiDataElement;

use CVTrust\EdiEngine\ConfigDefinition\Processor\DataElementReference;
use MabeEnum\Enum;

final class EnumDataElement implements DataElement
{

    /**
     * @var Enum
     */
    private $enum;
    /**
     * @var DataElementReference
     */
    private $dataElementReference;

    public function __construct(Enum $enum, DataElementReference $dataElementReference)
    {
        $this->enum = $enum;
        $this->dataElementReference = $dataElementReference;
    }

    public static function createFromEnumAndReference(Enum $enum, DataElementReference $dataElementReference): self
    {
        return new self($enum, $dataElementReference);
    }

    public function DataElementReferenceClass(): string
    {
        return $this->dataElementReference->DataElementReferenceClass();
    }

    public function DataElementReferencePosition(): int
    {
        return $this->dataElementReference->DataElementReferencePosition();
    }

    public function toString(): string
    {
        return (string)$this->enum->getValue();
    }

    public function Enum(): Enum
    {
        return $this->enum;
    }

}
