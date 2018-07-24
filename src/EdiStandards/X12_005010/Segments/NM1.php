<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/19/2018
 * Time: 2:32 PM
 */
declare(strict_types=1);


namespace CVTrust\Edi\EdiStandards\X12_005010\Segments;


use CVTrust\Edi\EdiEngine\Common\Enums\RequirementDesignator;
use CVTrust\Edi\EdiEngine\Common\MapSegment;
use CVTrust\Edi\EdiStandards\X12_005010\DataElements as DE;

class NM1 extends MapSegment
{
    public function __construct()
    {
        parent::__construct();

        $this->getSyntaxNotes()->exchangeArray(["P0809", "C1110"]);

        $content = $this->getContent();

        $content->append(DE\E_0098::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_1065::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_1035::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1036::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1037::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1038::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1039::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0066::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0067::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0706::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0098::createWithRequirementDesignator(RequirementDesignator::Optional()));
    }
}