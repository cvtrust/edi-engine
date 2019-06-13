<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiDataElement;

use MabeEnum\Enum;

/**
 * @method static self PRIMARY()
 * @method static self SECONDARY()
 * @method static self TERTIARY()
 * @method static self UNKNOWN()
 */
final class PayerResponsibilityCode extends Enum
{
    public const PRIMARY = 'P';
    public const SECONDARY = 'S';
    public const TERTIARY = 'T';
    public const UNKNOWN = 'U';
}
