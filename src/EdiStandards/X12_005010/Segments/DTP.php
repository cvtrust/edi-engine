<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\Segments;

use CVTrust\EdiEngine\EdiEngine\Common\Enums\RequirementDesignator;
use CVTrust\EdiEngine\EdiEngine\Common\MapSegment;
use CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements as DE;

final class DTP extends MapSegment
{
    public function __construct()
    {
        parent::__construct();

        $this->getSyntaxNotes()->exchangeArray(["P0102", "P0708"]);

        $content = $this->getContent();

        $content->append(DE\E_0374::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_1250::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_1251::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
    }
}
