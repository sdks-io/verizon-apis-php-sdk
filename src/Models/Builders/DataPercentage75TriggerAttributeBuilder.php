<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\DataPercentage75TriggerAttribute;

/**
 * Builder for model DataPercentage75TriggerAttribute
 *
 * @see DataPercentage75TriggerAttribute
 */
class DataPercentage75TriggerAttributeBuilder
{
    /**
     * @var DataPercentage75TriggerAttribute
     */
    private $instance;

    private function __construct(DataPercentage75TriggerAttribute $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new data percentage 75 trigger attribute Builder object.
     */
    public static function init(): self
    {
        return new self(new DataPercentage75TriggerAttribute());
    }

    /**
     * Sets key field.
     */
    public function key(?string $value): self
    {
        $this->instance->setKey($value);
        return $this;
    }

    /**
     * Sets value field.
     */
    public function value(?bool $value): self
    {
        $this->instance->setValue($value);
        return $this;
    }

    /**
     * Initializes a new data percentage 75 trigger attribute object.
     */
    public function build(): DataPercentage75TriggerAttribute
    {
        return CoreHelper::clone($this->instance);
    }
}