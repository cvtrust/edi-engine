<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiDataElement;

use MabeEnum\Enum;

/**
 * @method static self MEDICARE_PART_A()
 * @method static self MEDICARE_PART_B()
 * @method static self MEDICARE_PART_A_B()
 * @method static self MEDICARE()
 * @method static self NO_MEDICARE()
 */
final class MedicarePlanCodes extends Enum
{
    public const MEDICARE_PART_A = 'A';
    public const MEDICARE_PART_B = 'B';
    public const MEDICARE_PART_A_B = 'C';
    public const MEDICARE = 'D';
    public const NO_MEDICARE = 'E';

}
