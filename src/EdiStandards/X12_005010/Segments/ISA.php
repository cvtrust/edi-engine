<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/19/2018
 * Time: 1:23 PM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\Segments;


use CVTrust\EdiEngine\EdiEngine\Common\Enums\RequirementDesignator;
use CVTrust\EdiEngine\EdiEngine\Common\MapSegment;
use CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements as DE;

class ISA extends MapSegment
{
    public function __construct()
    {
        parent::__construct();
        $content = $this->getContent();

        $content->append(DE\E_0I01::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0I02::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0I03::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0I04::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0I05::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0I06::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0I05::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0I07::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0I08::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0I09::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0I10::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0I11::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0I12::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0I13::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0I14::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0I15::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
    }
}