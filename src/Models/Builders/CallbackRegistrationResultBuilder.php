<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\CallbackRegistrationResult;

/**
 * Builder for model CallbackRegistrationResult
 *
 * @see CallbackRegistrationResult
 */
class CallbackRegistrationResultBuilder
{
    /**
     * @var CallbackRegistrationResult
     */
    private $instance;

    private function __construct(CallbackRegistrationResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new callback registration result Builder object.
     */
    public static function init(): self
    {
        return new self(new CallbackRegistrationResult());
    }

    /**
     * Sets account field.
     */
    public function account(?string $value): self
    {
        $this->instance->setAccount($value);
        return $this;
    }

    /**
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Initializes a new callback registration result object.
     */
    public function build(): CallbackRegistrationResult
    {
        return CoreHelper::clone($this->instance);
    }
}