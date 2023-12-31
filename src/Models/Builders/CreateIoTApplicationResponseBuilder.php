<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\CreateIoTApplicationResponse;

/**
 * Builder for model CreateIoTApplicationResponse
 *
 * @see CreateIoTApplicationResponse
 */
class CreateIoTApplicationResponseBuilder
{
    /**
     * @var CreateIoTApplicationResponse
     */
    private $instance;

    private function __construct(CreateIoTApplicationResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create io tapplication response Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateIoTApplicationResponse());
    }

    /**
     * Sets app name field.
     */
    public function appName(?string $value): self
    {
        $this->instance->setAppName($value);
        return $this;
    }

    /**
     * Sets shared secret field.
     */
    public function sharedSecret(?string $value): self
    {
        $this->instance->setSharedSecret($value);
        return $this;
    }

    /**
     * Sets url field.
     */
    public function url(?string $value): self
    {
        $this->instance->setUrl($value);
        return $this;
    }

    /**
     * Initializes a new create io tapplication response object.
     */
    public function build(): CreateIoTApplicationResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
