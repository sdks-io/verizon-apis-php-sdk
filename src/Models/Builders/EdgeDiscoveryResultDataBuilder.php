<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\EdgeDiscoveryResultData;

/**
 * Builder for model EdgeDiscoveryResultData
 *
 * @see EdgeDiscoveryResultData
 */
class EdgeDiscoveryResultDataBuilder
{
    /**
     * @var EdgeDiscoveryResultData
     */
    private $instance;

    private function __construct(EdgeDiscoveryResultData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new edge discovery result data Builder object.
     */
    public static function init(): self
    {
        return new self(new EdgeDiscoveryResultData());
    }

    /**
     * Sets additional message field.
     */
    public function additionalMessage(?string $value): self
    {
        $this->instance->setAdditionalMessage($value);
        return $this;
    }

    /**
     * Initializes a new edge discovery result data object.
     */
    public function build(): EdgeDiscoveryResultData
    {
        return CoreHelper::clone($this->instance);
    }
}
