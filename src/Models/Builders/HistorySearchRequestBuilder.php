<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\HistorySearchFilter;
use VerizonLib\Models\HistorySearchLimitTime;
use VerizonLib\Models\HistorySearchRequest;

/**
 * Builder for model HistorySearchRequest
 *
 * @see HistorySearchRequest
 */
class HistorySearchRequestBuilder
{
    /**
     * @var HistorySearchRequest
     */
    private $instance;

    private function __construct(HistorySearchRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new history search request Builder object.
     */
    public static function init(HistorySearchFilter $filter): self
    {
        return new self(new HistorySearchRequest($filter));
    }

    /**
     * Sets limit number field.
     */
    public function limitNumber(?int $value): self
    {
        $this->instance->setLimitNumber($value);
        return $this;
    }

    /**
     * Sets limit time field.
     */
    public function limitTime(?HistorySearchLimitTime $value): self
    {
        $this->instance->setLimitTime($value);
        return $this;
    }

    /**
     * Sets page field.
     */
    public function page(?string $value): self
    {
        $this->instance->setPage($value);
        return $this;
    }

    /**
     * Initializes a new history search request object.
     */
    public function build(): HistorySearchRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
