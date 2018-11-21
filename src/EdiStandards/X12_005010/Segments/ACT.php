<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\Segments;

use CVTrust\EdiEngine\EdiEngine\Common\Enums\RequirementDesignator;
use CVTrust\EdiEngine\EdiEngine\Common\MapSegment;
use CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements as DE;

final class ACT extends MapSegment
{
    public function __construct()
    {
        parent::__construct();

        $this->getSyntaxNotes()->exchangeArray(["P0304", "C0506", "C0705"]);

        $content = $this->getContent();

        $content->append(DE\E_0508::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0093::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0066::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0067::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0569::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0508::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0352::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0107::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1216::createWithRequirementDesignator(RequirementDesignator::Optional()));
    }
}
