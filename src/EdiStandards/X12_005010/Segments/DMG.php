<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\Segments;

use CVTrust\EdiEngine\EdiEngine\Common\Enums\RequirementDesignator;
use CVTrust\EdiEngine\EdiEngine\Common\MapSegment;
use CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements as DE;

final class DMG extends MapSegment
{
    public function __construct()
    {
        parent::__construct();

        $this->getSyntaxNotes()->exchangeArray(["P0102"]);

        $content = $this->getContent();

        $content->append(DE\E_1250::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1251::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1068::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1067::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1109::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1066::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0026::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0659::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0380::createWithRequirementDesignator(RequirementDesignator::Optional()));
    }
}