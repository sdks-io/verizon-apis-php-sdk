<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\V2LicenseIMEI;

/**
 * Builder for model V2LicenseIMEI
 *
 * @see V2LicenseIMEI
 */
class V2LicenseIMEIBuilder
{
    /**
     * @var V2LicenseIMEI
     */
    private $instance;

    private function __construct(V2LicenseIMEI $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new v2 license imei Builder object.
     */
    public static function init(array $deviceList): self
    {
        return new self(new V2LicenseIMEI($deviceList));
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
     * Initializes a new v2 license imei object.
     */
    public function build(): V2LicenseIMEI
    {
        return CoreHelper::clone($this->instance);
    }
}
