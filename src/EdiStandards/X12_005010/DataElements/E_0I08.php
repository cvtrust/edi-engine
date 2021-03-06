<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/19/2018
 * Time: 1:39 PM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements;


use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapSimpleDataElement;
use CVTrust\EdiEngine\EdiEngine\Common\Enums\DataType;

class E_0I08 extends MapSimpleDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->setDataType(DataType::DT());
        $this->setMinLength(6);
        $this->setMaxLength(6);
    }
}