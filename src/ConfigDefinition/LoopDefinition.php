<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\ConfigDefinition;

class LoopDefinition implements DefinitionCanHaveChildren
{
    /**
     * @var string
     */
    private $loopName;

    private $definitions = [];

    public function __construct(string $loopName)
    {
        $this->loopName = $loopName;
    }

    public function LoopName(): string
    {
        return $this->loopName;
    }

    public function addDefinition(Definition $definition): void
    {
        $this->definitions[] = $definition;
    }

    public function Definitions(): array
    {
        return $this->definitions;
    }

    public function toArray(): array
    {
        return [
            'type' => 'loop',
            'loop' => $this->loopName,
            'definitions' => array_map(function(Definition $definition) {
                return $definition->toArray();
            }, $this->definitions)
        ];
    }
}
