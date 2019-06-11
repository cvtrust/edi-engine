<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiDataElement;

use CVTrust\EdiEngine\EdiEngine\Common\Definitions\MapBaseDataElement;

interface DataElement
{
    public function DataElementReferenceClass(): string;

    public function DataElementReferencePosition(): int;

    public function toString(): string;
}
