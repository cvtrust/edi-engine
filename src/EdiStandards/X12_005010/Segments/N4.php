<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\Segments;

use CVTrust\EdiEngine\EdiEngine\Common\Enums\RequirementDesignator;
use CVTrust\EdiEngine\EdiEngine\Common\MapSegment;
use CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements as DE;

final class N4 extends MapSegment
{
    public function __construct()
    {
        parent::__construct();

        $content = $this->getContent();

        $content->append(DE\E_0019::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0156::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0116::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0026::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0309::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0310::createWithRequirementDesignator(RequirementDesignator::Optional()));
    }
}