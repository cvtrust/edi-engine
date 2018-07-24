<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/18/2018
 * Time: 3:58 PM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\Common;


abstract class MapSegment extends MapBaseEntity
{
    /**
     * @var \ArrayObject
     */
    private $syntaxNotes;

    public function __construct()
    {
        parent::__construct();
        $this->maxOccurs = 1;
        $this->syntaxNotes = new \ArrayObject([]);
    }

    public function getEdiName(): string
    {
        $this->getName();
    }

    /**
     * @return \ArrayObject
     */
    public function getSyntaxNotes(): \ArrayObject
    {
        return $this->syntaxNotes;
    }

}