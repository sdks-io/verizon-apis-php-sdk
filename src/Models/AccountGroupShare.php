<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class AccountGroupShare implements \JsonSerializable
{
    /**
     * @var AccountGroupShareIndividual|null
     */
    private $accountGroupShareIndividual;

    /**
     * Returns Account Group Share Individual.
     */
    public function getAccountGroupShareIndividual(): ?AccountGroupShareIndividual
    {
        return $this->accountGroupShareIndividual;
    }

    /**
     * Sets Account Group Share Individual.
     *
     * @maps accountGroupShareIndividual
     */
    public function setAccountGroupShareIndividual(?AccountGroupShareIndividual $accountGroupShareIndividual): void
    {
        $this->accountGroupShareIndividual = $accountGroupShareIndividual;
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
        if (isset($this->accountGroupShareIndividual)) {
            $json['accountGroupShareIndividual'] = $this->accountGroupShareIndividual;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
