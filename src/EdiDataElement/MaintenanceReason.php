<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiDataElement;

use MabeEnum\Enum;

/**
 * @method static self NOTIFICATION_ONLY()
 */
final class MaintenanceReason extends Enum
{
    public const NOTIFICATION_ONLY = 'XN';
}
