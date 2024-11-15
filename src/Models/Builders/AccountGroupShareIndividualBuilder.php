<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\AccountGroupShareIndividual;
use VerizonLib\Models\ActionAccountGroupShare;
use VerizonLib\Models\ConditionAccountGroupShare;
use VerizonLib\Models\FilterCriteriaAccountGroupShare;

/**
 * Builder for model AccountGroupShareIndividual
 *
 * @see AccountGroupShareIndividual
 */
class AccountGroupShareIndividualBuilder
{
    /**
     * @var AccountGroupShareIndividual
     */
    private $instance;

    private function __construct(AccountGroupShareIndividual $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new account group share individual Builder object.
     */
    public static function init(): self
    {
        return new self(new AccountGroupShareIndividual());
    }

    /**
     * Sets filter criteria field.
     */
    public function filterCriteria(?FilterCriteriaAccountGroupShare $value): self
    {
        $this->instance->setFilterCriteria($value);
        return $this;
    }

    /**
     * Sets condition field.
     */
    public function condition(?ConditionAccountGroupShare $value): self
    {
        $this->instance->setCondition($value);
        return $this;
    }

    /**
     * Sets action field.
     */
    public function action(?ActionAccountGroupShare $value): self
    {
        $this->instance->setAction($value);
        return $this;
    }

    /**
     * Initializes a new account group share individual object.
     */
    public function build(): AccountGroupShareIndividual
    {
        return CoreHelper::clone($this->instance);
    }
}