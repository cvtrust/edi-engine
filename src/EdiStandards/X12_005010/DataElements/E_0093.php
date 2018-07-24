<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/19/2018
 * Time: 4:05 PM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements;


use CVTrust\EdiEngine\Common\Definitions\MapSimpleDataElement;
use CVTrust\EdiEngine\Common\Enums\DataType;

class E_0093 extends MapSimpleDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->setDataType(DataType::AN());
        $this->setMinLength(1);
        $this->setMaxLength(60);
    }
}