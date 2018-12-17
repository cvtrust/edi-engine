<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/19/2018
 * Time: 3:41 PM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiEngine\Common\Definitions;


use CVTrust\EdiEngine\EdiEngine\Common\Enums\RequirementDesignator;

class MapCompositeDataElement extends MapBaseDataElement
{
    protected $name;
    protected $content;

    public function __construct()
    {
        $classParts = explode('\\', get_class($this));
        $this->name = array_pop($classParts);
        $this->reqDes = RequirementDesignator::Optional();
        $this->content = new \ArrayObject([]);
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return \ArrayObject
     */
    public function getContent(): \ArrayObject
    {
        return $this->content;
    }

}