<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\Segments;

use CVTrust\EdiEngine\EdiEngine\Common\Enums\RequirementDesignator;
use CVTrust\EdiEngine\EdiEngine\Common\MapSegment;
use CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements as DE;

final class PER extends MapSegment
{
    public function __construct()
    {
        parent::__construct();

        $this->getSyntaxNotes()->exchangeArray(["P0304", "P0506", "P0708"]);

        $content = $this->getContent();

        $content->append(DE\E_0366::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0093::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0365::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0364::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0365::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0364::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0365::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0364::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0443::createWithRequirementDesignator(RequirementDesignator::Optional()));
    }

}
