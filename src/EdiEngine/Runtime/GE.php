<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/19/2018
 * Time: 12:58 PM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\Runtime;


use CVTrust\EdiEngine\Common\MapBaseEntity;
use CVTrust\EdiEngine\Common\MapSegment;

class GE extends EdiSegment
{
    use CreateSegmentFromElementsTrait;

    public function __construct(
        MapSegment $definition,
        int $ge01IncludedTransCount,
        int $ge02ControlNumber
    )
    {
        parent::__construct($definition);

        if (null === $definition)
            return;

        $content = $this->getContent();

        $content->append(new EdiSimpleDataElement($definition->getContent()[0], (string)$ge01IncludedTransCount));
        $content->append(new EdiSimpleDataElement($definition->getContent()[1], (string)$ge02ControlNumber));
    }


}