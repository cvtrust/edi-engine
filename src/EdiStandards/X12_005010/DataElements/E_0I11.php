<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/19/2018
 * Time: 1:39 PM
 */
declare(strict_types=1);


namespace CVTrust\Edi\EdiStandards\X12_005010\DataElements;


use CVTrust\Edi\EdiEngine\Common\Definitions\MapSimpleDataElement;
use CVTrust\Edi\EdiEngine\Common\Enums\DataType;

class E_0I11 extends MapSimpleDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->setDataType(DataType::ID());
        $this->setMinLength(5);
        $this->setMaxLength(5);
        $this->allowedValues = new \ArrayObject(["00200","00201","00204","00300","00301","00302","00303","00304","00305","00306","00307","00400","00401","00402","00501"]);
    }
}