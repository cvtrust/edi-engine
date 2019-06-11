<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\ConfigDefinition;


interface DefinitionCanHaveChildren extends Definition
{
    public function addDefinition(Definition $definition): void;

    public function Definitions(): array;
}
