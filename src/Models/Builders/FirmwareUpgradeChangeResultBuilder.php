<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\FirmwareUpgradeChangeResult;

/**
 * Builder for model FirmwareUpgradeChangeResult
 *
 * @see FirmwareUpgradeChangeResult
 */
class FirmwareUpgradeChangeResultBuilder
{
    /**
     * @var FirmwareUpgradeChangeResult
     */
    private $instance;

    private function __construct(FirmwareUpgradeChangeResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new firmware upgrade change result Builder object.
     */
    public static function init(): self
    {
        return new self(new FirmwareUpgradeChangeResult());
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
     * Sets id field.
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets device list field.
     */
    public function deviceList(?array $value): self
    {
        $this->instance->setDeviceList($value);
        return $this;
    }

    /**
     * Initializes a new firmware upgrade change result object.
     */
    public function build(): FirmwareUpgradeChangeResult
    {
        return CoreHelper::clone($this->instance);
    }
}
