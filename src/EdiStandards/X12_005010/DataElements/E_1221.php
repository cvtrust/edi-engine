<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements;

use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapSimpleDataElement;
use CVTrust\EdiEngine\EdiEngine\Common\Enums\DataType;

final class E_1221 extends MapSimpleDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->setDataType(DataType::ID());
        $this->setMinLength(1);
        $this->setMaxLength(3);
        $this->allowedValues = new \ArrayObject(["AD","AS","AT","BI","BS","CO","CV","H","HH","LA","ON","OP","OR","OT","P1","P2","PC","PE","PT","PU","R","RF","RP","SB","SK","SU"]);
    }
}
