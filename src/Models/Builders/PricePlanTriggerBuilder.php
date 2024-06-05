<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\AccountGroupShare;
use VerizonLib\Models\PricePlanTrigger;

/**
 * Builder for model PricePlanTrigger
 *
 * @see PricePlanTrigger
 */
class PricePlanTriggerBuilder
{
    /**
     * @var PricePlanTrigger
     */
    private $instance;

    private function __construct(PricePlanTrigger $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new price plan trigger Builder object.
     */
    public static function init(): self
    {
        return new self(new PricePlanTrigger());
    }

    /**
     * Sets account group share field.
     */
    public function accountGroupShare(?AccountGroupShare $value): self
    {
        $this->instance->setAccountGroupShare($value);
        return $this;
    }

    /**
     * Initializes a new price plan trigger object.
     */
    public function build(): PricePlanTrigger
    {
        return CoreHelper::clone($this->instance);
    }
}
