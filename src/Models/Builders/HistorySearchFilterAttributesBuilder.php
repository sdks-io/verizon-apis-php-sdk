<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\HistorySearchFilterAttributes;

/**
 * Builder for model HistorySearchFilterAttributes
 *
 * @see HistorySearchFilterAttributes
 */
class HistorySearchFilterAttributesBuilder
{
    /**
     * @var HistorySearchFilterAttributes
     */
    private $instance;

    private function __construct(HistorySearchFilterAttributes $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new history search filter attributes Builder object.
     */
    public static function init(): self
    {
        return new self(new HistorySearchFilterAttributes());
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
     * Initializes a new history search filter attributes object.
     */
    public function build(): HistorySearchFilterAttributes
    {
        return CoreHelper::clone($this->instance);
    }
}