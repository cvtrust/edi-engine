<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements;

use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapSimpleDataElement;
use CVTrust\EdiEngine\EdiEngine\Common\Enums\DataType;

final class E_0309 extends MapSimpleDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->setDataType(DataType::ID());
        $this->setMinLength(1);
        $this->setMaxLength(2);
        $this->allowedValues = new \ArrayObject(["10","11","12","13","14","18","19","20","21","22","27","28","29","30","31","32","33","34","35","36","38","39","40","41","42","43","44","45","46","47","48","49","50","52","53","54","55","57","58","59","60","93","94","A","A1","AA","AC","AP","AR","B","B1","BE","BL","BS","C","C2","CA","CB","CC","CD","CE","CI","CL","CO","CR","CS","CY","D","DC","DE","DL","DO","DP","DR","DT","E","EA","EL","F","FA","FE","FF","FI","FR","FS","FT","FV","GL","H","I","IA","IB","IM","IP","IS","IT","K","KE","KL","KP","L","LO","M","MI","MS","MZ","NS","O","OA","OF","OL","OP","OR","OV","P","PA","PB","PC","PD","PE","PF","PG","PH","PL","PO","PP","PQ","PR","PS","PT","PU","RA","RC","RE","RG","RJ","RL","RS","RT","SA","SB","SC","SD","SE","SG","SH","SL","SN","SP","SS","ST","SW","TA","TC","TL","TM","TN","TP","TR","TX","UN","UR","UT","VA","VI","VS","W","WF","WH","WI","ZN","ZZ"]);
    }

}