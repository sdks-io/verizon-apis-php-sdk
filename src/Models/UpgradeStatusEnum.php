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
 * The status of the upgrades that you want to retrieve.
 */
class UpgradeStatusEnum
{
    public const REQUESTPENDING = 'RequestPending';

    public const QUEUED = 'Queued';

    public const REQUESTFAILED = 'RequestFailed';

    public const INPROGRESS = 'InProgress';

    public const FINISHED = 'Finished';

    public const UPGRADEFAILED = 'UpgradeFailed';

    private const _ALL_VALUES = [
        self::REQUESTPENDING,
        self::QUEUED,
        self::REQUESTFAILED,
        self::INPROGRESS,
        self::FINISHED,
        self::UPGRADEFAILED
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
        throw new Exception("$value is invalid for UpgradeStatusEnum.");
    }
}
