<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiDataElement;

use MabeEnum\Enum;

/**
 * @method static self TERMINATION_OF_EMPLOYMENT()
 * @method static self NO_QUALIFICATION()
 */
final class CobraQualifyingEvents extends Enum
{
    public const TERMINATION_OF_EMPLOYMENT = '1';
    public const NO_QUALIFICATION = '';

}
