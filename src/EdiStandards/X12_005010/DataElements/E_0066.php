<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/19/2018
 * Time: 4:06 PM
 */
declare(strict_types=1);


namespace CVTrust\Edi\EdiStandards\X12_005010\DataElements;


use CVTrust\EdiEngine\Common\Definitions\MapSimpleDataElement;
use CVTrust\EdiEngine\Common\Enums\DataType;

class E_0066 extends MapSimpleDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->setDataType(DataType::ID());
        $this->setMinLength(1);
        $this->setMaxLength(2);
        $this->allowedValues = new \ArrayObject(["1","10","11","12","13","14","15","16","17","18","19","2","20","21","22","23","24","25","26","27","28","29","3","30","31","32","33","34","35","36","37","38","39","4","40","41","42","43","44","45","46","47","48","49","5","50","53","54","55","56","57","58","59","6","61","62","63","64","7","71","72","73","74","75","76","77","78","8","81","82","9","90","91","92","93","94","95","96","97","98","99","A","A1","A2","A3","A4","A5","A6","AA","AB","AC","AD","AE","AL","AP","BC","BD","BE","BG","BP","BS","C","C1","C2","C5","CA","CB","CC","CD","CE","CF","CI","CL","CM","CP","CR","CS","CT","D","DG","DL","DN","DP","DS","E","EC","EH","EI","EP","EQ","ER","ES","F","FA","FB","FC","FD","FI","FJ","FN","G","GA","GC","HC","HN","I","J","K","L","LC","LD","LE","LI","LN","M3","M4","M5","M6","MA","MB","MC","MD","MI","MK","ML","MN","MP","MR","N","NA","ND","NI","NO","OC","OP","PA","PB","PC","PI","PP","PR","RA","RB","RC","RD","RE","RT","S","SA","SB","SD","SF","SI","SJ","SL","SP","ST","SV","SW","TA","TC","TZ","UC","UL","UM","UP","UR","US","WR","XV","XX","ZC","ZN","ZY","ZZ"]);
    }
}