<?php

namespace CVTrust\EdiEngine\EdiDataElement;

use MabeEnum\Enum;

/**
 * @method static self DIVORCED()
 * @method static self SINGLE()
 * @method static self MARRIED()
 * @method static self WIDOWED()
 * @method static self UNREPORTED()
 * @method static self COMMON_LAW()
 * @method static self REGISTERED_DOMESTIC_PARTNER()
 * @method static self NOT_APPLICABLE()
 * @method static self UNKNOWN()
 * @method static self SEPARATED()
 * @method static self UNMARRIED_SINGLE_DIVORCED_WIDOWED()
 * @method static self LEGALLY_SEPARATED()
 */
final class MaritalStatusCode extends enum
{
    public const DIVORCED = 'D';
    public const SINGLE = 'I';
    public const MARRIED = 'M';
    public const WIDOWED = 'W';
    public const UNREPORTED = 'R';
    public const COMMON_LAW = 'A';
    public const REGISTERED_DOMESTIC_PARTNER = 'B';
    public const NOT_APPLICABLE = 'C';
    public const UNKNOWN = 'K';
    public const SEPARATED = 'S';
    public const UNMARRIED_SINGLE_DIVORCED_WIDOWED = 'U';
    public const LEGALLY_SEPARATED = 'X';
}