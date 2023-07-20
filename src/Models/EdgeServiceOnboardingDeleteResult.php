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
 * Response to delete a service.
 */
class EdgeServiceOnboardingDeleteResult implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $message;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string|null
     */
    private $subStatus;

    /**
     * Returns Message.
     * Message confirms if the action was success or failure.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Sets Message.
     * Message confirms if the action was success or failure.
     *
     * @maps message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * Returns Status.
     * Will provide the current status of the action.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Will provide the current status of the action.
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Sub Status.
     * Displays the proper response with status.
     */
    public function getSubStatus(): ?string
    {
        return $this->subStatus;
    }

    /**
     * Sets Sub Status.
     * Displays the proper response with status.
     *
     * @maps subStatus
     */
    public function setSubStatus(?string $subStatus): void
    {
        $this->subStatus = $subStatus;
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
        if (isset($this->message)) {
            $json['message']   = $this->message;
        }
        if (isset($this->status)) {
            $json['status']    = $this->status;
        }
        if (isset($this->subStatus)) {
            $json['subStatus'] = $this->subStatus;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}