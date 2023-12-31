<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\V3AccountDevice;

/**
 * Builder for model V3AccountDevice
 *
 * @see V3AccountDevice
 */
class V3AccountDeviceBuilder
{
    /**
     * @var V3AccountDevice
     */
    private $instance;

    private function __construct(V3AccountDevice $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new v3 account device Builder object.
     */
    public static function init(
        string $deviceId,
        string $mdn,
        string $model,
        string $make,
        string $firmware,
        bool $fotaEligible,
        string $status,
        bool $licenseAssigned,
        string $protocol,
        array $softwareList
    ): self {
        return new self(new V3AccountDevice(
            $deviceId,
            $mdn,
            $model,
            $make,
            $firmware,
            $fotaEligible,
            $status,
            $licenseAssigned,
            $protocol,
            $softwareList
        ));
    }

    /**
     * Sets file list field.
     */
    public function fileList(?array $value): self
    {
        $this->instance->setFileList($value);
        return $this;
    }

    /**
     * Sets create time field.
     */
    public function createTime(?string $value): self
    {
        $this->instance->setCreateTime($value);
        return $this;
    }

    /**
     * Sets upgrade time field.
     */
    public function upgradeTime(?string $value): self
    {
        $this->instance->setUpgradeTime($value);
        return $this;
    }

    /**
     * Sets update time field.
     */
    public function updateTime(?string $value): self
    {
        $this->instance->setUpdateTime($value);
        return $this;
    }

    /**
     * Sets refresh time field.
     */
    public function refreshTime(?string $value): self
    {
        $this->instance->setRefreshTime($value);
        return $this;
    }

    /**
     * Initializes a new v3 account device object.
     */
    public function build(): V3AccountDevice
    {
        return CoreHelper::clone($this->instance);
    }
}
