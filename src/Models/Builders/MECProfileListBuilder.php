<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\MECProfileList;

/**
 * Builder for model MECProfileList
 *
 * @see MECProfileList
 */
class MECProfileListBuilder
{
    /**
     * @var MECProfileList
     */
    private $instance;

    private function __construct(MECProfileList $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new mecprofile list Builder object.
     */
    public static function init(): self
    {
        return new self(new MECProfileList());
    }

    /**
     * Sets profiles field.
     */
    public function profiles(?array $value): self
    {
        $this->instance->setProfiles($value);
        return $this;
    }

    /**
     * Initializes a new mecprofile list object.
     */
    public function build(): MECProfileList
    {
        return CoreHelper::clone($this->instance);
    }
}
