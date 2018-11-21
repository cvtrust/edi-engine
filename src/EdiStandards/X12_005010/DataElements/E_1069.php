<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements;

use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapSimpleDataElement;
use CVTrust\EdiEngine\EdiEngine\Common\Enums\DataType;

final class E_1069 extends MapSimpleDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->setDataType(DataType::ID());
        $this->setMinLength(2);
        $this->setMaxLength(2);
        $this->allowedValues = new \ArrayObject(["01","02","03","04","05","06","07","08","09","10","11","12","13","14","15","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","36","37","38","39","40","41","43","45","46","47","48","49","50","51","52","53","55","56","57","58","59","60","61","62","63","64","65","66","67","68","70","71","72","73","74","75","76","78","79","80","81","82","83","84","86","87","88","90","91","92","93","94","95","96","97","98","99","A1","A2","A3","A4","A5","A6","A7","A8","A9","B1","B2","B3","B4","B5","B6","B7","B8","B9","C1","C2","C3","C4","C5","C8","C9","D1","D2","D3","D4","D5","D6","D7","D8","D9","E1","E2","E3","E4","E5","E6","E7","E8","E9","F1","F2","F3","F6","F7","F8","F9","G2","G3","G4","G5","G6","G7","G8","G9","H1","H4","N1","OT","ZZ"]);
    }
}
