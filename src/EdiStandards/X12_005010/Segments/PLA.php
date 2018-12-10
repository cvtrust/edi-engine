<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\Segments;

use CVTrust\EdiEngine\EdiEngine\Common\Enums\RequirementDesignator;
use CVTrust\EdiEngine\EdiEngine\Common\MapSegment;
use CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements as DE;

final class PLA extends MapSegment
{
    public function __construct()
    {
        parent::__construct();

        $content = $this->getContent();

        $content->append(DE\E_0306::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0098::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0373::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0337::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1203::createWithRequirementDesignator(RequirementDesignator::Optional()));
    }

}
