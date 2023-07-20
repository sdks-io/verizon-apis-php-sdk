<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class UploadAndScheduleFileResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $accountName;

    /**
     * @var string|null
     */
    private $campaignName;

    /**
     * @var string|null
     */
    private $softwareName;

    /**
     * @var string|null
     */
    private $softwareFrom;

    /**
     * @var string|null
     */
    private $softwareTo;

    /**
     * @var string|null
     */
    private $fileName;

    /**
     * @var string|null
     */
    private $fileVersion;

    /**
     * @var string|null
     */
    private $distributionType;

    /**
     * @var string|null
     */
    private $make;

    /**
     * @var string|null
     */
    private $model;

    /**
     * @var string|null
     */
    private $startDate;

    /**
     * @var string|null
     */
    private $endDate;

    /**
     * @var string|null
     */
    private $downloadAfterDate;

    /**
     * @var DownloadTimeWindow[]|null
     */
    private $downloadTimeWindowList;

    /**
     * @var string|null
     */
    private $installAfterDate;

    /**
     * @var DownloadTimeWindow[]|null
     */
    private $installTimeWindowList;

    /**
     * @var string[]|null
     */
    private $deviceList;

    /**
     * @var string|null
     */
    private $status;

    /**
     * Returns Id.
     * Updgrade identifier.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Updgrade identifier.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Account Name.
     * Account identifer.
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * Sets Account Name.
     * Account identifer.
     *
     * @maps accountName
     */
    public function setAccountName(?string $accountName): void
    {
        $this->accountName = $accountName;
    }

    /**
     * Returns Campaign Name.
     * The campaign name.
     */
    public function getCampaignName(): ?string
    {
        return $this->campaignName;
    }

    /**
     * Sets Campaign Name.
     * The campaign name.
     *
     * @maps campaignName
     */
    public function setCampaignName(?string $campaignName): void
    {
        $this->campaignName = $campaignName;
    }

    /**
     * Returns Software Name.
     * Software name.
     */
    public function getSoftwareName(): ?string
    {
        return $this->softwareName;
    }

    /**
     * Sets Software Name.
     * Software name.
     *
     * @maps softwareName
     */
    public function setSoftwareName(?string $softwareName): void
    {
        $this->softwareName = $softwareName;
    }

    /**
     * Returns Software From.
     * Old software name.
     */
    public function getSoftwareFrom(): ?string
    {
        return $this->softwareFrom;
    }

    /**
     * Sets Software From.
     * Old software name.
     *
     * @maps softwareFrom
     */
    public function setSoftwareFrom(?string $softwareFrom): void
    {
        $this->softwareFrom = $softwareFrom;
    }

    /**
     * Returns Software To.
     * New software name.
     */
    public function getSoftwareTo(): ?string
    {
        return $this->softwareTo;
    }

    /**
     * Sets Software To.
     * New software name.
     *
     * @maps softwareTo
     */
    public function setSoftwareTo(?string $softwareTo): void
    {
        $this->softwareTo = $softwareTo;
    }

    /**
     * Returns File Name.
     * The name of the file you are upgrading to.
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    /**
     * Sets File Name.
     * The name of the file you are upgrading to.
     *
     * @maps fileName
     */
    public function setFileName(?string $fileName): void
    {
        $this->fileName = $fileName;
    }

    /**
     * Returns File Version.
     * The version of the file you are upgrading to.
     */
    public function getFileVersion(): ?string
    {
        return $this->fileVersion;
    }

    /**
     * Sets File Version.
     * The version of the file you are upgrading to.
     *
     * @maps fileVersion
     */
    public function setFileVersion(?string $fileVersion): void
    {
        $this->fileVersion = $fileVersion;
    }

    /**
     * Returns Distribution Type.
     * Valid values
     */
    public function getDistributionType(): ?string
    {
        return $this->distributionType;
    }

    /**
     * Sets Distribution Type.
     * Valid values
     *
     * @maps distributionType
     */
    public function setDistributionType(?string $distributionType): void
    {
        $this->distributionType = $distributionType;
    }

    /**
     * Returns Make.
     * Applicable make.
     */
    public function getMake(): ?string
    {
        return $this->make;
    }

    /**
     * Sets Make.
     * Applicable make.
     *
     * @maps make
     */
    public function setMake(?string $make): void
    {
        $this->make = $make;
    }

    /**
     * Returns Model.
     * Applicable model.
     */
    public function getModel(): ?string
    {
        return $this->model;
    }

    /**
     * Sets Model.
     * Applicable model.
     *
     * @maps model
     */
    public function setModel(?string $model): void
    {
        $this->model = $model;
    }

    /**
     * Returns Start Date.
     * Campaign start date.
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }

    /**
     * Sets Start Date.
     * Campaign start date.
     *
     * @maps startDate
     */
    public function setStartDate(?string $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * Returns End Date.
     * Campaign end date.
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }

    /**
     * Sets End Date.
     * Campaign end date.
     *
     * @maps endDate
     */
    public function setEndDate(?string $endDate): void
    {
        $this->endDate = $endDate;
    }

    /**
     * Returns Download After Date.
     * Specifies the starting date the client should download the package. If null, client downloads as
     * soon as possible.
     */
    public function getDownloadAfterDate(): ?string
    {
        return $this->downloadAfterDate;
    }

    /**
     * Sets Download After Date.
     * Specifies the starting date the client should download the package. If null, client downloads as
     * soon as possible.
     *
     * @maps downloadAfterDate
     */
    public function setDownloadAfterDate(?string $downloadAfterDate): void
    {
        $this->downloadAfterDate = $downloadAfterDate;
    }

    /**
     * Returns Download Time Window List.
     * List of allowed download time windows.
     *
     * @return DownloadTimeWindow[]|null
     */
    public function getDownloadTimeWindowList(): ?array
    {
        return $this->downloadTimeWindowList;
    }

    /**
     * Sets Download Time Window List.
     * List of allowed download time windows.
     *
     * @maps downloadTimeWindowList
     *
     * @param DownloadTimeWindow[]|null $downloadTimeWindowList
     */
    public function setDownloadTimeWindowList(?array $downloadTimeWindowList): void
    {
        $this->downloadTimeWindowList = $downloadTimeWindowList;
    }

    /**
     * Returns Install After Date.
     * The date after which you install the package. If null, install as soon as possible.
     */
    public function getInstallAfterDate(): ?string
    {
        return $this->installAfterDate;
    }

    /**
     * Sets Install After Date.
     * The date after which you install the package. If null, install as soon as possible.
     *
     * @maps installAfterDate
     */
    public function setInstallAfterDate(?string $installAfterDate): void
    {
        $this->installAfterDate = $installAfterDate;
    }

    /**
     * Returns Install Time Window List.
     * List of allowed install time windows.
     *
     * @return DownloadTimeWindow[]|null
     */
    public function getInstallTimeWindowList(): ?array
    {
        return $this->installTimeWindowList;
    }

    /**
     * Sets Install Time Window List.
     * List of allowed install time windows.
     *
     * @maps installTimeWindowList
     *
     * @param DownloadTimeWindow[]|null $installTimeWindowList
     */
    public function setInstallTimeWindowList(?array $installTimeWindowList): void
    {
        $this->installTimeWindowList = $installTimeWindowList;
    }

    /**
     * Returns Device List.
     * Device IMEI list.
     *
     * @return string[]|null
     */
    public function getDeviceList(): ?array
    {
        return $this->deviceList;
    }

    /**
     * Sets Device List.
     * Device IMEI list.
     *
     * @maps deviceList
     *
     * @param string[]|null $deviceList
     */
    public function setDeviceList(?array $deviceList): void
    {
        $this->deviceList = $deviceList;
    }

    /**
     * Returns Status.
     * Software update status.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Software update status.
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
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
        if (isset($this->id)) {
            $json['id']                     = $this->id;
        }
        if (isset($this->accountName)) {
            $json['accountName']            = $this->accountName;
        }
        if (isset($this->campaignName)) {
            $json['campaignName']           = $this->campaignName;
        }
        if (isset($this->softwareName)) {
            $json['softwareName']           = $this->softwareName;
        }
        if (isset($this->softwareFrom)) {
            $json['softwareFrom']           = $this->softwareFrom;
        }
        if (isset($this->softwareTo)) {
            $json['softwareTo']             = $this->softwareTo;
        }
        if (isset($this->fileName)) {
            $json['fileName']               = $this->fileName;
        }
        if (isset($this->fileVersion)) {
            $json['fileVersion']            = $this->fileVersion;
        }
        if (isset($this->distributionType)) {
            $json['distributionType']       = $this->distributionType;
        }
        if (isset($this->make)) {
            $json['make']                   = $this->make;
        }
        if (isset($this->model)) {
            $json['model']                  = $this->model;
        }
        if (isset($this->startDate)) {
            $json['startDate']              = $this->startDate;
        }
        if (isset($this->endDate)) {
            $json['endDate']                = $this->endDate;
        }
        if (isset($this->downloadAfterDate)) {
            $json['downloadAfterDate']      = $this->downloadAfterDate;
        }
        if (isset($this->downloadTimeWindowList)) {
            $json['downloadTimeWindowList'] = $this->downloadTimeWindowList;
        }
        if (isset($this->installAfterDate)) {
            $json['installAfterDate']       = $this->installAfterDate;
        }
        if (isset($this->installTimeWindowList)) {
            $json['installTimeWindowList']  = $this->installTimeWindowList;
        }
        if (isset($this->deviceList)) {
            $json['deviceList']             = $this->deviceList;
        }
        if (isset($this->status)) {
            $json['status']                 = $this->status;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
