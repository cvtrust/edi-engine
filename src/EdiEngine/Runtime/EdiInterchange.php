<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/18/2018
 * Time: 3:04 PM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiEngine\Runtime;


class EdiInterchange
{
    public const DefaultCompositeSeparator = ":";

    /**
     * @var string
     */
    protected $segmentSeparator;

    /**
     * @var string
     */
    protected $elementSeparator;

    /**
     * @var EdiSegment
     */
    protected $isa;

    /**
     * @var EdiSegment
     */
    protected $iea;

    /**
     * @var \ArrayObject
     */
    protected $groups;

    public function __construct()
    {
        $this->groups = new \ArrayObject([]);
    }

    /**
     * @return string
     */
    public function getSegmentSeparator(): string
    {
        return $this->segmentSeparator;
    }

    /**
     * @param string $segmentSeparator
     */
    public function setSegmentSeparator(string $segmentSeparator): void
    {
        $this->segmentSeparator = $segmentSeparator;
    }

    /**
     * @return string
     */
    public function getElementSeparator(): string
    {
        return $this->elementSeparator;
    }

    /**
     * @param string $elementSeparator
     */
    public function setElementSeparator(string $elementSeparator): void
    {
        $this->elementSeparator = $elementSeparator;
    }

    /**
     * @return EdiSegment
     */
    public function getIsa(): EdiSegment
    {
        return $this->isa;
    }

    /**
     * @param EdiSegment $isa
     */
    public function setIsa(EdiSegment $isa): void
    {
        $this->isa = $isa;
    }

    /**
     * @return EdiSegment
     */
    public function getIea(): EdiSegment
    {
        return $this->iea;
    }

    /**
     * @param EdiSegment $iea
     */
    public function setIea(EdiSegment $iea): void
    {
        $this->iea = $iea;
    }

    /**
     * @return \ArrayObject
     */
    public function getGroups(): \ArrayObject
    {
        return $this->groups;
    }

    /**
     * @param \ArrayObject $groups
     */
    public function setGroups(\ArrayObject $groups): void
    {
        $this->groups = $groups;
    }


}