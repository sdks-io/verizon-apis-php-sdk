<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\TriggerNotification;

/**
 * Builder for model TriggerNotification
 *
 * @see TriggerNotification
 */
class TriggerNotificationBuilder
{
    /**
     * @var TriggerNotification
     */
    private $instance;

    private function __construct(TriggerNotification $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new trigger notification Builder object.
     */
    public static function init(): self
    {
        return new self(new TriggerNotification());
    }

    /**
     * Sets notification type field.
     */
    public function notificationType(?string $value): self
    {
        $this->instance->setNotificationType($value);
        return $this;
    }

    /**
     * Sets callback field.
     */
    public function callback(?bool $value): self
    {
        $this->instance->setCallback($value);
        return $this;
    }

    /**
     * Sets email notification field.
     */
    public function emailNotification(?bool $value): self
    {
        $this->instance->setEmailNotification($value);
        return $this;
    }

    /**
     * Sets notification group name field.
     */
    public function notificationGroupName(?string $value): self
    {
        $this->instance->setNotificationGroupName($value);
        return $this;
    }

    /**
     * Sets notification frequency factor field.
     */
    public function notificationFrequencyFactor(?int $value): self
    {
        $this->instance->setNotificationFrequencyFactor($value);
        return $this;
    }

    /**
     * Sets notification frequency interval field.
     */
    public function notificationFrequencyInterval(?string $value): self
    {
        $this->instance->setNotificationFrequencyInterval($value);
        return $this;
    }

    /**
     * Sets external email recipients field.
     */
    public function externalEmailRecipients(?string $value): self
    {
        $this->instance->setExternalEmailRecipients($value);
        return $this;
    }

    /**
     * Sets sms notification field.
     */
    public function smsNotification(?bool $value): self
    {
        $this->instance->setSmsNotification($value);
        return $this;
    }

    /**
     * Sets sms numbers field.
     */
    public function smsNumbers(?array $value): self
    {
        $this->instance->setSmsNumbers($value);
        return $this;
    }

    /**
     * Sets reminder field.
     */
    public function reminder(?bool $value): self
    {
        $this->instance->setReminder($value);
        return $this;
    }

    /**
     * Sets severity field.
     */
    public function severity(?string $value): self
    {
        $this->instance->setSeverity($value);
        return $this;
    }

    /**
     * Initializes a new trigger notification object.
     */
    public function build(): TriggerNotification
    {
        return CoreHelper::clone($this->instance);
    }
}