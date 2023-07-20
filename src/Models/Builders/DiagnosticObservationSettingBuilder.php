<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\Device;
use VerizonLib\Models\DiagnosticObservationSetting;

/**
 * Builder for model DiagnosticObservationSetting
 *
 * @see DiagnosticObservationSetting
 */
class DiagnosticObservationSettingBuilder
{
    /**
     * @var DiagnosticObservationSetting
     */
    private $instance;

    private function __construct(DiagnosticObservationSetting $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new diagnostic observation setting Builder object.
     */
    public static function init(): self
    {
        return new self(new DiagnosticObservationSetting());
    }

    /**
     * Sets account name field.
     */
    public function accountName(?string $value): self
    {
        $this->instance->setAccountName($value);
        return $this;
    }

    /**
     * Sets device field.
     */
    public function device(?Device $value): self
    {
        $this->instance->setDevice($value);
        return $this;
    }

    /**
     * Sets attributes field.
     */
    public function attributes(?array $value): self
    {
        $this->instance->setAttributes($value);
        return $this;
    }

    /**
     * Initializes a new diagnostic observation setting object.
     */
    public function build(): DiagnosticObservationSetting
    {
        return CoreHelper::clone($this->instance);
    }
}
