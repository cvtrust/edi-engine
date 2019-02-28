<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements\CompositeDataElements;

use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapCompositeDataElement;
use CVTrust\EdiEngine\EdiEngine\Common\Enums\RequirementDesignator;
use CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements AS DE;

final class C052 extends MapCompositeDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->content->append(DE\E_1218::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $this->content->append(DE\E_1701::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $this->content->append(DE\E_1701::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $this->content->append(DE\E_1701::createWithRequirementDesignator(RequirementDesignator::Optional()));
    }
}
