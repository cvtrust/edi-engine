<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\ConfigDefinition\Processor;

use CVTrust\EdiEngine\ConfigDefinition\DataElementDefinition;
use CVTrust\EdiEngine\ConfigDefinition\Definition;
use CVTrust\EdiEngine\ConfigDefinition\LoopDefinition;
use CVTrust\EdiEngine\ConfigDefinition\Processor\Event\DataElementProcessed;
use CVTrust\EdiEngine\ConfigDefinition\Processor\Event\LoopProcessed;
use CVTrust\EdiEngine\ConfigDefinition\Processor\Event\SegmentProcessed;
use CVTrust\EdiEngine\ConfigDefinition\SectionDefinition;
use CVTrust\EdiEngine\ConfigDefinition\SegmentDefinition;
use CVTrust\EdiEngine\EdiDataElement\DataElement;
use CVTrust\SutterHealthAetna\Eligibility\EdiSegment\BuilderContext;
use Zend\EventManager\EventManagerInterface;

class DefinitionProcessor
{
    /**
     * @var SectionDefinition
     */
    private $sectionDefinition;
    /**
     * @var EventManagerInterface
     */
    private $eventManager;

    /**
     * @var int
     */
    private $processCount = 0;

    public function __construct(SectionDefinition $sectionDefinition, EventManagerInterface $eventManager)
    {
        $this->sectionDefinition = $sectionDefinition;
        $this->eventManager = $eventManager;
    }

    public function __invoke(BuilderContext $builder, Person $person)
    {
        foreach ($this->sectionDefinition->Definitions() as $definition) {
            $this->processDefinition($builder, $definition, $person);
        }
    }

    protected function processDefinition(BuilderContext $builder, Definition $definition, Person $person): void
    {
        if ($definition instanceof LoopDefinition) {
            $this->processLoop($builder, $definition, $person);
            return;
        }

        if ($definition instanceof SegmentDefinition) {
            $this->processSegment($builder, $definition, $person);
            return;
        }

        if ($definition instanceof DataElementDefinition) {
            $this->processDataElementDefinition($builder, $definition, $person);
            return;
        }
    }

    protected function processLoop(BuilderContext $builder, LoopDefinition $loopDefinition, Person $person): void
    {
        $builder->changeContext($loopDefinition);
        $this->eventManager->triggerEvent(new LoopProcessed($loopDefinition, $person));

        foreach ($loopDefinition->Definitions() as $definition) {
            $this->processDefinition($builder, $definition, $person);
        }

        $builder->previousContext();
    }

    protected function processSegment(BuilderContext $builder, SegmentDefinition $segmentDefinition, Person $person): void
    {
        if ((null !== $condition = $segmentDefinition->SegmentCondition()) && !$condition->isValid($person)) {
            return;
        }

        $builder->changeContext($segmentDefinition);

        $this->eventManager->triggerEvent(new SegmentProcessed($segmentDefinition, $person));

        foreach ($segmentDefinition->Definitions() as $definition) {
            $this->processDefinition($builder, $definition, $person);
        }
    }

    protected function processDataElementDefinition(BuilderContext $builder, DataElementDefinition $dataElementDefinition, Person $person): void
    {
        $builder->changeContext($dataElementDefinition);

        $output = '';
        if (null !== $mapper = $dataElementDefinition->Mapper()) {
            /** @var DataElement $output */
            $output = $mapper($person, $dataElementDefinition->DataElementReference());
        }
        elseif (null !== $dataElement = $dataElementDefinition->DataElement()) {
            /** @var DataElement $output */
            $output = $dataElement;
        }

        $this->eventManager->triggerEvent(new DataElementProcessed($dataElementDefinition, $person, $output));

        $builder->CurrentSegmentBuilder()->setDataElement($output);
    }
}
