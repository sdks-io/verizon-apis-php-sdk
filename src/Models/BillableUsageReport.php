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
 * Bill usage report.
 */
class BillableUsageReport implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $accountName;

    /**
     * @var bool|null
     */
    private $usageForAllAccounts;

    /**
     * @var string|null
     */
    private $skuName;

    /**
     * @var string|null
     */
    private $transactionsAllowed;

    /**
     * @var string|null
     */
    private $totalTransactionCount;

    /**
     * @var ServiceUsage|null
     */
    private $primaryAccount;

    /**
     * @var ServiceUsage[]|null
     */
    private $managedAccounts;

    /**
     * Returns Account Name.
     * Account identifier.
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * Sets Account Name.
     * Account identifier.
     *
     * @maps accountName
     */
    public function setAccountName(?string $accountName): void
    {
        $this->accountName = $accountName;
    }

    /**
     * Returns Usage for All Accounts.
     * The usage is for a single or multiple accounts.
     */
    public function getUsageForAllAccounts(): ?bool
    {
        return $this->usageForAllAccounts;
    }

    /**
     * Sets Usage for All Accounts.
     * The usage is for a single or multiple accounts.
     *
     * @maps usageForAllAccounts
     */
    public function setUsageForAllAccounts(?bool $usageForAllAccounts): void
    {
        $this->usageForAllAccounts = $usageForAllAccounts;
    }

    /**
     * Returns Sku Name.
     * SKU Name of the service subscription.
     */
    public function getSkuName(): ?string
    {
        return $this->skuName;
    }

    /**
     * Sets Sku Name.
     * SKU Name of the service subscription.
     *
     * @maps skuName
     */
    public function setSkuName(?string $skuName): void
    {
        $this->skuName = $skuName;
    }

    /**
     * Returns Transactions Allowed.
     * The number of location requests included with the subscription type.
     */
    public function getTransactionsAllowed(): ?string
    {
        return $this->transactionsAllowed;
    }

    /**
     * Sets Transactions Allowed.
     * The number of location requests included with the subscription type.
     *
     * @maps transactionsAllowed
     */
    public function setTransactionsAllowed(?string $transactionsAllowed): void
    {
        $this->transactionsAllowed = $transactionsAllowed;
    }

    /**
     * Returns Total Transaction Count.
     * The total number of billable device location requests during the reporting period from all included
     * accounts.
     */
    public function getTotalTransactionCount(): ?string
    {
        return $this->totalTransactionCount;
    }

    /**
     * Sets Total Transaction Count.
     * The total number of billable device location requests during the reporting period from all included
     * accounts.
     *
     * @maps totalTransactionCount
     */
    public function setTotalTransactionCount(?string $totalTransactionCount): void
    {
        $this->totalTransactionCount = $totalTransactionCount;
    }

    /**
     * Returns Primary Account.
     */
    public function getPrimaryAccount(): ?ServiceUsage
    {
        return $this->primaryAccount;
    }

    /**
     * Sets Primary Account.
     *
     * @maps PrimaryAccount
     */
    public function setPrimaryAccount(?ServiceUsage $primaryAccount): void
    {
        $this->primaryAccount = $primaryAccount;
    }

    /**
     * Returns Managed Accounts.
     * Zero or more managed accounts.
     *
     * @return ServiceUsage[]|null
     */
    public function getManagedAccounts(): ?array
    {
        return $this->managedAccounts;
    }

    /**
     * Sets Managed Accounts.
     * Zero or more managed accounts.
     *
     * @maps ManagedAccounts
     *
     * @param ServiceUsage[]|null $managedAccounts
     */
    public function setManagedAccounts(?array $managedAccounts): void
    {
        $this->managedAccounts = $managedAccounts;
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
        if (isset($this->accountName)) {
            $json['accountName']           = $this->accountName;
        }
        if (isset($this->usageForAllAccounts)) {
            $json['usageForAllAccounts']   = $this->usageForAllAccounts;
        }
        if (isset($this->skuName)) {
            $json['skuName']               = $this->skuName;
        }
        if (isset($this->transactionsAllowed)) {
            $json['transactionsAllowed']   = $this->transactionsAllowed;
        }
        if (isset($this->totalTransactionCount)) {
            $json['totalTransactionCount'] = $this->totalTransactionCount;
        }
        if (isset($this->primaryAccount)) {
            $json['PrimaryAccount']        = $this->primaryAccount;
        }
        if (isset($this->managedAccounts)) {
            $json['ManagedAccounts']       = $this->managedAccounts;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
