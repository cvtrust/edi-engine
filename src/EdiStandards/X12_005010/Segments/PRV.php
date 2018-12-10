<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\Segments;

use CVTrust\EdiEngine\EdiEngine\Common\Enums\RequirementDesignator;
use CVTrust\EdiEngine\EdiEngine\Common\MapSegment;
use CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements as DE;

final class PRV extends MapSegment
{
    public function __construct()
    {
        parent::__construct();

        $content = $this->getContent();

        $content->append(DE\E_1221::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0128::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0127::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0156::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\CompositeDataElements\C035::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1223::createWithRequirementDesignator(RequirementDesignator::Optional()));
    }

}
