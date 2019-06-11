<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\ConfigDefinition\Processor\Event;

use ArrayAccess;
use CVTrust\EdiEngine\ConfigDefinition\DataElementDefinition;
use CVTrust\EdiEngine\ConfigDefinition\Processor\Person;
use CVTrust\EdiEngine\EdiDataElement\DataElement;
use Zend\EventManager\EventInterface;

class DataElementProcessed implements EventInterface
{
    public const MESSAGE_NAME = 'data-element-processed';

    /**
     * @var DataElementDefinition
     */
    private $definition;
    /**
     * @var Person
     */
    private $person;
    /**
     * @var DataElement
     */
    private $dataElement;

    public function __construct(DataElementDefinition $definition, Person $person, DataElement $dataElement)
    {
        $this->definition = $definition;
        $this->person = $person;
        $this->dataElement = $dataElement;
        $this->params = [
            'definition' => $this->definition->toArray(),
            'person' => (array) $person,
            'data_element' => $dataElement->toString()
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
        // TODO: Implement setName() method.
    }

    /**
     * Set the event target/context
     *
     * @param null|string|object $target
     * @return void
     */
    public function setTarget($target)
    {
        // TODO: Implement setTarget() method.
    }

    /**
     * Set event parameters
     *
     * @param array|ArrayAccess $params
     * @return void
     */
    public function setParams($params)
    {
        // TODO: Implement setParams() method.
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
        // TODO: Implement setParam() method.
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
