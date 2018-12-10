<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\Segments;

use CVTrust\EdiEngine\EdiEngine\Common\Enums\RequirementDesignator;
use CVTrust\EdiEngine\EdiEngine\Common\MapSegment;
use CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements as DE;

final class HD extends MapSegment
{
    public function __construct()
    {
        parent::__construct();

        $content = $this->getContent();

        $content->append(DE\E_0875::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_1203::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1205::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1204::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1207::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0609::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0609::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1209::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1073::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1211::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1073::createWithRequirementDesignator(RequirementDesignator::Optional()));
    }
}
