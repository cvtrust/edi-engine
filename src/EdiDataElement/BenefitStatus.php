<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiDataElement;

use MabeEnum\Enum;

/**
 * @method static self ACTIVE()
 * @method static self COBRA()
 * @method static self SURVIVING_INSURED()
 * @method static self TEFRA()
 */
final class BenefitStatus extends Enum
{
    public const ACTIVE = 'A';
    public const COBRA = 'C';
    public const SURVIVING_INSURED = 'S';
    public const TEFRA = 'T';
}
