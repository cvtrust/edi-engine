<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements;

use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapSimpleDataElement;
use CVTrust\EdiEngine\EdiEngine\Common\Enums\DataType;

final class E_1205 extends MapSimpleDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->setDataType(DataType::ID());
        $this->setMinLength(2);
        $this->setMaxLength(3);
        $this->allowedValues = new \ArrayObject(["403","AC","ADD","AF","AG","AH","AI","AJ","AK","AP","AR","BC","BE","BH","BK","CHU","CLF","CV","DCP","DEN","EMP","EPO","FAC","FSA","GDC","HE","HLT","HMO","IRA","IRC","LL","LTC","LTD","MM","MOD","NGD","NQ","PDG","POS","PPO","PRA","PSP","QDA","QDC","STD","UL","UR","VIS","ZZZ"]);
    }
}
