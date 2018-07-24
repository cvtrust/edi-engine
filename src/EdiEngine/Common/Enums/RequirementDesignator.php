<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/18/2018
 * Time: 3:36 PM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\Common\Enums;


use MabeEnum\Enum;

/**
 * Class RequirementDesignator
 * @package CVTrust\EdiEngine\Common\Enums
 *
 * @method static RequirementDesignator Mandatory
 * @method static RequirementDesignator Optional
 */
class RequirementDesignator extends Enum
{
    public const Mandatory = 0;
    public const Optional = 1;
}