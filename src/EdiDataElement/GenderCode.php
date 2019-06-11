<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiDataElement;

use MabeEnum\Enum;

/**
 * @method static self FEMALE()
 * @method static self MALE()
 * @method static self UNDEFINED()
 */
final class GenderCode extends enum
{

    public const FEMALE = 'F';
    public const MALE = 'M';
    public const UNDEFINED = 'U';

}
