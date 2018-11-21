<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements;

use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapSimpleDataElement;
use CVTrust\EdiEngine\EdiEngine\Common\Enums\DataType;

final class E_0365 extends MapSimpleDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->setDataType(DataType::ID());
        $this->setMinLength(2);
        $this->setMaxLength(2);
        $this->allowedValues = new \ArrayObject(["AA","AB","AC","AD","AP","AS","AU","BN","BT","CA","CP","DN","ED","EM","EX","FT","FU","FX","HF","HP","IT","MN","NP","OF","OT","PA","PC","PP","PS","SP","TE","TL","TM","TN","TX","UR","VM","WC","WF","WP"]);
    }
}