<?php
declare(strict_types=1);

namespace CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements;

use CVTrust\EdiEngine\EdiDataElement\MaritalStatusCode;
use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapSimpleDataElement;
use CVTrust\EdiEngine\EdiEngine\Common\Enums\DataType;

final class E_1067 extends MapSimpleDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->setDataType(DataType::ID());
        $this->setMinLength(1);
        $this->setMaxLength(1);
        $this->allowedValues = new \ArrayObject(MaritalStatusCode::getValues());
    }
}
