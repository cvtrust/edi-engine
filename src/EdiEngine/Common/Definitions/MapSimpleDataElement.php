<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/19/2018
 * Time: 9:46 AM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiEngine\Common\Definitions;


use CVTrust\EdiEngine\EdiEngine\Common\Enums\DataType;
use CVTrust\EdiEngine\EdiEngine\Common\Enums\RequirementDesignator;

abstract class MapSimpleDataElement extends MapBaseDataElement
{
    /**
     * @var DataType
     */
    protected $dataType;

    /**
     * @var \ArrayObject
     */
    protected $allowedValues;

    /**
     * @var int
     */
    protected $minLength;

    /**
     * @var int
     */
    protected $maxLength;

    public function __construct()
    {
        $this->reqDes = RequirementDesignator::Optional();
        $this->allowedValues = new \ArrayObject([]);
    }

    /**
     * @return DataType
     */
    public function getDataType(): DataType
    {
        return $this->dataType;
    }

    /**
     * @param DataType $dataType
     */
    public function setDataType(DataType $dataType): void
    {
        $this->dataType = $dataType;
    }

    /**
     * @return \ArrayObject
     */
    public function getAllowedValues(): \ArrayObject
    {
        return $this->allowedValues;
    }

    /**
     * @return int
     */
    public function getMinLength(): int
    {
        return $this->minLength;
    }

    /**
     * @param int $minLength
     */
    public function setMinLength(int $minLength): void
    {
        $this->minLength = $minLength;
    }

    /**
     * @return int
     */
    public function getMaxLength(): int
    {
        return $this->maxLength;
    }

    /**
     * @param int $maxLength
     */
    public function setMaxLength(int $maxLength): void
    {
        $this->maxLength = $maxLength;
    }

}