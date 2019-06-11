<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\ConfigDefinition;

abstract class SegmentsDefinition
{
    /**
     * @var SegmentBuilder[]
     */
    protected $segments = [];

    final public function __construct(SegmentBuilder ...$segments)
    {
        $this->segments = $segments ?? [];
    }

    public function build(): array
    {
        $build = [];
        foreach ($this->segments as $segment)
        {
            $build[] = $segment->build()->toArray(true);
        }
        return $build;
    }
}
