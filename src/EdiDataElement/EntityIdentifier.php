<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiDataElement;

use MabeEnum\Enum;

/**
* @method static self CORRECTED_INSURED()
* @method static self INSURED_OR_SUBSCRIBER()
*/
final class EntityIdentifier extends Enum
{

    public const CORRECTED_INSURED = '74';
    public const INSURED_OR_SUBSCRIBER = 'IL';

}
