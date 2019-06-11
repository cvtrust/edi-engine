<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiDataElement;

use CVTrust\EdiEngine\EdiStandards\X12_005010\DataElements\E_1250;
use MabeEnum\Enum;

/**
 * @method static self BENEFIT_BEGIN()
 * @method static self BENEFIT_END()
 */
final class DateTimeQualifier extends Enum
{
    public const BENEFIT_BEGIN = '348';
    public const BENEFIT_END = '349';
}
