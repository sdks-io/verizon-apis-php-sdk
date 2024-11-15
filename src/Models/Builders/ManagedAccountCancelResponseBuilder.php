<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ManagedAccountCancelResponse;

/**
 * Builder for model ManagedAccountCancelResponse
 *
 * @see ManagedAccountCancelResponse
 */
class ManagedAccountCancelResponseBuilder
{
    /**
     * @var ManagedAccountCancelResponse
     */
    private $instance;

    private function __construct(ManagedAccountCancelResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new managed account cancel response Builder object.
     */
    public static function init(
        string $txid,
        string $accountName,
        string $paccountName,
        string $serviceName,
        string $status,
        string $reason
    ): self {
        return new self(
            new ManagedAccountCancelResponse($txid, $accountName, $paccountName, $serviceName, $status, $reason)
        );
    }

    /**
     * Initializes a new managed account cancel response object.
     */
    public function build(): ManagedAccountCancelResponse
    {
        return CoreHelper::clone($this->instance);
    }
}