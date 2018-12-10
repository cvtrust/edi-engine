<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements;

use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapSimpleDataElement;
use CVTrust\EdiEngine\EdiEngine\Common\Enums\DataType;

final class E_1207 extends MapSimpleDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->setDataType(DataType::ID());
        $this->setMinLength(3);
        $this->setMaxLength(3);
        $this->allowedValues = new \ArrayObject(["CHD","DEP","E1D","E2D","E3D","E5D","E6D","E7D","E8D","E9D","ECH","EMP","ESP","FAM","IND","SPC","SPO","TWO"]);
    }
}
