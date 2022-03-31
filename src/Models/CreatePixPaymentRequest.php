<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models;

use PagarmeApiSDKLib\Utils\DateTimeHelper;
use stdClass;

/**
 * Contains information to create a pix payment
 */
class CreatePixPaymentRequest implements \JsonSerializable
{
    /**
     * @var \DateTime|null
     */
    private $expiresAt;

    /**
     * @var int|null
     */
    private $expiresIn;

    /**
     * @var PixAdditionalInformation[]|null
     */
    private $additionalInformation;

    /**
     * Returns Expires At.
     * Datetime when pix payment will expire
     */
    public function getExpiresAt(): ?\DateTime
    {
        return $this->expiresAt;
    }

    /**
     * Sets Expires At.
     * Datetime when pix payment will expire
     *
     * @maps expires_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setExpiresAt(?\DateTime $expiresAt): void
    {
        $this->expiresAt = $expiresAt;
    }

    /**
     * Returns Expires In.
     * Seconds until pix payment expires
     */
    public function getExpiresIn(): ?int
    {
        return $this->expiresIn;
    }

    /**
     * Sets Expires In.
     * Seconds until pix payment expires
     *
     * @maps expires_in
     */
    public function setExpiresIn(?int $expiresIn): void
    {
        $this->expiresIn = $expiresIn;
    }

    /**
     * Returns Additional Information.
     * Pix additional information
     *
     * @return PixAdditionalInformation[]|null
     */
    public function getAdditionalInformation(): ?array
    {
        return $this->additionalInformation;
    }

    /**
     * Sets Additional Information.
     * Pix additional information
     *
     * @maps additional_information
     *
     * @param PixAdditionalInformation[]|null $additionalInformation
     */
    public function setAdditionalInformation(?array $additionalInformation): void
    {
        $this->additionalInformation = $additionalInformation;
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
        if (isset($this->expiresAt)) {
            $json['expires_at']             = DateTimeHelper::toRfc3339DateTime($this->expiresAt);
        }
        if (isset($this->expiresIn)) {
            $json['expires_in']             = $this->expiresIn;
        }
        if (isset($this->additionalInformation)) {
            $json['additional_information'] = $this->additionalInformation;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
