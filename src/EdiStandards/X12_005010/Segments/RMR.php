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

class RMR extends MapSegment
{
    public function __construct()
    {
        parent::__construct();

        $this->getSyntaxNotes()->exchangeArray(["P0102", "P0708"]);

        $content = $this->getContent();

        $content->append(DE\E_0128::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0127::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0482::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0782::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0782::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0782::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0426::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0782::createWithRequirementDesignator(RequirementDesignator::Optional()));
    }
}