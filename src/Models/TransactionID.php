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
 * The transaction ID of the request that you want to cancel, from the POST /devicelocations synchronus
 * response.
 */
class TransactionID implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $txid;

    /**
     * Returns Txid.
     */
    public function getTxid(): ?string
    {
        return $this->txid;
    }

    /**
     * Sets Txid.
     *
     * @maps txid
     */
    public function setTxid(?string $txid): void
    {
        $this->txid = $txid;
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
        if (isset($this->txid)) {
            $json['txid'] = $this->txid;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
