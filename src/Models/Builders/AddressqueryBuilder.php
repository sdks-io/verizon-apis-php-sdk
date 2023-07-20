<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\Addressquery;

/**
 * Builder for model Addressquery
 *
 * @see Addressquery
 */
class AddressqueryBuilder
{
    /**
     * @var Addressquery
     */
    private $instance;

    private function __construct(Addressquery $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new addressquery Builder object.
     */
    public static function init(): self
    {
        return new self(new Addressquery());
    }

    /**
     * Sets address field.
     */
    public function address(?array $value): self
    {
        $this->instance->setAddress($value);
        return $this;
    }

    /**
     * Initializes a new addressquery object.
     */
    public function build(): Addressquery
    {
        return CoreHelper::clone($this->instance);
    }
}
