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
 * Response to query the most recent data for Key Performance Indicators (KPIs) like network
 * availability, MEC hostnames and more.
 */
class MECPerformanceMetrics implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $queryStatus;

    /**
     * @var string|null
     */
    private $start;

    /**
     * @var string|null
     */
    private $end;

    /**
     * @var MECPerformanceQueryResult[]|null
     */
    private $queryResult;

    /**
     * Returns Query Status.
     * Success or Failed.
     */
    public function getQueryStatus(): ?string
    {
        return $this->queryStatus;
    }

    /**
     * Sets Query Status.
     * Success or Failed.
     *
     * @maps QueryStatus
     */
    public function setQueryStatus(?string $queryStatus): void
    {
        $this->queryStatus = $queryStatus;
    }

    /**
     * Returns Start.
     * Timestamp of the query's start, format:mm/dd/yyyy,hr:min:sec.
     */
    public function getStart(): ?string
    {
        return $this->start;
    }

    /**
     * Sets Start.
     * Timestamp of the query's start, format:mm/dd/yyyy,hr:min:sec.
     *
     * @maps Start
     */
    public function setStart(?string $start): void
    {
        $this->start = $start;
    }

    /**
     * Returns End.
     * Timestamp of the query's end , format:mm/dd/yyyy, hr:min:sec.
     */
    public function getEnd(): ?string
    {
        return $this->end;
    }

    /**
     * Sets End.
     * Timestamp of the query's end , format:mm/dd/yyyy, hr:min:sec.
     *
     * @maps End
     */
    public function setEnd(?string $end): void
    {
        $this->end = $end;
    }

    /**
     * Returns Query Result.
     * MEC performance query result.
     *
     * @return MECPerformanceQueryResult[]|null
     */
    public function getQueryResult(): ?array
    {
        return $this->queryResult;
    }

    /**
     * Sets Query Result.
     * MEC performance query result.
     *
     * @maps QueryResult
     *
     * @param MECPerformanceQueryResult[]|null $queryResult
     */
    public function setQueryResult(?array $queryResult): void
    {
        $this->queryResult = $queryResult;
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
        if (isset($this->queryStatus)) {
            $json['QueryStatus'] = $this->queryStatus;
        }
        if (isset($this->start)) {
            $json['Start']       = $this->start;
        }
        if (isset($this->end)) {
            $json['End']         = $this->end;
        }
        if (isset($this->queryResult)) {
            $json['QueryResult'] = $this->queryResult;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}