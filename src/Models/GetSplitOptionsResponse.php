<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models;

use stdClass;

class GetSplitOptionsResponse implements \JsonSerializable
{
    /**
     * @var bool
     */
    private $liable;

    /**
     * @var bool
     */
    private $chargeProcessingFee;

    /**
     * @var string
     */
    private $chargeRemainderFee;

    /**
     * @param bool $liable
     * @param bool $chargeProcessingFee
     * @param string $chargeRemainderFee
     */
    public function __construct(bool $liable, bool $chargeProcessingFee, string $chargeRemainderFee)
    {
        $this->liable = $liable;
        $this->chargeProcessingFee = $chargeProcessingFee;
        $this->chargeRemainderFee = $chargeRemainderFee;
    }

    /**
     * Returns Liable.
     */
    public function getLiable(): bool
    {
        return $this->liable;
    }

    /**
     * Sets Liable.
     *
     * @required
     * @maps liable
     */
    public function setLiable(bool $liable): void
    {
        $this->liable = $liable;
    }

    /**
     * Returns Charge Processing Fee.
     */
    public function getChargeProcessingFee(): bool
    {
        return $this->chargeProcessingFee;
    }

    /**
     * Sets Charge Processing Fee.
     *
     * @required
     * @maps charge_processing_fee
     */
    public function setChargeProcessingFee(bool $chargeProcessingFee): void
    {
        $this->chargeProcessingFee = $chargeProcessingFee;
    }

    /**
     * Returns Charge Remainder Fee.
     */
    public function getChargeRemainderFee(): string
    {
        return $this->chargeRemainderFee;
    }

    /**
     * Sets Charge Remainder Fee.
     *
     * @required
     * @maps charge_remainder_fee
     */
    public function setChargeRemainderFee(string $chargeRemainderFee): void
    {
        $this->chargeRemainderFee = $chargeRemainderFee;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return mixed
     */
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['liable']                = $this->liable;
        $json['charge_processing_fee'] = $this->chargeProcessingFee;
        $json['charge_remainder_fee']  = $this->chargeRemainderFee;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
