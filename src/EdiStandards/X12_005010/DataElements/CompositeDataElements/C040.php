<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/19/2018
 * Time: 3:50 PM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements\CompositeDataElements;


use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapCompositeDataElement;
use CVTrust\EdiEngine\EdiEngine\Common\Enums\RequirementDesignator;
use CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements AS DE;

class C040 extends MapCompositeDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->content->append(DE\E_0128::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $this->content->append(DE\E_0127::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $this->content->append(DE\E_0128::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $this->content->append(DE\E_0127::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $this->content->append(DE\E_0128::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $this->content->append(DE\E_0127::createWithRequirementDesignator(RequirementDesignator::Optional()));
    }

}