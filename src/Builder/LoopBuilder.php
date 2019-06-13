<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\Builder;

use CVTrust\EdiEngine\EdiDataElement\DataElement\SegmentBuilder;
use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapLoop;
use CVTrust\EdiEngine\EdiEngine\Runtime\EdiLoop;

class LoopBuilder
{
    /**
     * @var array
     */
    protected $children = [];
    /**
     * @var MapLoop
     */
    protected $loopDefinition;
    /**
     * @var EdiLoop|null
     */
    protected $ediLoop;

    public function __construct(MapLoop $loopDefinition, ?EdiLoop $ediLoop = null)
    {
        $this->loopDefinition = $loopDefinition;
        $this->ediLoop = $ediLoop ?? new EdiLoop($loopDefinition);
    }

    public function Definition(): MapLoop
    {
        return $this->loopDefinition;
    }

    public function addLoopByName(string $loopName): LoopBuilder
    {

        try {
            $subLoop = $this->loopDefinition->findContentByName($loopName);
            $builder = new LoopBuilder($subLoop, $this->ediLoop);
            $this->children[] = $builder;
            return $builder;
        } catch (\Throwable $e) {
            var_dump('error', $this->loopDefinition->getName(), $loopName);
            exit;
        }
    }

    public function addSegmentByName(string $segmentName): SegmentBuilder
    {
        $segmentDefinition = $this->loopDefinition->findContentByName($segmentName);

        $builder = new SegmentBuilder($segmentDefinition);

        $this->children[] = $builder;

        return $builder;
    }

    public function build(): object
    {
        $loop = new EdiLoop($this->loopDefinition);

        foreach ($this->children as $child) {
            $loop->getContent()->append($child->build());
        }

        return $loop;
    }
}
