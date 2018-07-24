<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/19/2018
 * Time: 3:27 PM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements;


use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapSimpleDataElement;
use CVTrust\EdiEngine\EdiEngine\Common\Enums\DataType;

class E_0569 extends MapSimpleDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->setDataType(DataType::ID());
        $this->setMinLength(1);
        $this->setMaxLength(3);
        $this->allowedValues = new \ArrayObject(["01","03","05","06","07","08","1","10","11","12","13","14","2","3","AG","ALC","ANN","AP","BA","CB","CC","CDM","CDS","CM","CRU","DA","DC","EC","EPC","LTD","MUT","PRI","RD","REL","RS","SG","SKA","Z","ZB1","ZB2"]);
    }
}