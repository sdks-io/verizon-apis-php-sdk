<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\TriggerValueResponse;

/**
 * Builder for model TriggerValueResponse
 *
 * @see TriggerValueResponse
 */
class TriggerValueResponseBuilder
{
    /**
     * @var TriggerValueResponse
     */
    private $instance;

    private function __construct(TriggerValueResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new trigger value response Builder object.
     */
    public static function init(): self
    {
        return new self(new TriggerValueResponse());
    }

    /**
     * Sets triggers field.
     */
    public function triggers(?array $value): self
    {
        $this->instance->setTriggers($value);
        return $this;
    }

    /**
     * Initializes a new trigger value response object.
     */
    public function build(): TriggerValueResponse
    {
        return CoreHelper::clone($this->instance);
    }
}