<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\SessionReportRequest;

/**
 * Builder for model SessionReportRequest
 *
 * @see SessionReportRequest
 */
class SessionReportRequestBuilder
{
    /**
     * @var SessionReportRequest
     */
    private $instance;

    private function __construct(SessionReportRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new session report request Builder object.
     */
    public static function init(string $accountNumber, string $imei): self
    {
        return new self(new SessionReportRequest($accountNumber, $imei));
    }

    /**
     * Sets start date field.
     */
    public function startDate(?string $value): self
    {
        $this->instance->setStartDate($value);
        return $this;
    }

    /**
     * Sets end date field.
     */
    public function endDate(?string $value): self
    {
        $this->instance->setEndDate($value);
        return $this;
    }

    /**
     * Sets duration low field.
     */
    public function durationLow(?int $value): self
    {
        $this->instance->setDurationLow($value);
        return $this;
    }

    /**
     * Unsets duration low field.
     */
    public function unsetDurationLow(): self
    {
        $this->instance->unsetDurationLow();
        return $this;
    }

    /**
     * Sets duration high field.
     */
    public function durationHigh(?int $value): self
    {
        $this->instance->setDurationHigh($value);
        return $this;
    }

    /**
     * Unsets duration high field.
     */
    public function unsetDurationHigh(): self
    {
        $this->instance->unsetDurationHigh();
        return $this;
    }

    /**
     * Initializes a new session report request object.
     */
    public function build(): SessionReportRequest
    {
        return CoreHelper::clone($this->instance);
    }
}