<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\LocationReport;

/**
 * Builder for model LocationReport
 *
 * @see LocationReport
 */
class LocationReportBuilder
{
    /**
     * @var LocationReport
     */
    private $instance;

    private function __construct(LocationReport $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new location report Builder object.
     */
    public static function init(): self
    {
        return new self(new LocationReport());
    }

    /**
     * Sets dev location list field.
     */
    public function devLocationList(?array $value): self
    {
        $this->instance->setDevLocationList($value);
        return $this;
    }

    /**
     * Sets has more data field.
     */
    public function hasMoreData(?bool $value): self
    {
        $this->instance->setHasMoreData($value);
        return $this;
    }

    /**
     * Sets start index field.
     */
    public function startIndex(?string $value): self
    {
        $this->instance->setStartIndex($value);
        return $this;
    }

    /**
     * Sets total count field.
     */
    public function totalCount(?int $value): self
    {
        $this->instance->setTotalCount($value);
        return $this;
    }

    /**
     * Sets txid field.
     */
    public function txid(?string $value): self
    {
        $this->instance->setTxid($value);
        return $this;
    }

    /**
     * Initializes a new location report object.
     */
    public function build(): LocationReport
    {
        return CoreHelper::clone($this->instance);
    }
}
