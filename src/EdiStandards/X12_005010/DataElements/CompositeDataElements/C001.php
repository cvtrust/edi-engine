<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements\CompositeDataElements;

use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapCompositeDataElement;
use CVTrust\EdiEngine\EdiEngine\Common\Enums\RequirementDesignator;
use CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements as DE;

final class C001 extends MapCompositeDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->content->append(DE\E_0355::createWithRequirementDesignator(RequirementDesignator::Mandatory()));
        $this->content->append(DE\E_1018::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $this->content->append(DE\E_0649::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $this->content->append(DE\E_0355::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $this->content->append(DE\E_1018::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $this->content->append(DE\E_0649::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $this->content->append(DE\E_0355::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $this->content->append(DE\E_1018::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $this->content->append(DE\E_0649::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $this->content->append(DE\E_0355::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $this->content->append(DE\E_1018::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $this->content->append(DE\E_0649::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $this->content->append(DE\E_0355::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $this->content->append(DE\E_1018::createWithRequirementDesignator(RequirementDesignator::Optional()));
        $this->content->append(DE\E_0649::createWithRequirementDesignator(RequirementDesignator::Optional()));
    }
}
