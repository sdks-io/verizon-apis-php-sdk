<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\DeleteServiceProfileResult;

/**
 * Builder for model DeleteServiceProfileResult
 *
 * @see DeleteServiceProfileResult
 */
class DeleteServiceProfileResultBuilder
{
    /**
     * @var DeleteServiceProfileResult
     */
    private $instance;

    private function __construct(DeleteServiceProfileResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new delete service profile result Builder object.
     */
    public static function init(): self
    {
        return new self(new DeleteServiceProfileResult());
    }

    /**
     * Sets status field.
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets message field.
     */
    public function message(?string $value): self
    {
        $this->instance->setMessage($value);
        return $this;
    }

    /**
     * Initializes a new delete service profile result object.
     */
    public function build(): DeleteServiceProfileResult
    {
        return CoreHelper::clone($this->instance);
    }
}
