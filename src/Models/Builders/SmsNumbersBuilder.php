<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\SmsNumbers;

/**
 * Builder for model SmsNumbers
 *
 * @see SmsNumbers
 */
class SmsNumbersBuilder
{
    /**
     * @var SmsNumbers
     */
    private $instance;

    private function __construct(SmsNumbers $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new sms numbers Builder object.
     */
    public static function init(): self
    {
        return new self(new SmsNumbers());
    }

    /**
     * Sets number field.
     */
    public function number(?string $value): self
    {
        $this->instance->setNumber($value);
        return $this;
    }

    /**
     * Sets carrier field.
     */
    public function carrier(?string $value): self
    {
        $this->instance->setCarrier($value);
        return $this;
    }

    /**
     * Initializes a new sms numbers object.
     */
    public function build(): SmsNumbers
    {
        return CoreHelper::clone($this->instance);
    }
}
