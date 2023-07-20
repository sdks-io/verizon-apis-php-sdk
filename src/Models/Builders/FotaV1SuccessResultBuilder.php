<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\FotaV1SuccessResult;

/**
 * Builder for model FotaV1SuccessResult
 *
 * @see FotaV1SuccessResult
 */
class FotaV1SuccessResultBuilder
{
    /**
     * @var FotaV1SuccessResult
     */
    private $instance;

    private function __construct(FotaV1SuccessResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new fota v1 success result Builder object.
     */
    public static function init(): self
    {
        return new self(new FotaV1SuccessResult());
    }

    /**
     * Sets success field.
     */
    public function success(?bool $value): self
    {
        $this->instance->setSuccess($value);
        return $this;
    }

    /**
     * Initializes a new fota v1 success result object.
     */
    public function build(): FotaV1SuccessResult
    {
        return CoreHelper::clone($this->instance);
    }
}
