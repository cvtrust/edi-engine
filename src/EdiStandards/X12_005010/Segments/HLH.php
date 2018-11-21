<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\Segments;

use CVTrust\EdiEngine\EdiEngine\Common\Enums\RequirementDesignator;
use CVTrust\EdiEngine\EdiEngine\Common\MapSegment;
use CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements as DE;

final class HLH extends MapSegment
{
    public function __construct()
    {
        parent::__construct();

        $content = $this->getContent();

        $content->append(DE\E_1212::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0065::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0081::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0081::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0352::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1213::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0352::createWithRequirementDesignator(RequirementDesignator::Optional()));
    }
}