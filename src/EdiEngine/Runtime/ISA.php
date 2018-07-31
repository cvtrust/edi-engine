<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/18/2018
 * Time: 5:37 PM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiEngine\Runtime;


use CVTrust\EdiEngine\EdiEngine\Common\MapSegment;

class ISA extends EdiSegment
{
    use CreateSegmentFromElementsTrait;

    public function __construct(
        ?MapSegment $definition = null,
        ?string $isa05SenderQual = null,
        ?string $isa06SenderId = null,
        ?string $isa07ReceiverQual = null,
        ?string $isa08ReceiverId = null,
        ?string $isa12VersionNumber = null,
        ?int $isa13ControlNumber = null,
        ?string $isa15UsageIndicator = null,
        ?string $isa16ComponentElementSeparator = null
    )
    {
        parent::__construct($definition);

        if (null === $definition)
            return;

        $dt = new \DateTime();

        $this->content->append(new EdiSimpleDataElement($definition->getContent()[0], "00"));
        $this->content->append(new EdiSimpleDataElement($definition->getContent()[1], str_repeat(' ', 10)));
        $this->content->append(new EdiSimpleDataElement($definition->getContent()[2], '00'));
        $this->content->append(new EdiSimpleDataElement($definition->getContent()[3], str_repeat(' ', 10)));
        $this->content->append(new EdiSimpleDataElement($definition->getContent()[4], $isa05SenderQual));
        $this->content->append(new EdiSimpleDataElement($definition->getContent()[5], str_pad($isa06SenderId, 15, ' ', STR_PAD_RIGHT)));
        $this->content->append(new EdiSimpleDataElement($definition->getContent()[6], $isa07ReceiverQual));
        $this->content->append(new EdiSimpleDataElement($definition->getContent()[7], str_pad($isa08ReceiverId, 15, ' ', STR_PAD_RIGHT)));
        $this->content->append(new EdiSimpleDataElement($definition->getContent()[8], $dt->format('ymd')));
        $this->content->append(new EdiSimpleDataElement($definition->getContent()[9], $dt->format('Hi')));
        $this->content->append(new EdiSimpleDataElement($definition->getContent()[10], 'U'));
        $this->content->append(new EdiSimpleDataElement($definition->getContent()[11], $isa12VersionNumber));
        $this->content->append(new EdiSimpleDataElement($definition->getContent()[12], str_pad((string)$isa13ControlNumber, 9, '0', STR_PAD_LEFT)));
        $this->content->append(new EdiSimpleDataElement($definition->getContent()[13], '0'));
        $this->content->append(new EdiSimpleDataElement($definition->getContent()[14], $isa15UsageIndicator));
        $this->content->append(new EdiSimpleDataElement($definition->getContent()[15], $isa16ComponentElementSeparator ?? EdiInterchange::DefaultCompositeSeparator));
    }
}