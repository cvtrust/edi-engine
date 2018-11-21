<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements;

use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapSimpleDataElement;
use CVTrust\EdiEngine\EdiEngine\Common\Enums\DataType;

final class E_0366 extends MapSimpleDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->setDataType(DataType::ID());
        $this->setMinLength(2);
        $this->setMaxLength(2);
        $this->allowedValues = new \ArrayObject(["1A","1B","1C","1D","1E","1F","1G","1H","3A","A1","A2","A3","A4","A5","AA","AB","AC","AD","AE","AF","AG","AH","AI","AL","AM","AN","AP","AR","AS","AT","AU","AV","BA","BB","BC","BD","BI","BJ","BK","BL","BM","BP","BS","BU","C2","CA","CB","CC","CD","CE","CF","CG","CH","CI","CJ","CK","CL","CM","CN","CO","CP","CR","CS","CT","CU","CV","CW","CX","CY","CZ","DA","DC","DD","DE","DF","DI","DM","DN","DV","E1","E2","EA","EB","EC","ED","EF","EG","EM","EN","EO","EP","ES","EV","EX","FA","FB","FC","FD","FF","FL","FM","FN","FO","FP","FQ","FR","GA","GB","GC","GE","GR","HM","HR","IC","IO","IP","IS","KA","KB","KC","KP","KT","LD","MA","MB","MC","MD","ME","MG","MK","ML","MM","NA","NC","NP","NT","OA","OC","OD","OS","OW","PA","PB","PC","PD","PE","PF","PG","PH","PI","PJ","PK","PL","PM","PN","PO","PP","PQ","PR","PS","PT","PU","PV","PW","PX","PY","PZ","QA","QC","QI","QM","QP","QR","QY","RA","RB","RC","RD","RE","RF","RG","RP","RQ","RS","RZ","SA","SB","SC","SD","SE","SF","SG","SH","SI","SJ","SK","SL","SM","SN","SO","SP","SQ","SR","SS","ST","SU","SV","SW","SY","TA","TB","TC","TD","TE","TH","TM","TN","TP","TR","TY","UG","UP","UQ","UR","VM","VP","WH","WI","WR","ZZ"]);
    }
}
