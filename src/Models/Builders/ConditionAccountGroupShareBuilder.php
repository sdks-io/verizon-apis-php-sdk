<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ConditionAccountGroupShare;

/**
 * Builder for model ConditionAccountGroupShare
 *
 * @see ConditionAccountGroupShare
 */
class ConditionAccountGroupShareBuilder
{
    /**
     * @var ConditionAccountGroupShare
     */
    private $instance;

    private function __construct(ConditionAccountGroupShare $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new condition account group share Builder object.
     */
    public static function init(): self
    {
        return new self(new ConditionAccountGroupShare());
    }

    /**
     * Sets action field.
     */
    public function action(?string $value): self
    {
        $this->instance->setAction($value);
        return $this;
    }

    /**
     * Initializes a new condition account group share object.
     */
    public function build(): ConditionAccountGroupShare
    {
        return CoreHelper::clone($this->instance);
    }
}
