<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements;

use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapSimpleDataElement;
use CVTrust\EdiEngine\EdiEngine\Common\Enums\DataType;

final class E_0061 extends MapSimpleDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->setDataType(DataType::AN());
        $this->setMinLength(1);
        $this->setMaxLength(30);
    }
}
