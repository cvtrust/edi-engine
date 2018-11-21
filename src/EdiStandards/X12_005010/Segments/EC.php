<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\Segments;

use CVTrust\EdiEngine\EdiEngine\Common\Enums\RequirementDesignator;
use CVTrust\EdiEngine\EdiEngine\Common\MapSegment;
use CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements as DE;

final class EC extends MapSegment
{
    public function __construct()
    {
        parent::__construct();

        $content = $this->getContent();

        $content->append(DE\E_1176::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1176::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1176::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0954::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1201::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1149::createWithRequirementDesignator(RequirementDesignator::Optional()));
    }
}