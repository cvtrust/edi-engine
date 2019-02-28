<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/19/2018
 * Time: 2:32 PM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\Segments;


use CVTrust\EdiEngine\EdiEngine\Common\Enums\RequirementDesignator;
use CVTrust\EdiEngine\EdiEngine\Common\MapSegment;
use CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements as DE;

class INS extends MapSegment
{
    public function __construct()
    {
        parent::__construct();
        $content = $this->getContent();

        $content->append(DE\E_1073::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_1069::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0875::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1203::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1216::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\CompositeDataElements\C052::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1219::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0584::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1220::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1073::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1250::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1251::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1165::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0019::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0156::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0026::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1470::createWithRequirementDesignator(RequirementDesignator::Optional()));
    }
}