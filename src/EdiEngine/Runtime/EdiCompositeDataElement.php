<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiEngine\Runtime;

use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapBaseDataElement;

final class EdiCompositeDataElement extends DataElementBase
{
    /**
     * @var string
     */
    private $type;
    /**
     * @var \ArrayObject
     */
    private $content;
    /**
     * @var string${CARET}
     */
    private $compositeSeparator;

    public function __construct(MapBaseDataElement $definition, ?string $compositeSeparator = null)
    {
        parent::__construct($definition);

        if (null !== $definition)
        {
            $classParts = explode('\\', get_class($this));
            $this->type = array_pop($classParts);
        }

        $this->content = new \ArrayObject([]);
        $this->compositeSeparator = $compositeSeparator ?? EdiInterchange::DefaultCompositeSeparator;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    public function getContent(): \ArrayObject
    {
        return $this->content;
    }

    public function getVal(): string
    {
        return implode($this->compositeSeparator, iterator_to_array($this->content));
    }
}
