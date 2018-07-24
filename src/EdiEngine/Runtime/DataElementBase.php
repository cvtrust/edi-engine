<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/18/2018
 * Time: 4:50 PM
 */
declare(strict_types=1);


namespace CVTrust\Edi\EdiEngine\Runtime;


use CVTrust\Edi\EdiEngine\Common\Definitions\MapBaseDataElement;

abstract class DataElementBase
{
    /**
     * @var
     */
    protected $val;

    /**
     * @var MapBaseDataElement
     */
    protected $definition;

    public function __construct(MapBaseDataElement $definition)
    {
        $this->definition = $definition;
    }

    /**
     * @return MapBaseDataElement
     */
    public function getDefinition(): MapBaseDataElement
    {
        return $this->definition;
    }

    abstract public function getVal(): string;

    public function __toString()
    {
        return $this->getVal() ?? '';
    }


}