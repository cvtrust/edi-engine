<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/18/2018
 * Time: 3:11 PM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\Runtime;


class EdiGroup
{
    protected $functionalCode;

    /**
     * @var EdiSegment
     */
    protected $gs;

    /**
     * @var EdiSegment
     */
    protected $ge;

    /**
     * @var \ArrayObject
     */
    protected $transactions;

    public function __construct(string $functionalCode)
    {
        $this->functionalCode = $functionalCode;
        $this->transactions = new \ArrayObject([]);
    }

    /**
     * @return string
     */
    public function FunctionalCode(): string
    {
        return $this->functionalCode;
    }

    /**
     * @return EdiSegment
     */
    public function getGS(): EdiSegment
    {
        return $this->gs;
    }

    /**
     * @param EdiSegment $gs
     */
    public function setGS(EdiSegment $gs): void
    {
        $this->gs = $gs;
    }

    /**
     * @return EdiSegment
     */
    public function getGE(): EdiSegment
    {
        return $this->ge;
    }

    /**
     * @param EdiSegment $ge
     */
    public function setGE(EdiSegment $ge): void
    {
        $this->ge = $ge;
    }

    /**
     * @return \ArrayObject
     */
    public function Transactions(): \ArrayObject
    {
        return $this->transactions;
    }

}