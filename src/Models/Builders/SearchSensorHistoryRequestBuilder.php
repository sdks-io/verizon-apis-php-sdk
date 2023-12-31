<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\AccountIdentifier;
use VerizonLib\Models\ResourceIdentifier;
use VerizonLib\Models\SearchSensorHistoryRequest;

/**
 * Builder for model SearchSensorHistoryRequest
 *
 * @see SearchSensorHistoryRequest
 */
class SearchSensorHistoryRequestBuilder
{
    /**
     * @var SearchSensorHistoryRequest
     */
    private $instance;

    private function __construct(SearchSensorHistoryRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new search sensor history request Builder object.
     */
    public static function init(AccountIdentifier $accountidentifier, ResourceIdentifier $resourceidentifier): self
    {
        return new self(new SearchSensorHistoryRequest($accountidentifier, $resourceidentifier));
    }

    /**
     * Sets limitnumber field.
     */
    public function limitnumber(?int $value): self
    {
        $this->instance->setLimitnumber($value);
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
     * Initializes a new search sensor history request object.
     */
    public function build(): SearchSensorHistoryRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
