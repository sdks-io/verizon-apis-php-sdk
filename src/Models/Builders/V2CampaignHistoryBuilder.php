<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\V2CampaignHistory;

/**
 * Builder for model V2CampaignHistory
 *
 * @see V2CampaignHistory
 */
class V2CampaignHistoryBuilder
{
    /**
     * @var V2CampaignHistory
     */
    private $instance;

    private function __construct(V2CampaignHistory $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new v2 campaign history Builder object.
     */
    public static function init(bool $hasMoreData): self
    {
        return new self(new V2CampaignHistory($hasMoreData));
    }

    /**
     * Sets last seen campaign id field.
     */
    public function lastSeenCampaignId(?string $value): self
    {
        $this->instance->setLastSeenCampaignId($value);
        return $this;
    }

    /**
     * Sets campaign list field.
     */
    public function campaignList(?array $value): self
    {
        $this->instance->setCampaignList($value);
        return $this;
    }

    /**
     * Initializes a new v2 campaign history object.
     */
    public function build(): V2CampaignHistory
    {
        return CoreHelper::clone($this->instance);
    }
}
