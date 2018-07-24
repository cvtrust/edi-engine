<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/19/2018
 * Time: 4:01 PM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements;


use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapSimpleDataElement;
use CVTrust\EdiEngine\EdiEngine\Common\Enums\DataType;

class E_1250 extends MapSimpleDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->setDataType(DataType::ID());
        $this->setMinLength(2);
        $this->setMaxLength(3);
        $this->allowedValues = new \ArrayObject(["CC","CD","CM","CQ","CY","D6","D8","DA","DB","DD","DT","DTS","EH","KA","MD","MM","RD","RD2","RD4","RD5","RD6","RD8","RDM","RDT","RMD","RMY","RTM","RTS","TC","TM","TQ","TR","TS","TT","TU","UN","YM","YMM","YY"]);
    }

}