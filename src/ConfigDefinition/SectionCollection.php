<?php
/** @noinspection MagicMethodsValidityInspection */
declare(strict_types=1);


namespace CVTrust\EdiEngine\ConfigDefinition;

class SectionCollection
{
    /**
     * @var SectionDefinition[]
     */
    private $sectionDefinitions;

    public function __construct(?SectionDefinition ...$sectionDefinitions)
    {
        foreach ($sectionDefinitions ?? [] as $sectionDefinition) {
            $this->addSectionDefinition($sectionDefinition);
        }
    }

    public function addSectionDefinition(SectionDefinition $sectionDefinition): void
    {
        $this->sectionDefinitions[$sectionDefinition->Name()] = $sectionDefinition;
    }

    public function __get($name): ?SectionDefinition
    {
        return $this->sectionDefinitions[$name] ?? null;
    }

    public function toArray(): array
    {
        return array_map(function(SectionDefinition $definition) {
            return $definition->toArray();
        }, $this->sectionDefinitions);
    }
}
