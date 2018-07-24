<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/19/2018
 * Time: 11:13 AM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiEngine\Runtime;


use CVTrust\EdiEngine\EdiEngine\Common\MapBaseEntity;
use CVTrust\EdiEngine\EdiEngine\Common\MapSegment;

class GS extends EdiSegment
{
    use CreateSegmentFromElementsTrait;

    public function __construct(
        ?MapSegment $definition,
        string $gs01GroupName,
        string $gs02SenderId,
        string $gs03ReceiverId,
        int $gs06ControlNumber,
        string $gs08VersionNumber
    )
    {
        parent::__construct($definition);

        if (null === $definition)
            return;

        $content = $this->getContent();
        $dt = new \DateTime();

        $content->append(new EdiSimpleDataElement($definition->getContent()[0], $gs01GroupName));
        $content->append(new EdiSimpleDataElement($definition->getContent()[1], $gs02SenderId));
        $content->append(new EdiSimpleDataElement($definition->getContent()[2], $gs03ReceiverId));
        $content->append(new EdiSimpleDataElement($definition->getContent()[3], $dt->format('Ymd')));
        $content->append(new EdiSimpleDataElement($definition->getContent()[4], $dt->format('His')));
        $content->append(new EdiSimpleDataElement($definition->getContent()[5], (string)$gs06ControlNumber));
        $content->append(new EdiSimpleDataElement($definition->getContent()[6], 'X'));
        $content->append(new EdiSimpleDataElement($definition->getContent()[7], $gs08VersionNumber));
    }


}