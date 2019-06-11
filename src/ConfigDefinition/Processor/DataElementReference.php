<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\ConfigDefinition\Processor;

final class DataElementReference
{
    /**
     * @var string
     */
    private $referenceClass;

    /**
     * @var int
     */
    private $referencePosition;

    public function __construct(string $referenceClass, int $referencePosition)
    {
        $this->referenceClass = $referenceClass;
        $this->referencePosition = $referencePosition;
    }

    public function DataElementReferenceClass(): string
    {
        return $this->referenceClass;
    }

    public function DataElementReferencePosition(): int
    {
        return $this->referencePosition;
    }
}
