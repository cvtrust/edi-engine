<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/18/2018
 * Time: 5:41 PM
 */
declare(strict_types=1);


namespace CVTrust\Edi\EdiEngine\Runtime;


use CVTrust\Edi\EdiEngine\Common\Definitions\MapBaseDataElement;

class EdiSimpleDataElement extends DataElementBase
{
    /**
     * @var string
     */
    private $type;

    public function __construct(MapBaseDataElement $definition, string $val)
    {
        parent::__construct($definition);

        if (null !== $definition)
        {
            $this->type = array_pop(explode('\\', get_class($this)));
        }

        $this->val = $val;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    public function getVal(): string
    {
        return $this->val;
    }
}