<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/19/2018
 * Time: 1:03 PM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiEngine\Runtime;


use CVTrust\EdiEngine\EdiEngine\Common\MapSegment;

class IEA extends EdiSegment
{
    use CreateSegmentFromElementsTrait;

    public function __construct(
        MapSegment $definition,
        int $iea01IncludedGroupsCount,
        int $iea02ControlNumber
    )
    {
        parent::__construct($definition);

        if (null === $definition)
            return;

        $content = $this->getContent();

        $content->append(new EdiSimpleDataElement($definition->getContent()[0], (string)$iea01IncludedGroupsCount));
        $content->append(new EdiSimpleDataElement($definition->getContent()[1], (string)$iea02ControlNumber));
    }


}