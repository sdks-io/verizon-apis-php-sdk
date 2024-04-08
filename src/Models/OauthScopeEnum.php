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
 * OAuth 2 scopes supported by the API
 */
class OauthScopeEnum
{
    /**
     * Grant read-only access to discovery data
     */
    public const DISCOVERYREAD = 'discovery:read';

    /**
     * Grant read-only access to service profile data
     */
    public const SERVICEPROFILEREAD = 'serviceprofile:read';

    /**
     * Grant write access to service profile data
     */
    public const SERVICEPROFILEWRITE = 'serviceprofile:write';

    /**
     * Grant read-only access to Service registry data
     */
    public const SERVICEREGISTRYREAD = 'serviceregistry:read';

    /**
     * Grant write access to Service registry data
     */
    public const SERVICEREGISTRYWRITE = 'serviceregistry:write';

    /**
     * Full access for /serviceprofiles and /serviceendpoints.
     */
    public const TS_MEC_FULLACCESS = 'ts.mec.fullaccess';

    /**
     * Limited access. Will not allow use of /serviceprofiles and /serviceendpoints but will allow
     * discovery.
     */
    public const TS_MEC_LIMITACCESS = 'ts.mec.limitaccess';

    public const TS_APPLICATION_RO = 'ts.application.ro';

    /**
     * read access
     */
    public const READ = 'read';

    /**
     * read/write access
     */
    public const WRITE = 'write';

    private const _ALL_VALUES = [
        self::DISCOVERYREAD,
        self::SERVICEPROFILEREAD,
        self::SERVICEPROFILEWRITE,
        self::SERVICEREGISTRYREAD,
        self::SERVICEREGISTRYWRITE,
        self::TS_MEC_FULLACCESS,
        self::TS_MEC_LIMITACCESS,
        self::TS_APPLICATION_RO,
        self::READ,
        self::WRITE
    ];

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
        throw new Exception("$value is invalid for OauthScopeEnum.");
    }
}
