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
 * The last status of the device as a list filter.
 */
class ProvisioningStatusFilterEnum
{
    public const UNKNOWN = 'UNKNOWN';

    public const DEACTIVATED = 'DEACTIVATED';

    public const ACTIVATED = 'ACTIVATED';

    public const DEACTIVE = 'DEACTIVE';

    public const ACTIVE = 'ACTIVE';

    public const SUSPEND = 'SUSPEND';

    public const PENDING_ACTIVATION = 'PENDING_ACTIVATION';

    public const PENDING_DEACTIVATION = 'PENDING_DEACTIVATION';

    public const PRE_ACTIVE = 'PRE_ACTIVE';

    public const ACTIVATION_READY = 'ACTIVATION_READY';

    public const INVENTORY = 'INVENTORY';

    public const PURGED = 'PURGED';

    public const REPLACED = 'REPLACED';

    public const RETIRED = 'RETIRED';

    public const TEST_READY = 'TEST_READY';

    private const _ALL_VALUES = [
        self::UNKNOWN,
        self::DEACTIVATED,
        self::ACTIVATED,
        self::DEACTIVE,
        self::ACTIVE,
        self::SUSPEND,
        self::PENDING_ACTIVATION,
        self::PENDING_DEACTIVATION,
        self::PRE_ACTIVE,
        self::ACTIVATION_READY,
        self::INVENTORY,
        self::PURGED,
        self::REPLACED,
        self::RETIRED,
        self::TEST_READY
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
        throw new Exception("$value is invalid for ProvisioningStatusFilterEnum.");
    }
}