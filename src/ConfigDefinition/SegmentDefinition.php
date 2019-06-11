<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\ConfigDefinition;

use CVTrust\EdiEngine\EdiEngine\Common\MapSegment;
use CVTrust\SutterHealthAetna\Eligibility\PolicySegmentCondition\SegmentCondition;

class SegmentDefinition implements DefinitionCanHaveChildren
{
    /**
     * @var MapSegment
     */
    private $mapSegment;

    private $definitions = [];
    /**
     * @var SegmentCondition|null
     */
    private $segmentCondition;

    public function __construct(MapSegment $mapSegment, ?SegmentCondition $segmentCondition)
    {
        $this->mapSegment = $mapSegment;
        $this->segmentCondition = $segmentCondition;
    }

    public function MapSegment(): MapSegment
    {
        return $this->mapSegment;
    }

    public function SegmentCondition(): ?SegmentCondition
    {
        return $this->segmentCondition;
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
            'type' => 'segment',
            'segment' => get_class($this->mapSegment),
            'definitions' => array_map(function(Definition $definition) {
                return $definition->toArray();
            }, $this->definitions)
        ];
    }
}
