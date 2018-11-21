<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements;

use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapSimpleDataElement;
use CVTrust\EdiEngine\EdiEngine\Common\Enums\DataType;

final class E_0875 extends MapSimpleDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->setDataType(DataType::ID());
        $this->setMinLength(3);
        $this->setMaxLength(3);
        $this->allowedValues = new \ArrayObject(["001","002","003","004","005","006","007","008","009","010","012","013","014","015","016","017","018","019","020","021","022","023","024","025","026","028","029","030","031","032","033","050","051","052","053","054","055","056","057","058","059","060","061","062","063","064","065","066","067","068","069","070","071","072","073","074","075","076","077","078","079","080","081","082","083","100","101","102","104","105","106","107","108","109","110","111","112","113","114","115","116","117","118","119","123","124","125","126","127","128","129","130","131","132","133","134","135","136","137","138","CEP","PRI","ZZZ"]);
    }
}
