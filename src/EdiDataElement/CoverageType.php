<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiDataElement;

use MabeEnum\Enum;

/**
 * @method static self PREVENTATIVE_CARE_WELLNESS()
 * @method static self TWENTY_FOUR_HOUR_CARE()
 * @method static self MENTAL_HEALTH()
 * @method static self DENTAL_CAPITATION()
 * @method static self DENTAL()
 * @method static self EXCLUSIVE_PROVIDER_ORGANIZATION()
 * @method static self FACILITY()
 * @method static self HEARING()
 * @method static self HEALTH()
 * @method static self HEALTH_MAINTENANCE_ORGANIZATION()
 * @method static self LONG_TERM_CARE()
 * @method static self LONG_TERM_DISABILITY()
 * @method static self MAJOR_MEDICAL()
 * @method static self MAIL_ORDER_DRUG()
 * @method static self PRESCRIPTION_DRUG()
 * @method static self POINT_OF_SERVICE()
 * @method static self PREFERRED_PROVIDER_ORGANIZATIONS()
 * @method static self PRACTITIONERS()
 * @method static self SHORT_TERM_DISABILITY()
 * @method static self UTILIZATION_REVIEW()
 * @method static self VISION()
 */
final class CoverageType extends Enum
{

    public const PREVENTATIVE_CARE_WELLNESS = 'AG';
    public const TWENTY_FOUR_HOUR_CARE = 'AH';
    public const MENTAL_HEALTH = 'AK';
    public const DENTAL_CAPITATION = 'DCP';
    public const DENTAL = 'DEN';
    public const EXCLUSIVE_PROVIDER_ORGANIZATION = 'EPO';
    public const FACILITY = 'FAC';
    public const HEARING = 'HE';
    public const HEALTH = 'HLT';
    public const HEALTH_MAINTENANCE_ORGANIZATION = 'HMO';
    public const LONG_TERM_CARE = 'LTC';
    public const LONG_TERM_DISABILITY = 'LTD';
    public const MAJOR_MEDICAL = 'MM';
    public const MAIL_ORDER_DRUG = 'MOD';
    public const PRESCRIPTION_DRUG = 'PDG';
    public const POINT_OF_SERVICE = 'POS';
    public const PREFERRED_PROVIDER_ORGANIZATIONS = 'PPO';
    public const PRACTITIONERS = 'PRA';
    public const SHORT_TERM_DISABILITY = 'STD';
    public const UTILIZATION_REVIEW = 'UR';
    public const VISION = 'VIS';

}
