<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/18/2018
 * Time: 3:01 PM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiEngine;


use CVTrust\EdiEngine\EdiEngine\Runtime\EdiInterchange;

class EdiBatch
{
    /**
     * @var \DateTime
     */
    protected $date;

    /**
     * @var \ArrayObject
     */
    protected $interchanges;

    public function __construct()
    {
        $this->date = new \DateTime();
        $this->interchanges = new \ArrayObject([]);
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
    }

    /**
     * @return \ArrayObject
     */
    public function getInterchanges(): \ArrayObject
    {
        return $this->interchanges;
    }


}