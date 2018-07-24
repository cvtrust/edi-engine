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

class REF extends MapSegment
{
    public function __construct()
    {
        parent::__construct();

        $this->getSyntaxNotes()->exchangeArray(["P0607", "C0809", "P1213", "C1415", "P1819", "C2021"]);

        $content = $this->getContent();

        $content->append(DE\E_0128::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0127::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0352::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\CompositeDataElements\C040::createWithRequirementDesignator(RequirementDesignator::Optional()));

    }
}