<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\BillUsageRequest;

/**
 * Builder for model BillUsageRequest
 *
 * @see BillUsageRequest
 */
class BillUsageRequestBuilder
{
    /**
     * @var BillUsageRequest
     */
    private $instance;

    private function __construct(BillUsageRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new bill usage request Builder object.
     */
    public static function init(string $accountName, string $startDate, string $endDate): self
    {
        return new self(new BillUsageRequest($accountName, $startDate, $endDate));
    }

    /**
     * Sets usage for all accounts field.
     */
    public function usageForAllAccounts(?bool $value): self
    {
        $this->instance->setUsageForAllAccounts($value);
        return $this;
    }

    /**
     * Initializes a new bill usage request object.
     */
    public function build(): BillUsageRequest
    {
        return CoreHelper::clone($this->instance);
    }
}