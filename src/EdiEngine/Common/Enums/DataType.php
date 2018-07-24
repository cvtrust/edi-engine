<?php
/**
 * Created by PhpStorm.
 * User: chadw
 * Date: 7/19/2018
 * Time: 1:54 PM
 */
declare(strict_types=1);


namespace CVTrust\EdiEngine\Common\Enums;


use MabeEnum\Enum;

/**
 * Class DataType
 * @package CVTrust\EdiEngine\Common\Enums
 *
 * @method static DataType AN
 * @method static DataType DT
 * @method static DataType TM
 * @method static DataType ID
 * @method static DataType N0
 * @method static DataType N1
 * @method static DataType N2
 * @method static DataType N4
 * @method static DataType N6
 * @method static DataType R
 * @method static DataType R2
 * @method static DataType R4
 * @method static DataType R5
 * @method static DataType R6
 * @method static DataType R7
 * @method static DataType R8
 * @method static DataType R9
 *
 */
class DataType extends Enum
{
    public const AN = 'AN';
    public const DT = 'DT';
    public const TM = 'TM';
    public const ID = 'ID';
    public const N0 = 'N0';
    public const N1 = 'N1';
    public const N2 = 'N2';
    public const N4 = 'N4';
    public const N6 = 'N6';
    public const R = 'R';
    public const R2 = 'R2';
    public const R4 = 'R4';
    public const R5 = 'R5';
    public const R6 = 'R6';
    public const R7 = 'R7';
    public const R8 = 'R8';
    public const R9 = 'R9';
}