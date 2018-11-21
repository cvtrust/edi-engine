<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\Segments;

use CVTrust\EdiEngine\EdiEngine\Common\Enums\RequirementDesignator;
use CVTrust\EdiEngine\EdiEngine\Common\MapSegment;
use CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements as DE;

final class ICM extends MapSegment
{
    public function __construct()
    {
        parent::__construct();

        $content = $this->getContent();

        $content->append(DE\E_0594::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0782::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0380::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0310::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1214::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0100::createWithRequirementDesignator(RequirementDesignator::Optional()));
    }
}