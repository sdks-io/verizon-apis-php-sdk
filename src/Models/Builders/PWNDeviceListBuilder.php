<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\PWNDeviceList;

/**
 * Builder for model PWNDeviceList
 *
 * @see PWNDeviceList
 */
class PWNDeviceListBuilder
{
    /**
     * @var PWNDeviceList
     */
    private $instance;

    private function __construct(PWNDeviceList $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new pwndevice list Builder object.
     */
    public static function init(array $deviceIds): self
    {
        return new self(new PWNDeviceList($deviceIds));
    }

    /**
     * Initializes a new pwndevice list object.
     */
    public function build(): PWNDeviceList
    {
        return CoreHelper::clone($this->instance);
    }
}
