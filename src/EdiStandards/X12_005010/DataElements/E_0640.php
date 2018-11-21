<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements;

use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapSimpleDataElement;
use CVTrust\EdiEngine\EdiEngine\Common\Enums\DataType;

final class E_0640 extends MapSimpleDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->setDataType(DataType::ID());
        $this->setMinLength(1);
        $this->setMaxLength(2);
        $this->allowedValues = new \ArrayObject(["01","02","03","04","05","06","07","08","09","10","11","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","33","34","35","36","37","38","39","3M","40","41","60","62","63","64","65","66","67","68","69","6A","6C","6N","6R","6S","70","71","72","73","74","75","76","77","78","79","80","81","82","83","85","87","88","91","94","95","97","98","99","A0","A1","A3","A4","A5","A6","A7","AA","AB","AC","AD","AE","AF","AG","AI","AM","AN","AP","AQ","AR","AS","AT","AV","AW","AZ","BA","BB","BD","BF","BH","BJ","BK","BL","BM","BN","BO","BP","BR","BS","BT","BU","BV","BW","C0","C1","C2","C3","CA","CB","CC","CD","CE","CF","CG","CH","CI","CJ","CK","CL","CM","CN","CO","CP","CR","CS","CT","CU","CV","CW","CX","CY","CZ","D1","D4","DA","DB","DC","DD","DE","DF","DG","DH","DI","DK","DL","DN","DO","DP","DQ","DR","DS","DT","DU","EA","EB","EF","EI","EM","EP","ER","EX","FA","FB","FC","FD","FE","FF","FG","FI","FL","FM","FN","FP","FR","FS","FT","GA","GI","GR","HP","I1","IA","IB","IC","ID","IE","IF","II","IM","IN","IO","IR","IU","IW","IX","IZ","JM","JO","JR","JS","JU","JX","KB","KC","KD","KE","KF","KG","KH","KI","KJ","KK","KL","KM","KN","KS","KT","LC","LD","LE","LF","LN","LO","LP","LR","LV","M1","MA","MB","MC","MD","ME","MF","MI","ML","MM","MP","MR","MS","MU","N1","N2","N3","N4","N5","N6","N7","N8","NA","NB","NC","ND","NE","NF","NG","NH","NI","NJ","NK","NL","NM","NO","NP","NQ","NR","NT","NU","OC","OF","OP","OR","P1","PA","PB","PC","PD","PE","PF","PG","PI","PL","PM","PO","PP","PR","PS","PT","PU","PV","PW","PX","PZ","QA","QB","QC","QD","QE","QF","QG","QH","QJ","QK","QL","QP","QR","R1","R2","R3","R4","R5","R6","R7","R8","RA","RB","RC","RD","RE","RF","RG","RH","RK","RM","RP","RQ","RS","RT","RU","RZ","S1","S2","S3","S4","SA","SB","SC","SD","SE","SF","SG","SH","SL","SM","SO","SP","SQ","SR","SS","ST","SU","SV","TD","TG","TH","TI","TJ","TK","TP","TR","TS","TT","TX","U1","U2","U4","U5","U9","UA","UC","UD","UF","UI","UM","UO","UP","UR","UT","V1","VH","VJ","VL","VM","VN","VO","VP","VQ","VR","W1","W4","W5","WA","WC","WD","WH","WO","WS","WT","X1","XA","XB","XC","XD","XX","XY","XZ","YI","YR","ZA","ZB","ZC","ZD","ZE","ZF","ZG","ZH","ZI","ZJ","ZK","ZL","ZM","ZN","ZO","ZP","ZQ","ZR","ZS","ZT","ZU","ZW","ZZ"]);
    }
}
