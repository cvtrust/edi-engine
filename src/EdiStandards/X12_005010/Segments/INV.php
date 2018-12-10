<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\Segments;

use CVTrust\EdiEngine\EdiEngine\Common\Enums\RequirementDesignator;
use CVTrust\EdiEngine\EdiEngine\Common\MapSegment;
use CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements as DE;

final class INV extends MapSegment
{
    public function __construct()
    {
        parent::__construct();

        $this->getSyntaxNotes()->exchangeArray(["E020304"]);

        $content = $this->getContent();

        $content->append(DE\E_0352::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0954::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0782::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0380::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0156::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0352::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0782::createWithRequirementDesignator(RequirementDesignator::Optional()));
    }
}
