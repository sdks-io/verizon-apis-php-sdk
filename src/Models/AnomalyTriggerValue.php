<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

/**
 * Trigger details.
 */
class AnomalyTriggerValue implements \JsonSerializable
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
    private $organizationName;

    /**
     * @var string|null
     */
    private $triggerCategory;

    /**
     * @var TriggerAttributesOptions[]|null
     */
    private $triggerAttributes;

    /**
     * @var string|null
     */
    private $createdAt;

    /**
     * @var string|null
     */
    private $modifiedAt;

    /**
     * Returns Trigger Id.
     * The system assigned name of the trigger being updated.
     */
    public function getTriggerId(): ?string
    {
        return $this->triggerId;
    }

    /**
     * Sets Trigger Id.
     * The system assigned name of the trigger being updated.
     *
     * @maps triggerId
     */
    public function setTriggerId(?string $triggerId): void
    {
        $this->triggerId = $triggerId;
    }

    /**
     * Returns Trigger Name.
     * The user defined name of the trigger.
     */
    public function getTriggerName(): ?string
    {
        return $this->triggerName;
    }

    /**
     * Sets Trigger Name.
     * The user defined name of the trigger.
     *
     * @maps triggerName
     */
    public function setTriggerName(?string $triggerName): void
    {
        $this->triggerName = $triggerName;
    }

    /**
     * Returns Organization Name.
     * The user assigned name of the organization associated with the trigger.
     */
    public function getOrganizationName(): ?string
    {
        return $this->organizationName;
    }

    /**
     * Sets Organization Name.
     * The user assigned name of the organization associated with the trigger.
     *
     * @maps organizationName
     */
    public function setOrganizationName(?string $organizationName): void
    {
        $this->organizationName = $organizationName;
    }

    /**
     * Returns Trigger Category.
     * This is the value to use in the request body to detect anomalous behaivior. The values in this table
     * will only be relevant when this parameter is set to this value.
     */
    public function getTriggerCategory(): ?string
    {
        return $this->triggerCategory;
    }

    /**
     * Sets Trigger Category.
     * This is the value to use in the request body to detect anomalous behaivior. The values in this table
     * will only be relevant when this parameter is set to this value.
     *
     * @maps triggerCategory
     */
    public function setTriggerCategory(?string $triggerCategory): void
    {
        $this->triggerCategory = $triggerCategory;
    }

    /**
     * Returns Trigger Attributes.
     * Additional details and keys for the trigger.
     *
     * @return TriggerAttributesOptions[]|null
     */
    public function getTriggerAttributes(): ?array
    {
        return $this->triggerAttributes;
    }

    /**
     * Sets Trigger Attributes.
     * Additional details and keys for the trigger.
     *
     * @maps triggerAttributes
     *
     * @param TriggerAttributesOptions[]|null $triggerAttributes
     */
    public function setTriggerAttributes(?array $triggerAttributes): void
    {
        $this->triggerAttributes = $triggerAttributes;
    }

    /**
     * Returns Created At.
     * Timestamp for whe the trigger was created.
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     * Timestamp for whe the trigger was created.
     *
     * @maps createdAt
     */
    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Modified At.
     * Timestamp for the most recent time the trigger was modified.
     */
    public function getModifiedAt(): ?string
    {
        return $this->modifiedAt;
    }

    /**
     * Sets Modified At.
     * Timestamp for the most recent time the trigger was modified.
     *
     * @maps modifiedAt
     */
    public function setModifiedAt(?string $modifiedAt): void
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
            $json['triggerId']         = $this->triggerId;
        }
        if (isset($this->triggerName)) {
            $json['triggerName']       = $this->triggerName;
        }
        if (isset($this->organizationName)) {
            $json['organizationName']  = $this->organizationName;
        }
        if (isset($this->triggerCategory)) {
            $json['triggerCategory']   = $this->triggerCategory;
        }
        if (isset($this->triggerAttributes)) {
            $json['triggerAttributes'] = $this->triggerAttributes;
        }
        if (isset($this->createdAt)) {
            $json['createdAt']         = $this->createdAt;
        }
        if (isset($this->modifiedAt)) {
            $json['modifiedAt']        = $this->modifiedAt;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
