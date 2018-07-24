<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/19/2018
 * Time: 4:13 PM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements;


use CVTrust\EdiEngine\Common\Definitions\MapSimpleDataElement;
use CVTrust\EdiEngine\Common\Enums\DataType;

class E_1065 extends MapSimpleDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->setDataType(DataType::ID());
        $this->setMinLength(1);
        $this->setMaxLength(1);
        $this->allowedValues = new \ArrayObject(["1","2","3","4","5","6","7","8","9","C","D","E","G","L"]);
    }
}