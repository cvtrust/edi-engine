<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiDataElement;

use MabeEnum\Enum;

/**
 * @method static self ALTERNATE_TELEPHONE()
 * @method static self BEEPER_NUMBER()
 * @method static self CELLULAR_PHONE()
 * @method static self ELECTRONIC_MAIL()
 * @method static self TELEPHONE_EXTENSION()
 * @method static self FACSIMILE()
 * @method static self HOME_TELEPHONE_NUMBER()
 * @method static self TELEPHONE()
 * @method static self WORK_PHONE_NUMBER()
 */
final class PreferredContactMethod extends Enum
{

    public const ALTERNATE_TELEPHONE = 'AP';
    public const BEEPER_NUMBER = 'BN';
    public const CELLULAR_PHONE = 'CP';
    public const ELECTRONIC_MAIL = 'EM';
    public const TELEPHONE_EXTENSION = 'EX';
    public const FACSIMILE = 'FX';
    public const HOME_TELEPHONE_NUMBER = 'HP';
    public const TELEPHONE = 'TE';
    public const WORK_PHONE_NUMBER = 'WP';

}
