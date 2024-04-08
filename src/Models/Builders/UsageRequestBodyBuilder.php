<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\UsageRequestBody;

/**
 * Builder for model UsageRequestBody
 *
 * @see UsageRequestBody
 */
class UsageRequestBodyBuilder
{
    /**
     * @var UsageRequestBody
     */
    private $instance;

    private function __construct(UsageRequestBody $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new usage request body Builder object.
     */
    public static function init(): self
    {
        return new self(new UsageRequestBody());
    }

    /**
     * Sets account id field.
     */
    public function accountId(?string $value): self
    {
        $this->instance->setAccountId($value);
        return $this;
    }

    /**
     * Sets device id field.
     */
    public function deviceId(?array $value): self
    {
        $this->instance->setDeviceId($value);
        return $this;
    }

    /**
     * Sets start time field.
     */
    public function startTime(?\DateTime $value): self
    {
        $this->instance->setStartTime($value);
        return $this;
    }

    /**
     * Sets end time field.
     */
    public function endTime(?\DateTime $value): self
    {
        $this->instance->setEndTime($value);
        return $this;
    }

    /**
     * Initializes a new usage request body object.
     */
    public function build(): UsageRequestBody
    {
        return CoreHelper::clone($this->instance);
    }
}