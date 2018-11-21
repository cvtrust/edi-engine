<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\Segments;

use CVTrust\EdiEngine\EdiEngine\Common\Enums\RequirementDesignator;
use CVTrust\EdiEngine\EdiEngine\Common\MapSegment;
use CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements as DE;

final class QTY extends MapSegment
{
    public function __construct()
    {
        parent::__construct();

        $this->getSyntaxNotes()->exchangeArray(["R0218", "E0218"]);

        $content = $this->getContent();

        $content->append(DE\E_0673::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $content->append(DE\E_0380::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\CompositeDataElements\C001::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $content->append(DE\E_0061::createWithRequirementDesignator(RequirementDesignator::Optional()));
    }
}
