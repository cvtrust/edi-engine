<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/19/2018
 * Time: 11:36 AM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiEngine\Runtime;


use CVTrust\EdiEngine\EdiEngine\Common\MapBaseEntity;
use CVTrust\EdiEngine\EdiEngine\Common\MapSegment;

class ST extends EdiSegment
{
    use CreateSegmentFromElementsTrait;

    public function __construct(
        ?MapSegment $definition,
        string $st01TransactionId,
        int $st02ControlNumber
    )
    {
        parent::__construct($definition);

        if (null === $definition)
            return;

        $content = $this->getContent();

        $tcn = str_pad((string)$st02ControlNumber, 4, '0', STR_PAD_LEFT);

        $content->append(new EdiSimpleDataElement($definition->getContent()[0], $st01TransactionId));
        $content->append(new EdiSimpleDataElement($definition->getContent()[1], $tcn));
    }
}