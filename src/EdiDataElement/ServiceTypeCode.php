<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiDataElement;

use MabeEnum\Enum;

/**
 * @method static self MEDICAL_CARE()
 * @method static self DENTAL_CARE()
 * @method static self HOSPITAL_INPATIENT()
 * @method static self HOSPITAL_OUTPATIENT()
 * @method static self LONG_TERM_CARE()
 * @method static self FREE_STANDING_PRESCRIPTION_DRUG()
 * @method static self MAIL_ORDER_PRESCRIPTION_DRUG()
 * @method static self PSYCHIATRIC()
 * @method static self SKILLED_NURSING_CARE()
 * @method static self VISION()
 * @method static self PARTIAL_HOSPITALIZATION_PSYCHIATRIC()
 */
final class ServiceTypeCode extends Enum
{
    public const MEDICAL_CARE = '1';
    public const DENTAL_CARE = '35';
    public const HOSPITAL_INPATIENT = '48';
    public const HOSPITAL_OUTPATIENT = '50';
    public const LONG_TERM_CARE = '54';
    public const FREE_STANDING_PRESCRIPTION_DRUG = '89';
    public const MAIL_ORDER_PRESCRIPTION_DRUG = '90';
    public const PSYCHIATRIC = 'A4';
    public const SKILLED_NURSING_CARE = 'AG';
    public const VISION = 'AL';
    public const PARTIAL_HOSPITALIZATION_PSYCHIATRIC = 'BB';
}
