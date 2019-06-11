<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\ConfigDefinition;

use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapLoop;

class SectionDefinition implements DefinitionCanHaveChildren
{
    /**
     * @var string
     */
    private $name;

    private $definitions = [];
    /**
     * @var MapLoop
     */
    private $mapLoop;

    public function __construct(string $name, MapLoop $mapLoop)
    {
        $this->name = $name;
        $this->mapLoop = $mapLoop;
    }

    public function addDefinition(Definition $definition): void
    {
        $this->definitions[] = $definition;
    }

    public function Name(): string
    {
        return $this->name;
    }

    public function Definitions(): array
    {
        return $this->definitions;
    }

    public function toArray(): array
    {
        return [
            'type' => 'section',
            'section' => $this->name,
            'definitions' => array_map(function(Definition $definition) {
                return $definition->toArray();
            }, $this->definitions)
        ];
    }
}
