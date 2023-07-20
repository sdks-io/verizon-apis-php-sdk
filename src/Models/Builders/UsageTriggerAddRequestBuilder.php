<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\UsageTriggerAddRequest;

/**
 * Builder for model UsageTriggerAddRequest
 *
 * @see UsageTriggerAddRequest
 */
class UsageTriggerAddRequestBuilder
{
    /**
     * @var UsageTriggerAddRequest
     */
    private $instance;

    private function __construct(UsageTriggerAddRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new usage trigger add request Builder object.
     */
    public static function init(string $accountName, string $serviceName, string $thresholdValue): self
    {
        return new self(new UsageTriggerAddRequest($accountName, $serviceName, $thresholdValue));
    }

    /**
     * Sets trigger name field.
     */
    public function triggerName(?string $value): self
    {
        $this->instance->setTriggerName($value);
        return $this;
    }

    /**
     * Sets allow excess field.
     */
    public function allowExcess(?bool $value): self
    {
        $this->instance->setAllowExcess($value);
        return $this;
    }

    /**
     * Sets send sms notification field.
     */
    public function sendSmsNotification(?bool $value): self
    {
        $this->instance->setSendSmsNotification($value);
        return $this;
    }

    /**
     * Sets sms phone numbers field.
     */
    public function smsPhoneNumbers(?string $value): self
    {
        $this->instance->setSmsPhoneNumbers($value);
        return $this;
    }

    /**
     * Sets send email notification field.
     */
    public function sendEmailNotification(?bool $value): self
    {
        $this->instance->setSendEmailNotification($value);
        return $this;
    }

    /**
     * Sets email addresses field.
     */
    public function emailAddresses(?string $value): self
    {
        $this->instance->setEmailAddresses($value);
        return $this;
    }

    /**
     * Initializes a new usage trigger add request object.
     */
    public function build(): UsageTriggerAddRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
