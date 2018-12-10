<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements;

use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapSimpleDataElement;
use CVTrust\EdiEngine\EdiEngine\Common\Enums\DataType;

final class E_1270 extends MapSimpleDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->setDataType(DataType::ID());
        $this->setMinLength(2);
        $this->setMaxLength(2);
        $this->allowedValues = new \ArrayObject(["0","1","10","100","101","102","103","104","105","106","107","108","109","11","12","13","14","16","17","19","2","20","21","22","23","24","25","26","27","28","29","3","30","32","33","34","35","36","37","38","39","4","40","41","42","43","44","45","46","47","48","49","5","52","53","54","55","56","57","58","59","6","60","61","62","63","66","67","69","7","71","74","75","78","79","8","80","81","82","83","84","85","87","88","89","9","90","91","92","93","94","95","96","97","98","99","A","A1","A2","A3","A4","A5","A6","A7","A8","A9","AA","AAA","AB","ABR","ABS","AC","AD","AE","AF","AG","AH","AI","AJ","AK","AL","ALP","AM","AN","AO","AP","APE","AQ","AR","AS","AT","AU","AW","AX","B","BA","BB","BC","BCC","BCR","BD","BE","BF","BG","BH","BI","BJ","BK","BL","BM","BN","BO","BP","BPL","BQ","BR","BRL","BS","BSL","BU","BV","BY","BZ","C","C1","C2","C3","CA","CB","CC","CD","CE","CF","CG","CH","CI","CJ","CK","CL","CLP","CM","CML","CN","CO","COG","CPS","CRC","CS","CSF","CT","CU","CV","CW","CZ","D","D1","D2","D3","D4","D5","DA","DB","DBS","DC","DD","DE","DF","DG","DGO","DH","DI","DJ","DK","DL","DLO","DLP","DM","DN","DO","DPE","DPL","DQ","DR","DS","DT","DU","DW","DX","DY","DZ","E","EA","EB","EC","ED","EE","EF","EG","EH","EI","EJ","EK","EL","EM","EN","EO","EQ","ER","ES","ESL","ET","ETL","EU","EV","EW","EWC","EWR","EX","EY","EZ","F","FA","FB","FC","FD","FE","FF","FG","FH","FI","FJ","FK","FL","FM","FN","FO","FP","FQ","FR","FS","FT","FU","FV","FW","FX","FZ","G","G1","GA","GB","GC","GD","GE","GF","GG","GI","GJ","GK","GQ","GR","GS","GT","GU","GV","GW","H","HA","HB","HD","HE","HI","HRC","HS","HZR","I","IC","ID","IF","IMC","IMP","IPA","IQ","IT","J","J0","J1","J2","J3","J4","J5","J6","J7","J8","J9","JA","JB","JC","JCL","JD","JE","JF","JG","JH","JI","JK","JL","JM","JN","JO","JOL","JP","K","KA","KB","KC","KD","KE","KF","KG","KH","KI","KJ","KK","KL","KM","KO","KP","KQ","KS","KT","KU","KW","KYL","KZ","L","LA","LB","LC","LD","LE","LF","LG","LH","LIN","LJ","LK","LM","LN","LO","LOI","LP","LQ","LR","LS","LSC","LT","LZ","M","MB","MC","MCC","MCD","ME","MI","MJ","MK","ML","MN","MOC","N","NA","NAC","NAF","NAS","NB","NC","ND","NDC","NE","NF","NH","NI","NJ","NK","NL","NP","NR","NS","NT","O","O1","O2","O3","O4","OC","P","PB","PC","PD","PGS","PI","PIT","PL","PLC","PLS","PPD","PPP","PPS","PPV","PRA","PRC","PRR","PRT","PS","PWA","PWI","PWR","PWS","PWT","Q","QA","QB","QC","QE","QF","QG","QH","QI","QJ","QK","QS","R","RA","RC","RCA","RD","RE","REN","RF","RI","RQ","RR","RT","RTC","RUM","RX","S","SA","SB","SBA","SC","SD","SE","SEC","SF","SG","SH","SHL","SI","SJ","SL","SM","SMI","SO","SP","SPE","SR","SRL","SS","ST","STC","T","T00","T01","T02","T03","T04","T05","T06","T07","T08","T09","T10","T11","T12","T13","T14","T15","T16","T17","T18","T19","T20","T21","TB","TC","TCL","TD","TE","TF","TG","TOL","TR","TTL","TX","TY","U","UP","UR","US","UU","V","W","WDL","X","Y","Z","ZZ"]);
    }
}
