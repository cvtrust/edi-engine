<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiDataElement;

use MabeEnum\Enum;

/**
 * @method static self BENEFIT_HOLDER()
 * @method static self NON_BENEFIT_HOLDER()
 */
final class MemberIndicator extends Enum
{
    public const BENEFIT_HOLDER = 'Y';
    public const NON_BENEFIT_HOLDER = 'N';

}
