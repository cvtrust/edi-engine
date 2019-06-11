<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiDataElement;

use MabeEnum\Enum;

/**
 * @method static self ACTIVE()
 * @method static self ACTIVE_MILITARY_OVERSEAS()
 * @method static self ACTIVE_MILITARY_USA()
 * @method static self FULL_TIME()
 * @method static self LEAVE_OF_ABSENCE()
 * @method static self PART_TIME()
 * @method static self RETIRED()
 * @method static self TERMINATED()
 */
final class EmploymentStatus extends Enum
{
    public const ACTIVE = 'AC';
    public const ACTIVE_MILITARY_OVERSEAS = 'AO';
    public const ACTIVE_MILITARY_USA = 'AU';
    public const FULL_TIME = 'FT';
    public const LEAVE_OF_ABSENCE = 'L1';
    public const PART_TIME = 'PT';
    public const RETIRED = 'RT';
    public const TERMINATED = 'TE';

}
