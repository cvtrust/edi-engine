<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/19/2018
 * Time: 11:14 AM
 */

namespace CVTrust\EdiEngine\EdiEngine\Runtime;


trait CreateSegmentFromElementsTrait
{
    public static function createFromElements(array $elements): self
    {
        /** @var EdiSegment $self */
        $self = new self(null);
        /** @var \ArrayObject $content */
        $content = $self->getContent();

        foreach ($elements as $element)
        {
            $content->append(new EdiSimpleDataElement(null, $element));
        }

        return $self;
    }
}