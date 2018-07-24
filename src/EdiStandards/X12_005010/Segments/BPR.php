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

class BPR extends MapSegment
{
    public function __construct()
    {
        parent::__construct();

        $this->getSyntaxNotes()->exchangeArray(["P0607", "C0809", "P1213", "C1415", "P1819", "C2021"]);

        $content = $this->getContent();

        $content->append(DE\E_0305::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0782::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0478::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0591::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0812::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0506::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0507::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0569::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0508::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0509::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0510::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0506::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0507::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0569::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0508::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0373::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1048::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0506::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0507::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0569::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0508::createWithRequirementDesignator(RequirementDesignator::Optional()));

    }
}