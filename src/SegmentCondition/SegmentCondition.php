<?php
declare(strict_types=1);

namespace CVTrust\EdiEngine\SegmentCondition;

use CVTrust\EdiEngine\Builder\BuilderContext;
use CVTrust\EdiEngine\ConfigDefinition\Processor\Person;
use CVTrust\EdiEngine\EdiDataElement\MaintenanceType;

interface SegmentCondition
{
    public function isValid(BuilderContext $context, Person $person): bool;
}
