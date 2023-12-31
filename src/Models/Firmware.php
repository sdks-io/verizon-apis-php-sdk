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
 * Firmware information.
 */
class Firmware implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $firmwareName;

    /**
     * @var string|null
     */
    private $participantName;

    /**
     * @var \DateTime|null
     */
    private $launchDate;

    /**
     * @var string|null
     */
    private $releaseNote;

    /**
     * @var string|null
     */
    private $model;

    /**
     * @var string|null
     */
    private $make;

    /**
     * @var string|null
     */
    private $fromVersion;

    /**
     * @var string|null
     */
    private $toVersion;

    /**
     * Returns Firmware Name.
     * The name of the firmware image, provided by the device manufacturer.
     */
    public function getFirmwareName(): ?string
    {
        return $this->firmwareName;
    }

    /**
     * Sets Firmware Name.
     * The name of the firmware image, provided by the device manufacturer.
     *
     * @maps firmwareName
     */
    public function setFirmwareName(?string $firmwareName): void
    {
        $this->firmwareName = $firmwareName;
    }

    /**
     * Returns Participant Name.
     * Internal reference; can be ignored.
     */
    public function getParticipantName(): ?string
    {
        return $this->participantName;
    }

    /**
     * Sets Participant Name.
     * Internal reference; can be ignored.
     *
     * @maps participantName
     */
    public function setParticipantName(?string $participantName): void
    {
        $this->participantName = $participantName;
    }

    /**
     * Returns Launch Date.
     * The release date of the firmware image.
     */
    public function getLaunchDate(): ?\DateTime
    {
        return $this->launchDate;
    }

    /**
     * Sets Launch Date.
     * The release date of the firmware image.
     *
     * @maps launchDate
     * @factory \VerizonLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setLaunchDate(?\DateTime $launchDate): void
    {
        $this->launchDate = $launchDate;
    }

    /**
     * Returns Release Note.
     * Additional information about the release.
     */
    public function getReleaseNote(): ?string
    {
        return $this->releaseNote;
    }

    /**
     * Sets Release Note.
     * Additional information about the release.
     *
     * @maps releaseNote
     */
    public function setReleaseNote(?string $releaseNote): void
    {
        $this->releaseNote = $releaseNote;
    }

    /**
     * Returns Model.
     * The device model that the firmware applies to.
     */
    public function getModel(): ?string
    {
        return $this->model;
    }

    /**
     * Sets Model.
     * The device model that the firmware applies to.
     *
     * @maps model
     */
    public function setModel(?string $model): void
    {
        $this->model = $model;
    }

    /**
     * Returns Make.
     * The device make that the firmware applies to.
     */
    public function getMake(): ?string
    {
        return $this->make;
    }

    /**
     * Sets Make.
     * The device make that the firmware applies to.
     *
     * @maps make
     */
    public function setMake(?string $make): void
    {
        $this->make = $make;
    }

    /**
     * Returns From Version.
     * The firmware version that must currently be on the device to upgrade.
     */
    public function getFromVersion(): ?string
    {
        return $this->fromVersion;
    }

    /**
     * Sets From Version.
     * The firmware version that must currently be on the device to upgrade.
     *
     * @maps fromVersion
     */
    public function setFromVersion(?string $fromVersion): void
    {
        $this->fromVersion = $fromVersion;
    }

    /**
     * Returns To Version.
     * The firmware version that will be on the device after an upgrade.
     */
    public function getToVersion(): ?string
    {
        return $this->toVersion;
    }

    /**
     * Sets To Version.
     * The firmware version that will be on the device after an upgrade.
     *
     * @maps toVersion
     */
    public function setToVersion(?string $toVersion): void
    {
        $this->toVersion = $toVersion;
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
        if (isset($this->firmwareName)) {
            $json['firmwareName']    = $this->firmwareName;
        }
        if (isset($this->participantName)) {
            $json['participantName'] = $this->participantName;
        }
        if (isset($this->launchDate)) {
            $json['launchDate']      = DateTimeHelper::toRfc3339DateTime($this->launchDate);
        }
        if (isset($this->releaseNote)) {
            $json['releaseNote']     = $this->releaseNote;
        }
        if (isset($this->model)) {
            $json['model']           = $this->model;
        }
        if (isset($this->make)) {
            $json['make']            = $this->make;
        }
        if (isset($this->fromVersion)) {
            $json['fromVersion']     = $this->fromVersion;
        }
        if (isset($this->toVersion)) {
            $json['toVersion']       = $this->toVersion;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
