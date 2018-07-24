<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/19/2018
 * Time: 2:39 PM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements;


use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapSimpleDataElement;
use CVTrust\EdiEngine\EdiEngine\Common\Enums\DataType;

class E_0479 extends MapSimpleDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->setDataType(DataType::ID());
        $this->setMinLength(2);
        $this->setMaxLength(2);
        $this->allowedValues = new \ArrayObject(["AA","AB","AD","AF","AG","AH","AI","AK","AL","AN","AO","AR","AS","AT","AW","BC","BE","BF","BL","BS","CA","CB","CC","CD","CE","CF","CG","CH","CI","CJ","CK","CM","CN","CO","CP","CR","CS","CT","CV","D3","D4","D5","DA","DD","DF","DI","DM","DS","DX","EC","ED","EF","EI","ER","ES","EV","EX","FA","FB","FC","FG","FH","FR","FT","GA","GB","GC","GE","GF","GL","GP","GR","GT","HB","HC","HI","HN","HP","HR","HS","IA","IB","IC","ID","IE","IG","II","IJ","IL","IM","IN","IO","IP","IR","IS","KM","LA","LB","LI","LN","LR","LS","LT","MA","MB","MC","MD","ME","MF","MG","MH","MI","MJ","MK","ML","MM","MN","MO","MP","MQ","MR","MS","MT","MV","MW","MX","MY","NC","NL","NP","NT","OC","OG","OR","OW","PA","PB","PC","PD","PE","PF","PG","PH","PI","PJ","PK","PL","PM","PN","PO","PQ","PR","PS","PT","PU","PV","PY","PZ","QA","QG","QM","QO","QW","RA","RB","RC","RD","RE","RF","RG","RH","RI","RJ","RK","RL","RM","RN","RO","RP","RQ","RR","RS","RT","RU","RV","RW","RX","RY","RZ","SA","SB","SC","SD","SE","SF","SG","SH","SI","SJ","SL","SM","SN","SO","SP","SQ","SR","SS","ST","SU","SV","SW","TA","TC","TD","TF","TI","TM","TN","TO","TP","TR","TS","TT","TX","UA","UB","UC","UD","UI","UP","UW","VA","VB","VC","VD","VE","VH","VI","VS","WA","WB","WG","WI","WL","WR","WT"]);
    }
}