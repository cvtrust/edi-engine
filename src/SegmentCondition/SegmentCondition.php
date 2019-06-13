<?php
declare(strict_types=1);

namespace CVTrust\EdiEngine\SegmentCondition;

use CVTrust\EdiEngine\ConfigDefinition\Processor\Person;

interface SegmentCondition
{
    public function isValid(Person $person): bool;
}
