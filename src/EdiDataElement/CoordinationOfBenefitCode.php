<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiDataElement;

use MabeEnum\Enum;

/**
 * @method static self COB()
 * @method static self UNKNOWN()
 * @method static self NONE()
 */
final class CoordinationOfBenefitCode extends Enum
{
    public const COB = '1';
    public const UNKNOWN = '5';
    public const NONE = '6';
}
