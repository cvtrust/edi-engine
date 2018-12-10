<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\Segments;

use CVTrust\EdiEngine\EdiEngine\Common\Enums\RequirementDesignator;
use CVTrust\EdiEngine\EdiEngine\Common\MapSegment;
use CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements as DE;

final class LUI extends MapSegment
{
    public function __construct()
    {
        parent::__construct();

        $this->getSyntaxNotes()->exchangeArray(["P0102", "L040203"]);

        $content = $this->getContent();

        $content->append(DE\E_0066::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0067::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0352::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1303::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_1476::createWithRequirementDesignator(RequirementDesignator::Optional()));
    }
}
