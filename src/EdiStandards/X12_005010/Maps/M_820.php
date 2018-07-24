<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/20/2018
 * Time: 8:52 AM
 */
declare(strict_types=1);


namespace CVTrust\Edi\EdiStandards\X12_005010\Maps;


use CVTrust\EdiEngine\Common\Definitions\MapLoop;
use CVTrust\EdiEngine\Common\Enums\RequirementDesignator;
use CVTrust\Edi\EdiStandards\X12_005010\Segments\BPR;
use CVTrust\Edi\EdiStandards\X12_005010\Segments\DTM;
use CVTrust\Edi\EdiStandards\X12_005010\Segments\ENT;
use CVTrust\Edi\EdiStandards\X12_005010\Segments\N1;
use CVTrust\Edi\EdiStandards\X12_005010\Segments\NM1;
use CVTrust\Edi\EdiStandards\X12_005010\Segments\REF;
use CVTrust\Edi\EdiStandards\X12_005010\Segments\RMR;
use CVTrust\Edi\EdiStandards\X12_005010\Segments\TRN;

class M_820 extends MapLoop
{
    public function __construct()
    {
        parent::__construct(null);

        $this->content->append(BPR::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Mandatory(), 1));
        $this->content->append(TRN::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 1));
        $this->content->append(REF::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 1));
        $this->content->append(DTM::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 1));

        $this->content->append(new class($this) extends MapLoop {
            public function __construct(?MapLoop $parentLoop)
            {
                parent::__construct($parentLoop);

                $this->name = 'L_N1';
                $this->reqDes = RequirementDesignator::Optional();
                $this->maxOccurs = 999999;

                $this->content->append(N1::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Mandatory(), 1));
            }
        });

        $this->content->append(new class($this) extends MapLoop {
            public function __construct(?MapLoop $parentLoop)
            {
                parent::__construct($parentLoop);

                $this->name = 'L_ENT';
                $this->reqDes = RequirementDesignator::Optional();
                $this->maxOccurs = 999999;

                $this->content->append(ENT::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Mandatory(), 1));

                $this->content->append(new class($this) extends MapLoop {
                    public function __construct(?MapLoop $parentLoop)
                    {
                        parent::__construct($parentLoop);

                        $this->name = 'L_NM1';
                        $this->reqDes = RequirementDesignator::Optional();
                        $this->maxOccurs = 999999;

                        $this->content->append(NM1::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Mandatory(), 1));
                        $this->content->append(REF::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Mandatory(), 1));
                    }

                });

                $this->content->append(new class($this) extends MapLoop {
                    public function __construct(?MapLoop $parentLoop)
                    {
                        parent::__construct($parentLoop);

                        $this->name = 'L_RMR';
                        $this->reqDes = RequirementDesignator::Optional();
                        $this->maxOccurs = 999999;

                        $this->content->append(RMR::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Mandatory(), 1));
                    }
                });

                $this->content->append(new class($this) extends MapLoop {
                    public function __construct(?MapLoop $parentLoop)
                    {
                        parent::__construct($parentLoop);

                        $this->name = 'L_DTM';
                        $this->reqDes = RequirementDesignator::Optional();
                        $this->maxOccurs = 999999;

                        $this->content->append(DTM::createWithRequirementDesignatorAndMaxOccurs(RequirementDesignator::Optional(), 999999));
                    }
                });
            }
        });
    }



}

