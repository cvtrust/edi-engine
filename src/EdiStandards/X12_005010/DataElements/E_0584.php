<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements;

use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapSimpleDataElement;
use CVTrust\EdiEngine\EdiEngine\Common\Enums\DataType;

final class E_0584 extends MapSimpleDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->setDataType(DataType::ID());
        $this->setMinLength(2);
        $this->setMaxLength(2);
        $this->allowedValues = new \ArrayObject(["AA","AB","AC","AD","AE","AF","AG","AH","AO","AP","AU","CA","CO","CT","DC","DD","DI","DQ","DR","DS","FA","FB","FC","FO","FT","HD","IA","IR","L1","LA","LE","LF","LM","LS","LU","LW","LX","NE","OS","OT","PA","PE","PT","PV","PW","RA","RB","RC","RD","RE","RI","RM","RP","RT","RU","RW","SA","SB","SE","SL","SU","TE","TF","TM","TP","TR","UK","VO","ZZ"]);
    }
}
