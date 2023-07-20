<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\Address;
use VerizonLib\Models\CustomerName;
use VerizonLib\Models\PlaceOfUse;

/**
 * Builder for model PlaceOfUse
 *
 * @see PlaceOfUse
 */
class PlaceOfUseBuilder
{
    /**
     * @var PlaceOfUse
     */
    private $instance;

    private function __construct(PlaceOfUse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new place of use Builder object.
     */
    public static function init(): self
    {
        return new self(new PlaceOfUse());
    }

    /**
     * Sets address field.
     */
    public function address(?Address $value): self
    {
        $this->instance->setAddress($value);
        return $this;
    }

    /**
     * Sets customer name field.
     */
    public function customerName(?CustomerName $value): self
    {
        $this->instance->setCustomerName($value);
        return $this;
    }

    /**
     * Initializes a new place of use object.
     */
    public function build(): PlaceOfUse
    {
        return CoreHelper::clone($this->instance);
    }
}
