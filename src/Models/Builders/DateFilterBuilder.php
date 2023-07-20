<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\DateFilter;

/**
 * Builder for model DateFilter
 *
 * @see DateFilter
 */
class DateFilterBuilder
{
    /**
     * @var DateFilter
     */
    private $instance;

    private function __construct(DateFilter $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new date filter Builder object.
     */
    public static function init(): self
    {
        return new self(new DateFilter());
    }

    /**
     * Sets earliest field.
     */
    public function earliest(?string $value): self
    {
        $this->instance->setEarliest($value);
        return $this;
    }

    /**
     * Sets latest field.
     */
    public function latest(?string $value): self
    {
        $this->instance->setLatest($value);
        return $this;
    }

    /**
     * Initializes a new date filter object.
     */
    public function build(): DateFilter
    {
        return CoreHelper::clone($this->instance);
    }
}