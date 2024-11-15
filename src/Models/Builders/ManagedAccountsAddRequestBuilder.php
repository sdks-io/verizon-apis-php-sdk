<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ManagedAccountsAddRequest;

/**
 * Builder for model ManagedAccountsAddRequest
 *
 * @see ManagedAccountsAddRequest
 */
class ManagedAccountsAddRequestBuilder
{
    /**
     * @var ManagedAccountsAddRequest
     */
    private $instance;

    private function __construct(ManagedAccountsAddRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new managed accounts add request Builder object.
     */
    public static function init(string $accountName, string $serviceName, string $type, array $managedAccList): self
    {
        return new self(new ManagedAccountsAddRequest($accountName, $serviceName, $type, $managedAccList));
    }

    /**
     * Initializes a new managed accounts add request object.
     */
    public function build(): ManagedAccountsAddRequest
    {
        return CoreHelper::clone($this->instance);
    }
}