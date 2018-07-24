<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/20/2018
 * Time: 8:30 AM
 */
declare(strict_types=1);


namespace CVTrust\Edi\EdiStandards\X12_005010\DataElements;


use CVTrust\EdiEngine\Common\Definitions\MapSimpleDataElement;
use CVTrust\EdiEngine\Common\Enums\DataType;

class E_0I16 extends MapSimpleDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->setDataType(DataType::N0());
        $this->setMinLength(1);
        $this->setMaxLength(5);
    }
}