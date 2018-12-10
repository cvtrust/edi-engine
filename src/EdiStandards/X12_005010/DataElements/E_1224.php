<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements;

use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapSimpleDataElement;
use CVTrust\EdiEngine\EdiEngine\Common\Enums\DataType;

final class E_1224 extends MapSimpleDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->setDataType(DataType::ID());
        $this->setMinLength(2);
        $this->setMaxLength(2);
        $this->allowedValues = new \ArrayObject(["AC","EA","EB","EC","ED","EI","EM","EP","ER","ES","ET","EU","IC","MB","MS","MT","MU","NC","NQ","PB","PS","PT","QC","QE","QM","QP","RA","RK","RO","RP","RS","RT","SD","SP","ZZ"]);
    }
}
