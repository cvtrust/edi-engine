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

class IEA extends MapSegment
{
    public function __construct()
    {
        parent::__construct();
        $content = $this->getContent();

        $content->append(DE\E_0I16::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0I12::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
    }
}