<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/18/2018
 * Time: 3:16 PM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiEngine\Runtime;


use CVTrust\EdiEngine\EdiEngine\Common\MapBaseEntity;

abstract class EdiBaseEntity
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var MapBaseEntity
     */
    protected $definition;

    protected function __construct(?MapBaseEntity $definition)
    {
        $this->setDefinition($definition);
    }

    public abstract function getType(): string;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return MapBaseEntity
     */
    public function getDefinition(): MapBaseEntity
    {
        return $this->definition;
    }

    /**
     * @param MapBaseEntity $definition
     */
    public function setDefinition(MapBaseEntity $definition): void
    {
        if ($definition != null)
        {
            $this->setName($definition->getName());
            $this->definition = $definition;
        }
    }


}