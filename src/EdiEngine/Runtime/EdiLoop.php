<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/18/2018
 * Time: 4:20 PM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiEngine\Runtime;


use CVTrust\EdiEngine\EdiEngine\Common\MapBaseEntity;

class EdiLoop extends EdiBaseEntity
{
    public const TYPE = 'L';

    /**
     * @var EdiLoop
     */
    protected $parent;

    protected $content;

    public function __construct(?MapBaseEntity $definition = null, ?EdiLoop $parent = null)
    {
        $this->setDefinition($definition);
        $this->content = new \ArrayObject([]);
        $this->parent = $parent;
    }

    public function getType(): string
    {
        return self::TYPE;
    }

    /**
     * @return EdiLoop
     */
    public function getParent(): EdiLoop
    {
        return $this->parent;
    }

    /**
     * @return \ArrayObject
     */
    public function getContent(): \ArrayObject
    {
        return $this->content;
    }
}