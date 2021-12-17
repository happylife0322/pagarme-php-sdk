<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models;

use stdClass;

/**
 * Request for creating a location
 */
class CreateLocationRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $latitude;

    /**
     * @var string
     */
    private $longitude;

    /**
     * @param string $latitude
     * @param string $longitude
     */
    public function __construct(string $latitude, string $longitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    /**
     * Returns Latitude.
     *
     * Latitude
     */
    public function getLatitude(): string
    {
        return $this->latitude;
    }

    /**
     * Sets Latitude.
     *
     * Latitude
     *
     * @required
     * @maps latitude
     */
    public function setLatitude(string $latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * Returns Longitude.
     *
     * Longitude
     */
    public function getLongitude(): string
    {
        return $this->longitude;
    }

    /**
     * Sets Longitude.
     *
     * Longitude
     *
     * @required
     * @maps longitude
     */
    public function setLongitude(string $longitude): void
    {
        $this->longitude = $longitude;
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
        $json['latitude']  = $this->latitude;
        $json['longitude'] = $this->longitude;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
