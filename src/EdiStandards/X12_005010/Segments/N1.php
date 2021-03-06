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

class N1 extends MapSegment
{
    public function __construct()
    {
        parent::__construct();

        $this->getSyntaxNotes()->exchangeArray(["R0203", "P0304"]);

        $content = $this->getContent();

        $content->append(DE\E_0098::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0093::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0066::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0067::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0706::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0098::createWithRequirementDesignator(RequirementDesignator::Optional()));
    }
}