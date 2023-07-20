<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;
use VerizonLib\Utils\DateTimeHelper;

/**
 * Software package information.
 */
class SoftwarePackage implements \JsonSerializable
{
    /**
     * @var string
     */
    private $softwareName;

    /**
     * @var \DateTime
     */
    private $launchDate;

    /**
     * @var string|null
     */
    private $releaseNote;

    /**
     * @var string
     */
    private $model;

    /**
     * @var string
     */
    private $make;

    /**
     * @var string
     */
    private $distributionType;

    /**
     * @var string
     */
    private $devicePlatformId;

    /**
     * @param string $softwareName
     * @param \DateTime $launchDate
     * @param string $model
     * @param string $make
     * @param string $distributionType
     * @param string $devicePlatformId
     */
    public function __construct(
        string $softwareName,
        \DateTime $launchDate,
        string $model,
        string $make,
        string $distributionType,
        string $devicePlatformId
    ) {
        $this->softwareName = $softwareName;
        $this->launchDate = $launchDate;
        $this->model = $model;
        $this->make = $make;
        $this->distributionType = $distributionType;
        $this->devicePlatformId = $devicePlatformId;
    }

    /**
     * Returns Software Name.
     * Software name.
     */
    public function getSoftwareName(): string
    {
        return $this->softwareName;
    }

    /**
     * Sets Software Name.
     * Software name.
     *
     * @required
     * @maps softwareName
     */
    public function setSoftwareName(string $softwareName): void
    {
        $this->softwareName = $softwareName;
    }

    /**
     * Returns Launch Date.
     * Software launch date.
     */
    public function getLaunchDate(): \DateTime
    {
        return $this->launchDate;
    }

    /**
     * Sets Launch Date.
     * Software launch date.
     *
     * @required
     * @maps launchDate
     * @factory \VerizonLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setLaunchDate(\DateTime $launchDate): void
    {
        $this->launchDate = $launchDate;
    }

    /**
     * Returns Release Note.
     * Software release note reserved for future use.
     */
    public function getReleaseNote(): ?string
    {
        return $this->releaseNote;
    }

    /**
     * Sets Release Note.
     * Software release note reserved for future use.
     *
     * @maps releaseNote
     */
    public function setReleaseNote(?string $releaseNote): void
    {
        $this->releaseNote = $releaseNote;
    }

    /**
     * Returns Model.
     * Software applicable device model.
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * Sets Model.
     * Software applicable device model.
     *
     * @required
     * @maps model
     */
    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    /**
     * Returns Make.
     * Software applicable device make.
     */
    public function getMake(): string
    {
        return $this->make;
    }

    /**
     * Sets Make.
     * Software applicable device make.
     *
     * @required
     * @maps make
     */
    public function setMake(string $make): void
    {
        $this->make = $make;
    }

    /**
     * Returns Distribution Type.
     * LWM2M, OMD-DM or HTTP.
     */
    public function getDistributionType(): string
    {
        return $this->distributionType;
    }

    /**
     * Sets Distribution Type.
     * LWM2M, OMD-DM or HTTP.
     *
     * @required
     * @maps distributionType
     */
    public function setDistributionType(string $distributionType): void
    {
        $this->distributionType = $distributionType;
    }

    /**
     * Returns Device Platform Id.
     * The platform (Android, iOS, etc.) that the software can be applied to.
     */
    public function getDevicePlatformId(): string
    {
        return $this->devicePlatformId;
    }

    /**
     * Sets Device Platform Id.
     * The platform (Android, iOS, etc.) that the software can be applied to.
     *
     * @required
     * @maps devicePlatformId
     */
    public function setDevicePlatformId(string $devicePlatformId): void
    {
        $this->devicePlatformId = $devicePlatformId;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['softwareName']     = $this->softwareName;
        $json['launchDate']       = DateTimeHelper::toSimpleDate($this->launchDate);
        if (isset($this->releaseNote)) {
            $json['releaseNote']  = $this->releaseNote;
        }
        $json['model']            = $this->model;
        $json['make']             = $this->make;
        $json['distributionType'] = $this->distributionType;
        $json['devicePlatformId'] = $this->devicePlatformId;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}