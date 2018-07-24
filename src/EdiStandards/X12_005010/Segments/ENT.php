<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/19/2018
 * Time: 2:32 PM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\Segments;


use CVTrust\EdiEngine\Common\Enums\RequirementDesignator;
use CVTrust\EdiEngine\Common\MapSegment;
use CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements as DE;

class ENT extends MapSegment
{
    public function __construct()
    {
        parent::__construct();

        $this->getSyntaxNotes()->exchangeArray(["P020304", "P050607", "P0809"]);

        $content = $this->getContent();

        $content->append(DE\E_0554::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0098::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0066::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0067::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0098::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0066::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0067::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0128::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0127::createWithRequirementDesignator(RequirementDesignator::Optional()));
    }
}