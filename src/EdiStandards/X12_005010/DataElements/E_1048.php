<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/19/2018
 * Time: 3:30 PM
 */
declare(strict_types=1);


namespace CVTrust\Edi\EdiStandards\X12_005010\DataElements;


use CVTrust\Edi\EdiEngine\Common\Definitions\MapSimpleDataElement;
use CVTrust\Edi\EdiEngine\Common\Enums\DataType;

class E_1048 extends MapSimpleDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->setDataType(DataType::ID());
        $this->setMinLength(1);
        $this->setMaxLength(3);
        $this->allowedValues = new \ArrayObject(["COL","CON","DBT","PCS","PEN","PRL","TAX","VEN"]);
    }
}