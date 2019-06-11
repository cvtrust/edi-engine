<?php
declare(strict_types=1);

namespace CVTrust\EdiEngine\ConfigDefinition\Processor\Event;

use ArrayAccess;
use CVTrust\EdiEngine\ConfigDefinition\Processor\Person;
use CVTrust\EdiEngine\ConfigDefinition\SegmentDefinition;
use Zend\EventManager\EventInterface;

class SegmentProcessed implements EventInterface
{
    public const MESSAGE_NAME = 'segment-processed';

    /**
     * @var SegmentDefinition
     */
    private $definition;
    /**
     * @var Person
     */
    private $person;
    /**
     * @var array
     */
    private $params;

    public function __construct(SegmentDefinition $definition, Person $person)
    {
        $this->definition = $definition;
        $this->person = $person;
        $this->params = [
            'definition' => $this->definition->toArray(),
            'person' => (array)$this->person,
        ];
    }

    /**
     * Get event name
     *
     * @return string
     */
    public function getName()
    {
        return self::MESSAGE_NAME;
    }

    /**
     * Get target/context from which event was triggered
     *
     * @return null|string|object
     */
    public function getTarget()
    {
        // TODO: Implement getTarget() method.
    }

    /**
     * Get parameters passed to the event
     *
     * @return array|ArrayAccess
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Get a single parameter by name
     *
     * @param string $name
     * @param mixed $default Default value to return if parameter does not exist
     * @return mixed
     */
    public function getParam($name, $default = null)
    {
        return $this->params[$name] ?? $default;
    }

    /**
     * Set the event name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        throw new \BadMethodCallException(__METHOD__ . ' not supported');
    }

    /**
     * Set the event target/context
     *
     * @param null|string|object $target
     * @return void
     */
    public function setTarget($target)
    {
        throw new \BadMethodCallException(__METHOD__ . ' not supported');
    }

    /**
     * Set event parameters
     *
     * @param array|ArrayAccess $params
     * @return void
     */
    public function setParams($params)
    {
        throw new \BadMethodCallException(__METHOD__ . ' not supported');
    }

    /**
     * Set a single parameter by key
     *
     * @param string $name
     * @param mixed $value
     * @return void
     */
    public function setParam($name, $value)
    {
        throw new \BadMethodCallException(__METHOD__ . ' not supported');
    }

    /**
     * Indicate whether or not the parent EventManagerInterface should stop propagating events
     *
     * @param bool $flag
     * @return void
     */
    public function stopPropagation($flag = true)
    {
        // TODO: Implement stopPropagation() method.
    }

    /**
     * Has this event indicated event propagation should stop?
     *
     * @return bool
     */
    public function propagationIsStopped()
    {
        // TODO: Implement propagationIsStopped() method.
    }
}
