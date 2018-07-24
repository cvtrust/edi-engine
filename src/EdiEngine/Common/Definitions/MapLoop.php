<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/20/2018
 * Time: 8:52 AM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\Common\Definitions;


use CVTrust\EdiEngine\Common\MapBaseEntity;

class MapLoop extends MapBaseEntity
{
    /**
     * @var MapLoop
     */
    protected $parentLoop;

    /**
     * @var \ArrayObject
     */
    protected $content;

    /**
     * @var int
     */
    protected $currentPos;

    public function __construct(?MapLoop $parentLoop)
    {
        parent::__construct();

        $this->parentLoop = $parentLoop;
        $this->maxOccurs = 1000;
    }

    public function getEdiName(): string
    {
        return substr($this->name, 2);
    }

    /**
     * @return MapLoop
     */
    public function getParentLoop(): MapLoop
    {
        return $this->parentLoop;
    }

    /**
     * @return int
     */
    public function getCurrentPos(): int
    {
        return $this->currentPos;
    }

    /**
     * @param int $currentPos
     */
    public function setCurrentPos(int $currentPos): void
    {
        $this->currentPos = $currentPos;
    }

    public function findContentByName(string $name): ?MapBaseEntity
    {
        /** @var MapBaseEntity $mapBaseEntity */
        foreach ($this->getContent() as $mapBaseEntity)
        {
            if ($mapBaseEntity->getName() === $name)
                return $mapBaseEntity;
        }

        return null;
    }

    public function findContentByEdiName(string $name): ?MapBaseEntity
    {
        /** @var MapBaseEntity $mapBaseEntity */
        foreach ($this->getContent() as $mapBaseEntity)
        {
            if ($mapBaseEntity->getEdiName() === $name)
                return $mapBaseEntity;
        }

        return null;
    }

}