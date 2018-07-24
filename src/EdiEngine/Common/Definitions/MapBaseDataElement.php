<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/18/2018
 * Time: 4:55 PM
 */
declare(strict_types=1);


namespace CVTrust\Edi\EdiEngine\Common\Definitions;


use CVTrust\Edi\EdiEngine\Common\Enums\RequirementDesignator;

abstract class MapBaseDataElement
{
    /**
     * @var RequirementDesignator
     */
    protected $reqDes;

    public static function createWithRequirementDesignator(RequirementDesignator $requirementDesignator): self
    {
        $self = new static();
        $self->setReqDes($requirementDesignator);
        return $self;
    }

    /**
     * @return RequirementDesignator
     */
    public function getReqDes(): RequirementDesignator
    {
        return $this->reqDes;
    }

    /**
     * @param RequirementDesignator $reqDes
     */
    public function setReqDes(RequirementDesignator $reqDes): void
    {
        $this->reqDes = $reqDes;
    }

}