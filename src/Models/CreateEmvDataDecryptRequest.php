<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models;

use stdClass;

class CreateEmvDataDecryptRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $cipher;

    /**
     * @var CreateEmvDataDukptDecryptRequest|null
     */
    private $dukpt;

    /**
     * @var CreateEmvDataTlvDecryptRequest[]
     */
    private $tags;

    /**
     * @param string $cipher
     * @param CreateEmvDataTlvDecryptRequest[] $tags
     */
    public function __construct(string $cipher, array $tags)
    {
        $this->cipher = $cipher;
        $this->tags = $tags;
    }

    /**
     * Returns Cipher.
     *
     * Emv Decrypt cipher type
     */
    public function getCipher(): string
    {
        return $this->cipher;
    }

    /**
     * Sets Cipher.
     *
     * Emv Decrypt cipher type
     *
     * @required
     * @maps cipher
     */
    public function setCipher(string $cipher): void
    {
        $this->cipher = $cipher;
    }

    /**
     * Returns Dukpt.
     *
     * Dukpt data request
     */
    public function getDukpt(): ?CreateEmvDataDukptDecryptRequest
    {
        return $this->dukpt;
    }

    /**
     * Sets Dukpt.
     *
     * Dukpt data request
     *
     * @maps dukpt
     */
    public function setDukpt(?CreateEmvDataDukptDecryptRequest $dukpt): void
    {
        $this->dukpt = $dukpt;
    }

    /**
     * Returns Tags.
     *
     * Encrypted tags list
     *
     * @return CreateEmvDataTlvDecryptRequest[]
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * Sets Tags.
     *
     * Encrypted tags list
     *
     * @required
     * @maps tags
     *
     * @param CreateEmvDataTlvDecryptRequest[] $tags
     */
    public function setTags(array $tags): void
    {
        $this->tags = $tags;
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
        $json['cipher']    = $this->cipher;
        if (isset($this->dukpt)) {
            $json['dukpt'] = $this->dukpt;
        }
        $json['tags']      = $this->tags;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
