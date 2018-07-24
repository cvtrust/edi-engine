<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/19/2018
 * Time: 11:33 AM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\Runtime;


use CVTrust\EdiEngine\Common\MapBaseEntity;
use Solarium\Component\EdisMax;

class EdiTrans extends EdiLoop
{
    public const TYPE = 'M';

    /**
     * @var EdiSegment
     */
    protected $st;

    /**
     * @var EdiSegment
     */
    protected $se;

    public function __construct(?MapBaseEntity $definition = null)
    {
        parent::__construct($definition);
    }

    public function getType(): string
    {
        return self::TYPE;
    }

    /**
     * @return EdiSegment
     */
    public function getSt(): EdiSegment
    {
        return $this->st;
    }

    /**
     * @param EdiSegment $st
     */
    public function setSt(EdiSegment $st): void
    {
        $this->st = $st;
    }

    /**
     * @return EdiSegment
     */
    public function getSe(): EdiSegment
    {
        return $this->se;
    }

    /**
     * @param EdiSegment $se
     */
    public function setSe(EdiSegment $se): void
    {
        $this->se = $se;
    }

}