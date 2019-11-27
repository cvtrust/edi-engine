<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\Mapper;

use CVTrust\EdiEngine\Builder\BuilderContext;
use CVTrust\EdiEngine\ConfigDefinition\Processor\DataElementReference;
use CVTrust\EdiEngine\ConfigDefinition\Processor\Person;
use CVTrust\EdiEngine\EdiDataElement\DataElement;
use CVTrust\EdiEngine\EdiDataElement\MaintenanceType;

interface Mapper
{
    public function __invoke(BuilderContext $context, Person $person, DataElementReference $dataElementReference): DataElement;
}
