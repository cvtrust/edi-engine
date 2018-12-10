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

class RP extends MapSegment
{
    public function __construct()
    {
        parent::__construct();

        $content = $this->getContent();

        $content->append(DE\E_0875::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_1205::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1203::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0352::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1295::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1073::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1296::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0151::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1204::createWithRequirementDesignator(RequirementDesignator::Optional()));

    }
}