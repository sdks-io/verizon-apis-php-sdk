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

class Triggervalues2 implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $triggerId;

    /**
     * @var string|null
     */
    private $triggerName;

    /**
     * @var string|null
     */
    private $accountName;

    /**
     * @var string|null
     */
    private $organizationName;

    /**
     * @var string|null
     */
    private $triggerCategory;

    /**
     * @var PromoAlert[]|null
     */
    private $promoAlerts;

    /**
     * @var bool|null
     */
    private $active;

    /**
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     */
    private $modifiedAt;

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
     * Returns Organization Name.
     */
    public function getOrganizationName(): ?string
    {
        return $this->organizationName;
    }

    /**
     * Sets Organization Name.
     *
     * @maps organizationName
     */
    public function setOrganizationName(?string $organizationName): void
    {
        $this->organizationName = $organizationName;
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
     * Returns Promo Alerts.
     *
     * @return PromoAlert[]|null
     */
    public function getPromoAlerts(): ?array
    {
        return $this->promoAlerts;
    }

    /**
     * Sets Promo Alerts.
     *
     * @maps promoAlerts
     *
     * @param PromoAlert[]|null $promoAlerts
     */
    public function setPromoAlerts(?array $promoAlerts): void
    {
        $this->promoAlerts = $promoAlerts;
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
     * Returns Created At.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @maps createdAt
     * @factory \VerizonLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedAt(?\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Modified At.
     */
    public function getModifiedAt(): ?\DateTime
    {
        return $this->modifiedAt;
    }

    /**
     * Sets Modified At.
     *
     * @maps modifiedAt
     * @factory \VerizonLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setModifiedAt(?\DateTime $modifiedAt): void
    {
        $this->modifiedAt = $modifiedAt;
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
        if (isset($this->triggerId)) {
            $json['triggerId']        = $this->triggerId;
        }
        if (isset($this->triggerName)) {
            $json['triggerName']      = $this->triggerName;
        }
        if (isset($this->accountName)) {
            $json['accountName']      = $this->accountName;
        }
        if (isset($this->organizationName)) {
            $json['organizationName'] = $this->organizationName;
        }
        if (isset($this->triggerCategory)) {
            $json['triggerCategory']  = $this->triggerCategory;
        }
        if (isset($this->promoAlerts)) {
            $json['promoAlerts']      = $this->promoAlerts;
        }
        if (isset($this->active)) {
            $json['active']           = $this->active;
        }
        if (isset($this->createdAt)) {
            $json['createdAt']        = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        }
        if (isset($this->modifiedAt)) {
            $json['modifiedAt']       = DateTimeHelper::toRfc3339DateTime($this->modifiedAt);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}