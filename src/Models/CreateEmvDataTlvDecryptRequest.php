<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models;

use stdClass;

class CreateEmvDataTlvDecryptRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $tag;

    /**
     * @var string
     */
    private $lenght;

    /**
     * @var string
     */
    private $value;

    /**
     * @param string $tag
     * @param string $lenght
     * @param string $value
     */
    public function __construct(string $tag, string $lenght, string $value)
    {
        $this->tag = $tag;
        $this->lenght = $lenght;
        $this->value = $value;
    }

    /**
     * Returns Tag.
     *
     * Emv tag
     */
    public function getTag(): string
    {
        return $this->tag;
    }

    /**
     * Sets Tag.
     *
     * Emv tag
     *
     * @required
     * @maps tag
     */
    public function setTag(string $tag): void
    {
        $this->tag = $tag;
    }

    /**
     * Returns Lenght.
     *
     * Emv lenght
     */
    public function getLenght(): string
    {
        return $this->lenght;
    }

    /**
     * Sets Lenght.
     *
     * Emv lenght
     *
     * @required
     * @maps lenght
     */
    public function setLenght(string $lenght): void
    {
        $this->lenght = $lenght;
    }

    /**
     * Returns Value.
     *
     * Emv value
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * Sets Value.
     *
     * Emv value
     *
     * @required
     * @maps value
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
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
        $json['tag']    = $this->tag;
        $json['lenght'] = $this->lenght;
        $json['value']  = $this->value;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
