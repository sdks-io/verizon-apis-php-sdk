<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\MECSiteLocationsResult;

/**
 * Builder for model MECSiteLocationsResult
 *
 * @see MECSiteLocationsResult
 */
class MECSiteLocationsResultBuilder
{
    /**
     * @var MECSiteLocationsResult
     */
    private $instance;

    private function __construct(MECSiteLocationsResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new mecsite locations result Builder object.
     */
    public static function init(): self
    {
        return new self(new MECSiteLocationsResult());
    }

    /**
     * Sets mecsites field.
     */
    public function mecsites(?array $value): self
    {
        $this->instance->setMecsites($value);
        return $this;
    }

    /**
     * Initializes a new mecsite locations result object.
     */
    public function build(): MECSiteLocationsResult
    {
        return CoreHelper::clone($this->instance);
    }
}
