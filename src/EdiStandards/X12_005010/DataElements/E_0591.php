<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/19/2018
 * Time: 3:13 PM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements;


use CVTrust\EdiEngine\Common\Definitions\MapSimpleDataElement;
use CVTrust\EdiEngine\Common\Enums\DataType;

class E_0591 extends MapSimpleDataElement
{
    public function __construct()
    {
        parent::__construct();

        $this->setDataType(DataType::ID());
        $this->setMinLength(1);
        $this->setMaxLength(2);
        $this->allowedValues = new \ArrayObject(["ACH","BKW","BOP","CAS","CCC","CCF","CCH","CDA","CHK","CLH","CPC","CWT","DCC","DCD","DDP","DEB","DLC","DLD","DPC","DPD","DXC","DXD","DYC","DYD","DZC","DZD","EBX","EXC","FEW","FWT","NON","PAC","PBD","PDC","PDD","PDE","PRO","REV","SCC","SCD","SDC","SDD","SPC","SPD","SWT","SXC","SXD","SYC","SZC","SZD","TRA","VIS","X12","ZZZ"]);
    }
}