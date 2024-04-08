<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class UpdateTriggerRequest implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $accountName;

    /**
     * @var bool|null
     */
    private $active;

    /**
     * @var AnomalyTriggerRequest|null
     */
    private $anomalyTriggerRequest;

    /**
     * @var string|null
     */
    private $cycleType;

    /**
     * @var DataTriggerRequest|null
     */
    private $dataTriggerRequest;

    /**
     * @var string|null
     */
    private $groupName;

    /**
     * @var PromoAlertTriggerRequest|null
     */
    private $promoAlertTriggerRequest;

    /**
     * @var SessionTriggerRequest|null
     */
    private $sessionTriggerRequest;

    /**
     * @var SMSTriggerRequest|null
     */
    private $smsTriggerRequest;

    /**
     * @var string|null
     */
    private $triggerCategory;

    /**
     * @var string|null
     */
    private $triggerId;

    /**
     * @var string|null
     */
    private $triggerName;

    /**
     * Returns Account Name.
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * Sets Account Name.
     *
     * @maps accountName
     */
    public function setAccountName(?string $accountName): void
    {
        $this->accountName = $accountName;
    }

    /**
     * Returns Active.
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }

    /**
     * Sets Active.
     *
     * @maps active
     */
    public function setActive(?bool $active): void
    {
        $this->active = $active;
    }

    /**
     * Returns Anomaly Trigger Request.
     * The details of the UsageAnomaly trigger.
     */
    public function getAnomalyTriggerRequest(): ?AnomalyTriggerRequest
    {
        return $this->anomalyTriggerRequest;
    }

    /**
     * Sets Anomaly Trigger Request.
     * The details of the UsageAnomaly trigger.
     *
     * @maps anomalyTriggerRequest
     */
    public function setAnomalyTriggerRequest(?AnomalyTriggerRequest $anomalyTriggerRequest): void
    {
        $this->anomalyTriggerRequest = $anomalyTriggerRequest;
    }

    /**
     * Returns Cycle Type.
     */
    public function getCycleType(): ?string
    {
        return $this->cycleType;
    }

    /**
     * Sets Cycle Type.
     *
     * @maps cycleType
     * @factory \VerizonLib\Models\CycleTypeEnum::checkValue
     */
    public function setCycleType(?string $cycleType): void
    {
        $this->cycleType = $cycleType;
    }

    /**
     * Returns Data Trigger Request.
     */
    public function getDataTriggerRequest(): ?DataTriggerRequest
    {
        return $this->dataTriggerRequest;
    }

    /**
     * Sets Data Trigger Request.
     *
     * @maps dataTriggerRequest
     */
    public function setDataTriggerRequest(?DataTriggerRequest $dataTriggerRequest): void
    {
        $this->dataTriggerRequest = $dataTriggerRequest;
    }

    /**
     * Returns Group Name.
     */
    public function getGroupName(): ?string
    {
        return $this->groupName;
    }

    /**
     * Sets Group Name.
     *
     * @maps groupName
     */
    public function setGroupName(?string $groupName): void
    {
        $this->groupName = $groupName;
    }

    /**
     * Returns Promo Alert Trigger Request.
     */
    public function getPromoAlertTriggerRequest(): ?PromoAlertTriggerRequest
    {
        return $this->promoAlertTriggerRequest;
    }

    /**
     * Sets Promo Alert Trigger Request.
     *
     * @maps promoAlertTriggerRequest
     */
    public function setPromoAlertTriggerRequest(?PromoAlertTriggerRequest $promoAlertTriggerRequest): void
    {
        $this->promoAlertTriggerRequest = $promoAlertTriggerRequest;
    }

    /**
     * Returns Session Trigger Request.
     */
    public function getSessionTriggerRequest(): ?SessionTriggerRequest
    {
        return $this->sessionTriggerRequest;
    }

    /**
     * Sets Session Trigger Request.
     *
     * @maps sessionTriggerRequest
     */
    public function setSessionTriggerRequest(?SessionTriggerRequest $sessionTriggerRequest): void
    {
        $this->sessionTriggerRequest = $sessionTriggerRequest;
    }

    /**
     * Returns Sms Trigger Request.
     */
    public function getSmsTriggerRequest(): ?SMSTriggerRequest
    {
        return $this->smsTriggerRequest;
    }

    /**
     * Sets Sms Trigger Request.
     *
     * @maps smsTriggerRequest
     */
    public function setSmsTriggerRequest(?SMSTriggerRequest $smsTriggerRequest): void
    {
        $this->smsTriggerRequest = $smsTriggerRequest;
    }

    /**
     * Returns Trigger Category.
     */
    public function getTriggerCategory(): ?string
    {
        return $this->triggerCategory;
    }

    /**
     * Sets Trigger Category.
     *
     * @maps triggerCategory
     */
    public function setTriggerCategory(?string $triggerCategory): void
    {
        $this->triggerCategory = $triggerCategory;
    }

    /**
     * Returns Trigger Id.
     */
    public function getTriggerId(): ?string
    {
        return $this->triggerId;
    }

    /**
     * Sets Trigger Id.
     *
     * @maps triggerId
     */
    public function setTriggerId(?string $triggerId): void
    {
        $this->triggerId = $triggerId;
    }

    /**
     * Returns Trigger Name.
     */
    public function getTriggerName(): ?string
    {
        return $this->triggerName;
    }

    /**
     * Sets Trigger Name.
     *
     * @maps triggerName
     */
    public function setTriggerName(?string $triggerName): void
    {
        $this->triggerName = $triggerName;
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
        if (isset($this->accountName)) {
            $json['accountName']              = $this->accountName;
        }
        if (isset($this->active)) {
            $json['active']                   = $this->active;
        }
        if (isset($this->anomalyTriggerRequest)) {
            $json['anomalyTriggerRequest']    = $this->anomalyTriggerRequest;
        }
        if (isset($this->cycleType)) {
            $json['cycleType']                = CycleTypeEnum::checkValue($this->cycleType);
        }
        if (isset($this->dataTriggerRequest)) {
            $json['dataTriggerRequest']       = $this->dataTriggerRequest;
        }
        if (isset($this->groupName)) {
            $json['groupName']                = $this->groupName;
        }
        if (isset($this->promoAlertTriggerRequest)) {
            $json['promoAlertTriggerRequest'] = $this->promoAlertTriggerRequest;
        }
        if (isset($this->sessionTriggerRequest)) {
            $json['sessionTriggerRequest']    = $this->sessionTriggerRequest;
        }
        if (isset($this->smsTriggerRequest)) {
            $json['smsTriggerRequest']        = $this->smsTriggerRequest;
        }
        if (isset($this->triggerCategory)) {
            $json['triggerCategory']          = $this->triggerCategory;
        }
        if (isset($this->triggerId)) {
            $json['triggerId']                = $this->triggerId;
        }
        if (isset($this->triggerName)) {
            $json['triggerName']              = $this->triggerName;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
