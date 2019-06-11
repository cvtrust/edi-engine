<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiDataElement;

use MabeEnum\Enum;

/**
 * @method static self SOCIAL_SECURITY_NUMBER()
 * @method static self MUTUALLY_DEFINED()
 */

final class IdentificationCodeQualifier extends Enum
{

    public const SOCIAL_SECURITY_NUMBER = '34';
    public const MUTUALLY_DEFINED = 'ZZ';

}
