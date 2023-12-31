<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ZoneItem;

/**
 * Builder for model ZoneItem
 *
 * @see ZoneItem
 */
class ZoneItemBuilder
{
    /**
     * @var ZoneItem
     */
    private $instance;

    private function __construct(ZoneItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new zone item Builder object.
     */
    public static function init(): self
    {
        return new self(new ZoneItem());
    }

    /**
     * Sets zone field.
     */
    public function zone(?string $value): self
    {
        $this->instance->setZone($value);
        return $this;
    }

    /**
     * Initializes a new zone item object.
     */
    public function build(): ZoneItem
    {
        return CoreHelper::clone($this->instance);
    }
}
