<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use Core\Utils\CoreHelper;
use Exception;
use stdClass;

/**
 * Default type for ueIdentityType.
 */
class UEIdentityTypeEnum
{
    public const IPADDRESS = 'IPAddress';

    public const MSISDN = 'MSISDN';

    public const IMEI = 'IMEI';

    public const MDN = 'MDN';

    public const GPSI = 'GPSI';

    private const _ALL_VALUES = [self::IPADDRESS, self::MSISDN, self::IMEI, self::MDN, self::GPSI];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|string $value Value or a list/map of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        if (CoreHelper::checkValueOrValuesInList($value, self::_ALL_VALUES)) {
            return $value;
        }
        throw new Exception("$value is invalid for UEIdentityTypeEnum.");
    }
}
