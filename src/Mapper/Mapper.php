<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\Mapper;

use CVTrust\EdiEngine\ConfigDefinition\Processor\DataElementReference;
use CVTrust\EdiEngine\ConfigDefinition\Processor\Person;
use CVTrust\EdiEngine\EdiDataElement\DataElement;

interface Mapper
{
    public function __invoke(Person $person, DataElementReference $dataElementReference): DataElement;
}
