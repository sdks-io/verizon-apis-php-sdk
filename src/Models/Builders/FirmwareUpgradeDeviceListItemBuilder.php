<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\FirmwareUpgradeDeviceListItem;

/**
 * Builder for model FirmwareUpgradeDeviceListItem
 *
 * @see FirmwareUpgradeDeviceListItem
 */
class FirmwareUpgradeDeviceListItemBuilder
{
    /**
     * @var FirmwareUpgradeDeviceListItem
     */
    private $instance;

    private function __construct(FirmwareUpgradeDeviceListItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new firmware upgrade device list item Builder object.
     */
    public static function init(): self
    {
        return new self(new FirmwareUpgradeDeviceListItem());
    }

    /**
     * Sets device id field.
     */
    public function deviceId(?string $value): self
    {
        $this->instance->setDeviceId($value);
        return $this;
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
     * Sets result reason field.
     */
    public function resultReason(?string $value): self
    {
        $this->instance->setResultReason($value);
        return $this;
    }

    /**
     * Initializes a new firmware upgrade device list item object.
     */
    public function build(): FirmwareUpgradeDeviceListItem
    {
        return CoreHelper::clone($this->instance);
    }
}
