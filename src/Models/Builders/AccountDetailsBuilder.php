<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\AccountDetails;

/**
 * Builder for model AccountDetails
 *
 * @see AccountDetails
 */
class AccountDetailsBuilder
{
    /**
     * @var AccountDetails
     */
    private $instance;

    private function __construct(AccountDetails $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new account details Builder object.
     */
    public static function init(): self
    {
        return new self(new AccountDetails());
    }

    /**
     * Sets account name field.
     */
    public function accountName(?string $value): self
    {
        $this->instance->setAccountName($value);
        return $this;
    }

    /**
     * Sets account number field.
     */
    public function accountNumber(?string $value): self
    {
        $this->instance->setAccountNumber($value);
        return $this;
    }

    /**
     * Sets organization name field.
     */
    public function organizationName(?string $value): self
    {
        $this->instance->setOrganizationName($value);
        return $this;
    }

    /**
     * Sets is provisioning allowed field.
     */
    public function isProvisioningAllowed(?bool $value): self
    {
        $this->instance->setIsProvisioningAllowed($value);
        return $this;
    }

    /**
     * Sets carriers field.
     */
    public function carriers(?array $value): self
    {
        $this->instance->setCarriers($value);
        return $this;
    }

    /**
     * Sets features field.
     */
    public function features(?array $value): self
    {
        $this->instance->setFeatures($value);
        return $this;
    }

    /**
     * Sets service plans field.
     */
    public function servicePlans(?array $value): self
    {
        $this->instance->setServicePlans($value);
        return $this;
    }

    /**
     * Initializes a new account details object.
     */
    public function build(): AccountDetails
    {
        return CoreHelper::clone($this->instance);
    }
}