<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;
use VerizonLib\Utils\DateTimeHelper;

/**
 * Status of the diagnostic services subscription.
 */
class DiagnosticsSubscription implements \JsonSerializable
{
    /**
     * @var string
     */
    private $accountName;

    /**
     * @var \DateTime
     */
    private $createdOn;

    /**
     * @var \DateTime
     */
    private $lastUpdated;

    /**
     * @var int
     */
    private $totalAllowed;

    /**
     * @var int
     */
    private $totalUsed;

    /**
     * @var string
     */
    private $skuName;

    /**
     * @param string $accountName
     * @param \DateTime $createdOn
     * @param \DateTime $lastUpdated
     * @param int $totalAllowed
     * @param int $totalUsed
     * @param string $skuName
     */
    public function __construct(
        string $accountName,
        \DateTime $createdOn,
        \DateTime $lastUpdated,
        int $totalAllowed,
        int $totalUsed,
        string $skuName
    ) {
        $this->accountName = $accountName;
        $this->createdOn = $createdOn;
        $this->lastUpdated = $lastUpdated;
        $this->totalAllowed = $totalAllowed;
        $this->totalUsed = $totalUsed;
        $this->skuName = $skuName;
    }

    /**
     * Returns Account Name.
     * Account identifier in "##########-#####". An account name is usually numeric, and must include any
     * leading zeros.
     */
    public function getAccountName(): string
    {
        return $this->accountName;
    }

    /**
     * Sets Account Name.
     * Account identifier in "##########-#####". An account name is usually numeric, and must include any
     * leading zeros.
     *
     * @required
     * @maps accountName
     */
    public function setAccountName(string $accountName): void
    {
        $this->accountName = $accountName;
    }

    /**
     * Returns Created On.
     * The date and time of when the subscription was created.
     */
    public function getCreatedOn(): \DateTime
    {
        return $this->createdOn;
    }

    /**
     * Sets Created On.
     * The date and time of when the subscription was created.
     *
     * @required
     * @maps createdOn
     * @factory \VerizonLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedOn(\DateTime $createdOn): void
    {
        $this->createdOn = $createdOn;
    }

    /**
     * Returns Last Updated.
     * The date and time of when the subscription was last updated.
     */
    public function getLastUpdated(): \DateTime
    {
        return $this->lastUpdated;
    }

    /**
     * Sets Last Updated.
     * The date and time of when the subscription was last updated.
     *
     * @required
     * @maps lastUpdated
     * @factory \VerizonLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setLastUpdated(\DateTime $lastUpdated): void
    {
        $this->lastUpdated = $lastUpdated;
    }

    /**
     * Returns Total Allowed.
     * Number of licenses currently assigned to devices.
     */
    public function getTotalAllowed(): int
    {
        return $this->totalAllowed;
    }

    /**
     * Sets Total Allowed.
     * Number of licenses currently assigned to devices.
     *
     * @required
     * @maps totalAllowed
     */
    public function setTotalAllowed(int $totalAllowed): void
    {
        $this->totalAllowed = $totalAllowed;
    }

    /**
     * Returns Total Used.
     * Number of licenses currently used by the devices.
     */
    public function getTotalUsed(): int
    {
        return $this->totalUsed;
    }

    /**
     * Sets Total Used.
     * Number of licenses currently used by the devices.
     *
     * @required
     * @maps totalUsed
     */
    public function setTotalUsed(int $totalUsed): void
    {
        $this->totalUsed = $totalUsed;
    }

    /**
     * Returns Sku Name.
     * Name of the SKU for the account.
     */
    public function getSkuName(): string
    {
        return $this->skuName;
    }

    /**
     * Sets Sku Name.
     * Name of the SKU for the account.
     *
     * @required
     * @maps skuName
     */
    public function setSkuName(string $skuName): void
    {
        $this->skuName = $skuName;
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
        $json['accountName']  = $this->accountName;
        $json['createdOn']    = DateTimeHelper::toRfc3339DateTime($this->createdOn);
        $json['lastUpdated']  = DateTimeHelper::toRfc3339DateTime($this->lastUpdated);
        $json['totalAllowed'] = $this->totalAllowed;
        $json['totalUsed']    = $this->totalUsed;
        $json['skuName']      = $this->skuName;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}