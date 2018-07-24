<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/19/2018
 * Time: 2:32 PM
 */
declare(strict_types=1);


namespace CVTrust\Edi\EdiStandards\X12_005010\Segments;


use CVTrust\EdiEngine\Common\Enums\RequirementDesignator;
use CVTrust\EdiEngine\Common\MapSegment;
use CVTrust\Edi\EdiStandards\X12_005010\DataElements as DE;

class DTM extends MapSegment
{
    public function __construct()
    {
        parent::__construct();
        $content = $this->getContent();

        $content->append(DE\E_0374::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0373::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0337::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0623::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1250::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1251::createWithRequirementDesignator(RequirementDesignator::Optional()));
    }
}