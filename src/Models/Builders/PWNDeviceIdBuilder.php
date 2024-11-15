<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\PWNDeviceId;

/**
 * Builder for model PWNDeviceId
 *
 * @see PWNDeviceId
 */
class PWNDeviceIdBuilder
{
    /**
     * @var PWNDeviceId
     */
    private $instance;

    private function __construct(PWNDeviceId $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new pwndevice id Builder object.
     */
    public static function init(string $id, string $kind): self
    {
        return new self(new PWNDeviceId($id, $kind));
    }

    /**
     * Initializes a new pwndevice id object.
     */
    public function build(): PWNDeviceId
    {
        return CoreHelper::clone($this->instance);
    }
}
