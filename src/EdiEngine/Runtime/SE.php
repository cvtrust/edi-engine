<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/19/2018
 * Time: 11:49 AM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiEngine\Runtime;


use CVTrust\EdiEngine\EdiEngine\Common\MapSegment;

class SE extends EdiSegment
{
    use CreateSegmentFromElementsTrait;

    public function __construct(
        MapSegment $definition,
        int $se01IncludedSegCount,
        int $se02ControlNumber
    )
    {
        parent::__construct($definition);

        if (null === $definition)
            return;

        $tcn = str_pad((string)$se02ControlNumber, 4, '0', STR_PAD_LEFT);

        $content = $this->getContent();

        $content->append(new EdiSimpleDataElement($definition->getContent()[0], (string)$se01IncludedSegCount));
        $content->append(new EdiSimpleDataElement($definition->getContent()[1], $tcn));
    }
}