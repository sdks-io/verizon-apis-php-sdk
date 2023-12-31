<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\SessionResetPasswordResult;

/**
 * Builder for model SessionResetPasswordResult
 *
 * @see SessionResetPasswordResult
 */
class SessionResetPasswordResultBuilder
{
    /**
     * @var SessionResetPasswordResult
     */
    private $instance;

    private function __construct(SessionResetPasswordResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new session reset password result Builder object.
     */
    public static function init(): self
    {
        return new self(new SessionResetPasswordResult());
    }

    /**
     * Sets new password field.
     */
    public function newPassword(?string $value): self
    {
        $this->instance->setNewPassword($value);
        return $this;
    }

    /**
     * Initializes a new session reset password result object.
     */
    public function build(): SessionResetPasswordResult
    {
        return CoreHelper::clone($this->instance);
    }
}
