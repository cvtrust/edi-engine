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

class TRN extends MapSegment
{
    public function __construct()
    {
        parent::__construct();
        $content = $this->getContent();

        $content->append(DE\E_0481::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0127::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0509::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0127::createWithRequirementDesignator(RequirementDesignator::Optional()));
    }
}