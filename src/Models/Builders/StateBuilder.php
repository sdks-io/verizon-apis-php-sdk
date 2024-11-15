<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\State;

/**
 * Builder for model State
 *
 * @see State
 */
class StateBuilder
{
    /**
     * @var State
     */
    private $instance;

    private function __construct(State $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new state Builder object.
     */
    public static function init(): self
    {
        return new self(new State());
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
     * Sets workflow sequence number field.
     */
    public function workflowSequenceNumber(?float $value): self
    {
        $this->instance->setWorkflowSequenceNumber($value);
        return $this;
    }

    /**
     * Sets service plans field.
     */
    public function servicePlans(?array $value): self
    {
        $this->instance->setServicePlans($value);
        return $this;
    }

    /**
     * Initializes a new state object.
     */
    public function build(): State
    {
        return CoreHelper::clone($this->instance);
    }
}
