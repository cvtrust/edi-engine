<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/18/2018
 * Time: 4:33 PM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiEngine\Runtime;


use CVTrust\EdiEngine\EdiEngine\Common\MapBaseEntity;

class EdiSegment extends EdiBaseEntity
{
    public const TYPE = 'S';

    /**
     * @var \ArrayObject
     */
    protected $content;

    public function __construct(MapBaseEntity $definition)
    {
        parent::__construct($definition);
        $this->content = new \ArrayObject([]);
    }

    public function getType(): string
    {
        return self::TYPE;
    }

    /**
     * @return \ArrayObject
     */
    public function getContent(): \ArrayObject
    {
        return $this->content;
    }
}