<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ActiveTriggerIndicator;

/**
 * Builder for model ActiveTriggerIndicator
 *
 * @see ActiveTriggerIndicator
 */
class ActiveTriggerIndicatorBuilder
{
    /**
     * @var ActiveTriggerIndicator
     */
    private $instance;

    private function __construct(ActiveTriggerIndicator $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new active trigger indicator Builder object.
     */
    public static function init(): self
    {
        return new self(new ActiveTriggerIndicator());
    }

    /**
     * Sets active field.
     */
    public function active(?bool $value): self
    {
        $this->instance->setActive($value);
        return $this;
    }

    /**
     * Initializes a new active trigger indicator object.
     */
    public function build(): ActiveTriggerIndicator
    {
        return CoreHelper::clone($this->instance);
    }
}
