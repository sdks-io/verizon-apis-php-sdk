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
 * Campaign dates and time windows.
 */
class V3ChangeCampaignDatesRequest implements \JsonSerializable
{
    /**
     * @var \DateTime
     */
    private $startDate;

    /**
     * @var \DateTime
     */
    private $endDate;

    /**
     * @var V3TimeWindow[]|null
     */
    private $campaignTimeWindowList;

    /**
     * @param \DateTime $startDate
     * @param \DateTime $endDate
     */
    public function __construct(\DateTime $startDate, \DateTime $endDate)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    /**
     * Returns Start Date.
     * Campaign start date.
     */
    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }

    /**
     * Sets Start Date.
     * Campaign start date.
     *
     * @required
     * @maps startDate
     * @factory \VerizonLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setStartDate(\DateTime $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * Returns End Date.
     * Campaign end date.
     */
    public function getEndDate(): \DateTime
    {
        return $this->endDate;
    }

    /**
     * Sets End Date.
     * Campaign end date.
     *
     * @required
     * @maps endDate
     * @factory \VerizonLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setEndDate(\DateTime $endDate): void
    {
        $this->endDate = $endDate;
    }

    /**
     * Returns Campaign Time Window List.
     * List of allowed campaign time windows.
     *
     * @return V3TimeWindow[]|null
     */
    public function getCampaignTimeWindowList(): ?array
    {
        return $this->campaignTimeWindowList;
    }

    /**
     * Sets Campaign Time Window List.
     * List of allowed campaign time windows.
     *
     * @maps campaignTimeWindowList
     *
     * @param V3TimeWindow[]|null $campaignTimeWindowList
     */
    public function setCampaignTimeWindowList(?array $campaignTimeWindowList): void
    {
        $this->campaignTimeWindowList = $campaignTimeWindowList;
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
        $json['startDate']                  = DateTimeHelper::toSimpleDate($this->startDate);
        $json['endDate']                    = DateTimeHelper::toSimpleDate($this->endDate);
        if (isset($this->campaignTimeWindowList)) {
            $json['campaignTimeWindowList'] = $this->campaignTimeWindowList;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
