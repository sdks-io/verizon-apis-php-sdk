<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

/**
 * Summary of license assignment.
 */
class V2LicenseSummary implements \JsonSerializable
{
    /**
     * @var string
     */
    private $accountName;

    /**
     * @var int|null
     */
    private $totalLicense;

    /**
     * @var int
     */
    private $assignedLicenses;

    /**
     * @var bool
     */
    private $hasMoreData;

    /**
     * @var string|null
     */
    private $lastSeenDeviceId;

    /**
     * @var int
     */
    private $maxPageSize;

    /**
     * @var V2LicenseDevice[]|null
     */
    private $deviceList;

    /**
     * @param string $accountName
     * @param int $assignedLicenses
     * @param bool $hasMoreData
     * @param int $maxPageSize
     */
    public function __construct(string $accountName, int $assignedLicenses, bool $hasMoreData, int $maxPageSize)
    {
        $this->accountName = $accountName;
        $this->assignedLicenses = $assignedLicenses;
        $this->hasMoreData = $hasMoreData;
        $this->maxPageSize = $maxPageSize;
    }

    /**
     * Returns Account Name.
     * Account identifier.
     */
    public function getAccountName(): string
    {
        return $this->accountName;
    }

    /**
     * Sets Account Name.
     * Account identifier.
     *
     * @required
     * @maps accountName
     */
    public function setAccountName(string $accountName): void
    {
        $this->accountName = $accountName;
    }

    /**
     * Returns Total License.
     * Total FOTA license count.
     */
    public function getTotalLicense(): ?int
    {
        return $this->totalLicense;
    }

    /**
     * Sets Total License.
     * Total FOTA license count.
     *
     * @maps totalLicense
     */
    public function setTotalLicense(?int $totalLicense): void
    {
        $this->totalLicense = $totalLicense;
    }

    /**
     * Returns Assigned Licenses.
     * Assigned FOTA license count.
     */
    public function getAssignedLicenses(): int
    {
        return $this->assignedLicenses;
    }

    /**
     * Sets Assigned Licenses.
     * Assigned FOTA license count.
     *
     * @required
     * @maps assignedLicenses
     */
    public function setAssignedLicenses(int $assignedLicenses): void
    {
        $this->assignedLicenses = $assignedLicenses;
    }

    /**
     * Returns Has More Data.
     * True if there are more devices to retrieve.
     */
    public function getHasMoreData(): bool
    {
        return $this->hasMoreData;
    }

    /**
     * Sets Has More Data.
     * True if there are more devices to retrieve.
     *
     * @required
     * @maps hasMoreData
     */
    public function setHasMoreData(bool $hasMoreData): void
    {
        $this->hasMoreData = $hasMoreData;
    }

    /**
     * Returns Last Seen Device Id.
     * Last seen device identifier.
     */
    public function getLastSeenDeviceId(): ?string
    {
        return $this->lastSeenDeviceId;
    }

    /**
     * Sets Last Seen Device Id.
     * Last seen device identifier.
     *
     * @maps lastSeenDeviceId
     */
    public function setLastSeenDeviceId(?string $lastSeenDeviceId): void
    {
        $this->lastSeenDeviceId = $lastSeenDeviceId;
    }

    /**
     * Returns Max Page Size.
     * Maximum page size.
     */
    public function getMaxPageSize(): int
    {
        return $this->maxPageSize;
    }

    /**
     * Sets Max Page Size.
     * Maximum page size.
     *
     * @required
     * @maps maxPageSize
     */
    public function setMaxPageSize(int $maxPageSize): void
    {
        $this->maxPageSize = $maxPageSize;
    }

    /**
     * Returns Device List.
     * Device IMEI list.
     *
     * @return V2LicenseDevice[]|null
     */
    public function getDeviceList(): ?array
    {
        return $this->deviceList;
    }

    /**
     * Sets Device List.
     * Device IMEI list.
     *
     * @maps deviceList
     *
     * @param V2LicenseDevice[]|null $deviceList
     */
    public function setDeviceList(?array $deviceList): void
    {
        $this->deviceList = $deviceList;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['accountName']          = $this->accountName;
        if (isset($this->totalLicense)) {
            $json['totalLicense']     = $this->totalLicense;
        }
        $json['assignedLicenses']     = $this->assignedLicenses;
        $json['hasMoreData']          = $this->hasMoreData;
        if (isset($this->lastSeenDeviceId)) {
            $json['lastSeenDeviceId'] = $this->lastSeenDeviceId;
        }
        $json['maxPageSize']          = $this->maxPageSize;
        if (isset($this->deviceList)) {
            $json['deviceList']       = $this->deviceList;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
