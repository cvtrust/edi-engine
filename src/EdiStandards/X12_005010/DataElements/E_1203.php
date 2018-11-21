<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements;

use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapSimpleDataElement;
use CVTrust\EdiEngine\EdiEngine\Common\Enums\DataType;

final class E_1203 extends MapSimpleDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->setDataType(DataType::ID());
        $this->setMinLength(2);
        $this->setMaxLength(3);
        $this->allowedValues = new \ArrayObject(["01","02","03","04","05","06","07","08","09","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46","47","48","49","4A","4B","4C","50","51","52","53","54","55","56","57","58","59","60","61","62","63","64","65","66","67","68","69","70","71","72","73","75","76","77","78","79","80","81","82","83","84","85","86","87","88","89","90","AA","AB","AC","AD","AE","AF","AG","AH","AI","AJ","XB","XI","XL","XM","XN","XT","ZZ"]);
    }
}
