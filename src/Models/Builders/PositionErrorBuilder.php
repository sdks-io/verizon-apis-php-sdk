<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\PositionError;

/**
 * Builder for model PositionError
 *
 * @see PositionError
 */
class PositionErrorBuilder
{
    /**
     * @var PositionError
     */
    private $instance;

    private function __construct(PositionError $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new position error Builder object.
     */
    public static function init(): self
    {
        return new self(new PositionError());
    }

    /**
     * Sets time field.
     */
    public function time(?string $value): self
    {
        $this->instance->setTime($value);
        return $this;
    }

    /**
     * Sets utcoffset field.
     */
    public function utcoffset(?string $value): self
    {
        $this->instance->setUtcoffset($value);
        return $this;
    }

    /**
     * Sets type field.
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Sets info field.
     */
    public function info(?string $value): self
    {
        $this->instance->setInfo($value);
        return $this;
    }

    /**
     * Initializes a new position error object.
     */
    public function build(): PositionError
    {
        return CoreHelper::clone($this->instance);
    }
}
