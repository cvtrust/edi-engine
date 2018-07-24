<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/18/2018
 * Time: 3:22 PM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\Common;


use CVTrust\EdiEngine\Common\Enums\RequirementDesignator;

abstract class MapBaseEntity
{
    /**
     * @var string
     */
    protected $name;

    protected $ediName;

    protected $content;

    protected $reqDes;

    protected $maxOccurs;

    protected $occurredTimes;

    protected function __construct()
    {
        $this->content = new \ArrayObject([]);
        $this->name = array_pop(explode('\\', get_class($this)));
        $this->reqDes = RequirementDesignator::Optional();
    }

    public static function createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator $requirementDesignator, int $maxOccurs): self
    {
        $self = new static();
        $self->setReqDes($requirementDesignator);
        $self->setMaxOccurs($maxOccurs);
        return $self;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public abstract function getEdiName(): string;

    /**
     * @return \ArrayObject
     */
    public function getContent(): \ArrayObject
    {
        return $this->content;
    }

    /**
     * @return mixed
     */
    public function getReqDes()
    {
        return $this->reqDes;
    }

    /**
     * @param mixed $reqDes
     */
    public function setReqDes($reqDes): void
    {
        $this->reqDes = $reqDes;
    }

    /**
     * @return mixed
     */
    public function getMaxOccurs()
    {
        return $this->maxOccurs;
    }

    /**
     * @param mixed $maxOccurs
     */
    public function setMaxOccurs($maxOccurs): void
    {
        $this->maxOccurs = $maxOccurs;
    }

    /**
     * @return mixed
     */
    public function getOccurredTimes()
    {
        return $this->occurredTimes;
    }

    /**
     * @param mixed $occurredTimes
     */
    public function setOccurredTimes($occurredTimes): void
    {
        $this->occurredTimes = $occurredTimes;
    }

    public function __toString(): string
    {
        return $this->getName();
    }
}