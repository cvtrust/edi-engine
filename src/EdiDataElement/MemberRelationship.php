<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\EdiDataElement;

use MabeEnum\Enum;


/**
 * @method static self SPOUSE()
 * @method static self FATHER_OR_MOTHER()
 * @method static self GRANDFATHER_OR_GRANDMOTHER()
 * @method static self GRANDSON_OR_GRANDDAUGHTER()
 * @method static self UNCLE_OR_AUNT()
 * @method static self NEPHEW_OR_NIECE()
 * @method static self COUSIN()
 * @method static self ADOPTED_CHILD()
 * @method static self FOSTER_CHILD()
 * @method static self SON_OR_DAUGHTER_IN_LAW()
 * @method static self BROTHER_OR_SISTER_IN_LAW()
 * @method static self MOTHER_OR_FATHER_IN_LAW()
 * @method static self BROTHER_OR_SISTER()
 * @method static self WARD()
 * @method static self STEPPARENT()
 * @method static self STEPSON_OR_STEPDAUGHTER()
 * @method static self SELF()
 * @method static self CHILD()
 * @method static self LEGAL_GUARDIAN_FEMALE()
 * @method static self SPONSORED_DEPENDENT()
 * @method static self DEPENDENT_OF_A_MINOR_DEPENDENT()
 * @method static self EX_SPOUSE()
 * @method static self GUARDIAN()
 * @method static self COURT_APPOINTED_GUARDIAN()
 * @method static self COLLATERAL_DEPENDENT()
 * @method static self LIFE_PARTNER()
 * @method static self ANNUITANT()
 * @method static self TRUSTEE()
 * @method static self OTHER_RELATIONSHIP()
 * @method static self OTHER_RELATIVE()
 */
final class MemberRelationship extends Enum
{
    public const SPOUSE = '01';
    public const FATHER_OR_MOTHER = '03';
    public const GRANDFATHER_OR_GRANDMOTHER = '04';
    public const GRANDSON_OR_GRANDDAUGHTER = '05';
    public const UNCLE_OR_AUNT = '06';
    public const NEPHEW_OR_NIECE = '07';
    public const COUSIN = '08';
    public const ADOPTED_CHILD = '09';
    public const FOSTER_CHILD = '10';
    public const SON_OR_DAUGHTER_IN_LAW = '11';
    public const BROTHER_OR_SISTER_IN_LAW = '12';
    public const MOTHER_OR_FATHER_IN_LAW = '13';
    public const BROTHER_OR_SISTER = '14';
    public const WARD = '15';
    public const STEPPARENT = '16';
    public const STEPSON_OR_STEPDAUGHTER = '17';
    public const SELF = '18';
    public const CHILD = '19';
    public const LEGAL_GUARDIAN_FEMALE = '21';
    public const SPONSORED_DEPENDENT = '23';
    public const DEPENDENT_OF_A_MINOR_DEPENDENT = '24';
    public const EX_SPOUSE = '25';
    public const GUARDIAN = '26';
    public const COURT_APPOINTED_GUARDIAN = '31';
    public const COLLATERAL_DEPENDENT = '38';
    public const LIFE_PARTNER = '53';
    public const ANNUITANT = '60';
    public const TRUSTEE = 'D2';
    public const OTHER_RELATIONSHIP = 'G8';
    public const OTHER_RELATIVE = 'G9';

}
