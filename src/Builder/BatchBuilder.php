<?php
declare(strict_types=1);


namespace CVTrust\SutterHealthAetna\Eligibility\EdiSegment;

use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapLoop;
use CVTrust\EdiEngine\EdiEngine\EdiBatch;
use CVTrust\EdiEngine\EdiEngine\Runtime\EdiGroup;
use CVTrust\EdiEngine\EdiEngine\Runtime\EdiInterchange;
use CVTrust\EdiEngine\EdiEngine\Runtime\EdiLoop;
use CVTrust\EdiEngine\EdiEngine\Runtime\EdiTrans;

class BatchBuilder
{
    /**
     * @var MapLoop
     */
    protected $loopDefinition;

    /**
     * @var TransactionBuilder[]
     */
    protected $transactions = [];

    /**
     * @var EdiInterchange[]
     */
    protected $interchanges;

    /**
     * @var array
     */
    protected $groups;

    public function __construct(MapLoop $loopDefinition)
    {
        $this->loopDefinition = $loopDefinition;
    }

    public function addTransaction(): TransactionBuilder
    {
        $transactionBuilder = new TransactionBuilder($this->loopDefinition);

        $this->transactions[] = $transactionBuilder;

        return $transactionBuilder;
    }

    public function build(string $functionalCode): EdiBatch
    {
        $batch = new EdiBatch();

        $interchange = new EdiInterchange();
        $batch->getInterchanges()->append($interchange);
        $group = new EdiGroup($functionalCode);
        $interchange->getGroups()->append($group);

        foreach ($this->transactions as $transaction) {
            $group->Transactions()->append($transaction->build());
        }

        return $batch;
    }
}
