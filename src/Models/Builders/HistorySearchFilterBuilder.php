<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\Device;
use VerizonLib\Models\HistorySearchFilter;
use VerizonLib\Models\HistorySearchFilterAttributes;

/**
 * Builder for model HistorySearchFilter
 *
 * @see HistorySearchFilter
 */
class HistorySearchFilterBuilder
{
    /**
     * @var HistorySearchFilter
     */
    private $instance;

    private function __construct(HistorySearchFilter $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new history search filter Builder object.
     */
    public static function init(string $accountName, Device $device): self
    {
        return new self(new HistorySearchFilter($accountName, $device));
    }

    /**
     * Sets attributes field.
     */
    public function attributes(?HistorySearchFilterAttributes $value): self
    {
        $this->instance->setAttributes($value);
        return $this;
    }

    /**
     * Initializes a new history search filter object.
     */
    public function build(): HistorySearchFilter
    {
        return CoreHelper::clone($this->instance);
    }
}
