<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\SMSOptionsSendRequest;

/**
 * Builder for model SMSOptionsSendRequest
 *
 * @see SMSOptionsSendRequest
 */
class SMSOptionsSendRequestBuilder
{
    /**
     * @var SMSOptionsSendRequest
     */
    private $instance;

    private function __construct(SMSOptionsSendRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new smsoptions send request Builder object.
     */
    public static function init(): self
    {
        return new self(new SMSOptionsSendRequest());
    }

    /**
     * Sets service plan field.
     */
    public function servicePlan(?string $value): self
    {
        $this->instance->setServicePlan($value);
        return $this;
    }

    /**
     * Sets sms message field.
     */
    public function smsMessage(?string $value): self
    {
        $this->instance->setSmsMessage($value);
        return $this;
    }

    /**
     * Initializes a new smsoptions send request object.
     */
    public function build(): SMSOptionsSendRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
