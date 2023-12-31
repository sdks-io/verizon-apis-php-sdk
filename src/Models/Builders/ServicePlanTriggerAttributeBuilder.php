<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ServicePlanTriggerAttribute;

/**
 * Builder for model ServicePlanTriggerAttribute
 *
 * @see ServicePlanTriggerAttribute
 */
class ServicePlanTriggerAttributeBuilder
{
    /**
     * @var ServicePlanTriggerAttribute
     */
    private $instance;

    private function __construct(ServicePlanTriggerAttribute $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new service plan trigger attribute Builder object.
     */
    public static function init(): self
    {
        return new self(new ServicePlanTriggerAttribute());
    }

    /**
     * Sets key field.
     */
    public function key(?string $value): self
    {
        $this->instance->setKey($value);
        return $this;
    }

    /**
     * Initializes a new service plan trigger attribute object.
     */
    public function build(): ServicePlanTriggerAttribute
    {
        return CoreHelper::clone($this->instance);
    }
}
