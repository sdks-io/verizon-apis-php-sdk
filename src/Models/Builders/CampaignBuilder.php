<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\Campaign;

/**
 * Builder for model Campaign
 *
 * @see Campaign
 */
class CampaignBuilder
{
    /**
     * @var Campaign
     */
    private $instance;

    private function __construct(Campaign $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new campaign Builder object.
     */
    public static function init(
        string $id,
        string $accountName,
        string $protocol,
        string $make,
        string $model,
        \DateTime $startDate,
        \DateTime $endDate,
        string $status,
        bool $autoAssignLicenseFlag,
        bool $autoAddDevicesFlag
    ): self {
        return new self(new Campaign(
            $id,
            $accountName,
            $protocol,
            $make,
            $model,
            $startDate,
            $endDate,
            $status,
            $autoAssignLicenseFlag,
            $autoAddDevicesFlag
        ));
    }

    /**
     * Sets campaign name field.
     */
    public function campaignName(?string $value): self
    {
        $this->instance->setCampaignName($value);
        return $this;
    }

    /**
     * Sets firmware name field.
     */
    public function firmwareName(?string $value): self
    {
        $this->instance->setFirmwareName($value);
        return $this;
    }

    /**
     * Sets firmware from field.
     */
    public function firmwareFrom(?string $value): self
    {
        $this->instance->setFirmwareFrom($value);
        return $this;
    }

    /**
     * Sets firmware to field.
     */
    public function firmwareTo(?string $value): self
    {
        $this->instance->setFirmwareTo($value);
        return $this;
    }

    /**
     * Sets campaign time window list field.
     */
    public function campaignTimeWindowList(?array $value): self
    {
        $this->instance->setCampaignTimeWindowList($value);
        return $this;
    }

    /**
     * Initializes a new campaign object.
     */
    public function build(): Campaign
    {
        return CoreHelper::clone($this->instance);
    }
}
