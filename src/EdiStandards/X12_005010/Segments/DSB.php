<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\Segments;

use CVTrust\EdiEngine\EdiEngine\Common\Enums\RequirementDesignator;
use CVTrust\EdiEngine\EdiEngine\Common\MapSegment;
use CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements as DE;

final class DSB extends MapSegment
{
    public function __construct()
    {
        parent::__construct();

        $this->getSyntaxNotes()->exchangeArray(["P0708"]);

        $content = $this->getContent();

        $content->append(DE\E_1146::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0380::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1149::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1154::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1161::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0782::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0235::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1137::createWithRequirementDesignator(RequirementDesignator::Optional()));
    }
}
