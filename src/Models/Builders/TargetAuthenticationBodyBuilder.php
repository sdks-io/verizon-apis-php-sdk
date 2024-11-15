<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\TargetAuthenticationBody;
use VerizonLib\Models\TargetAuthenticationBodyHeaders;
use VerizonLib\Models\TargetAuthenticationBodyHost;

/**
 * Builder for model TargetAuthenticationBody
 *
 * @see TargetAuthenticationBody
 */
class TargetAuthenticationBodyBuilder
{
    /**
     * @var TargetAuthenticationBody
     */
    private $instance;

    private function __construct(TargetAuthenticationBody $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new target authentication body Builder object.
     */
    public static function init(): self
    {
        return new self(new TargetAuthenticationBody());
    }

    /**
     * Sets grant type field.
     */
    public function grantType(?string $value): self
    {
        $this->instance->setGrantType($value);
        return $this;
    }

    /**
     * Sets refresh token field.
     */
    public function refreshToken(?string $value): self
    {
        $this->instance->setRefreshToken($value);
        return $this;
    }

    /**
     * Sets scope field.
     */
    public function scope(?string $value): self
    {
        $this->instance->setScope($value);
        return $this;
    }

    /**
     * Sets headers field.
     */
    public function headers(?TargetAuthenticationBodyHeaders $value): self
    {
        $this->instance->setHeaders($value);
        return $this;
    }

    /**
     * Sets host field.
     */
    public function host(?TargetAuthenticationBodyHost $value): self
    {
        $this->instance->setHost($value);
        return $this;
    }

    /**
     * Initializes a new target authentication body object.
     */
    public function build(): TargetAuthenticationBody
    {
        return CoreHelper::clone($this->instance);
    }
}
