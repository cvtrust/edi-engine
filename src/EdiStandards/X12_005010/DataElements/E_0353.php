<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements;

use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapSimpleDataElement;
use CVTrust\EdiEngine\EdiEngine\Common\Enums\DataType;

final class E_0353 extends MapSimpleDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->setDataType(DataType::ID());
        $this->setMinLength(2);
        $this->setMaxLength(2);
        $this->allowedValues = new \ArrayObject(["00","01","02","03","04","05","06","07","08","10","11","12","13","14","15","16","17","18","19","20","21","22","24","25","26","27","28","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46","47","48","49","50","51","52","53","54","55","56","5C","77","CN","CO","EX","GR","PR","RH","RV","SU","ZZ"]);
    }
}
