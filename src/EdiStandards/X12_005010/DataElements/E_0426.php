<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/19/2018
 * Time: 4:19 PM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements;


use CVTrust\EdiEngine\Common\Definitions\MapSimpleDataElement;
use CVTrust\EdiEngine\Common\Enums\DataType;

class E_0426 extends MapSimpleDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->setDataType(DataType::ID());
        $this->setMinLength(2);
        $this->setMaxLength(2);
        $this->allowedValues = new \ArrayObject(["01","02","03","04","05","06","07","08","09","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46","47","48","49","50","51","52","53","54","55","56","57","58","59","60","61","62","63","64","65","66","68","69","70","71","72","73","74","75","76","77","78","79","80","81","82","83","84","85","86","87","88","89","90","91","92","93","94","95","96","97","98","99","A1","A2","A3","A4","A5","A6","A7","A8","A9","AA","AB","AC","AE","AF","AG","AH","AL","AM","AN","AO","AP","AQ","AR","AS","AT","AU","AV","AW","AX","AY","AZ","B1","B2","B3","B4","B5","B6","B7","B8","B9","BA","BB","BC","BD","BE","BF","BG","BH","BI","BJ","BK","BL","BM","BN","BO","BP","BR","BS","C1","C2","C3","C4","C5","C6","C7","C8","C9","CB","CE","CK","CM","CO","CP","CQ","CR","CS","CT","CU","CV","CW","D1","D2","D3","D4","D5","D6","D7","D8","D9","DA","DB","DC","DD","DE","DF","DG","DH","DI","DJ","DK","DL","DM","DO","DP","DR","DS","DT","DV","DW","DX","E1","E2","E3","E4","E5","E6","E7","E8","E9","EE","ER","EX","F1","F3","F4","F5","F6","F7","F8","F9","FA","FB","FC","FI","FR","FT","G1","G2","G3","G4","G5","G6","G7","G8","G9","GA","GB","GC","GD","GE","GF","GG","GH","GJ","GK","GL","GM","GN","GO","GR","H1","H2","H3","H4","H5","H6","H7","H8","H9","HA","HB","HC","HD","HE","HF","HG","HI","IA","IC","IE","IF","IL","IP","IR","IS","J1","J2","J3","J4","J5","J6","J7","J8","J9","JE","K1","K2","K3","L1","L2","L3","L4","L5","L6","L7","L8","L9","LA","LE","LF","LO","LP","LS","M1","M2","M3","M4","MA","MC","ML","NA","NB","NC","ND","NR","OA","OB","OL","PA","PD","PF","PI","PL","PM","PO","PP","PR","PT","R1","R2","R3","RA","RD","RE","RM","SC","SD","SF","SL","SP","TA","TD","TL","UB","UL","VC","VD","VO","W6","W8","W9","WA","WB","WC","WH","WO","WR","WS","WT","WU","WW","ZZ"]);
    }

}