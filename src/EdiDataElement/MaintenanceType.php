<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiDataElement;

use MabeEnum\Enum;

/**
 * @method static self CHANGE()
 * @method static self ADDITION()
 * @method static self CANCELLATION_OR_TERMINATION()
 * @method static self REINSTATEMENT()
 * @method static self AUDIT_OR_COMPARE()
 */
final class MaintenanceType extends Enum
{
    public const CHANGE = '001';
    public const ADDITION = '021';
    public const CANCELLATION_OR_TERMINATION = '024';
    public const REINSTATEMENT = '025';
    public const AUDIT_OR_COMPARE = '030';

}
