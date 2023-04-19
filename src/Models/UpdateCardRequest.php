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
 * Request for updating a card
 */
class UpdateCardRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $holderName;

    /**
     * @var int
     */
    private $expMonth;

    /**
     * @var int
     */
    private $expYear;

    /**
     * @var array
     */
    private $billingAddressId = [];

    /**
     * @var CreateAddressRequest
     */
    private $billingAddress;

    /**
     * @var array<string,string>
     */
    private $metadata;

    /**
     * @var string
     */
    private $label;

    /**
     * @param string $holderName
     * @param int $expMonth
     * @param int $expYear
     * @param CreateAddressRequest $billingAddress
     * @param array<string,string> $metadata
     * @param string $label
     */
    public function __construct(
        string $holderName,
        int $expMonth,
        int $expYear,
        CreateAddressRequest $billingAddress,
        array $metadata,
        string $label
    ) {
        $this->holderName = $holderName;
        $this->expMonth = $expMonth;
        $this->expYear = $expYear;
        $this->billingAddress = $billingAddress;
        $this->metadata = $metadata;
        $this->label = $label;
    }

    /**
     * Returns Holder Name.
     * Holder name
     */
    public function getHolderName(): string
    {
        return $this->holderName;
    }

    /**
     * Sets Holder Name.
     * Holder name
     *
     * @required
     * @maps holder_name
     */
    public function setHolderName(string $holderName): void
    {
        $this->holderName = $holderName;
    }

    /**
     * Returns Exp Month.
     * Expiration month
     */
    public function getExpMonth(): int
    {
        return $this->expMonth;
    }

    /**
     * Sets Exp Month.
     * Expiration month
     *
     * @required
     * @maps exp_month
     */
    public function setExpMonth(int $expMonth): void
    {
        $this->expMonth = $expMonth;
    }

    /**
     * Returns Exp Year.
     * Expiration year
     */
    public function getExpYear(): int
    {
        return $this->expYear;
    }

    /**
     * Sets Exp Year.
     * Expiration year
     *
     * @required
     * @maps exp_year
     */
    public function setExpYear(int $expYear): void
    {
        $this->expYear = $expYear;
    }

    /**
     * Returns Billing Address Id.
     * Id of the address to be used as billing address
     */
    public function getBillingAddressId(): ?string
    {
        if (count($this->billingAddressId) == 0) {
            return null;
        }
        return $this->billingAddressId['value'];
    }

    /**
     * Sets Billing Address Id.
     * Id of the address to be used as billing address
     *
     * @maps billing_address_id
     */
    public function setBillingAddressId(?string $billingAddressId): void
    {
        $this->billingAddressId['value'] = $billingAddressId;
    }

    /**
     * Unsets Billing Address Id.
     * Id of the address to be used as billing address
     */
    public function unsetBillingAddressId(): void
    {
        $this->billingAddressId = [];
    }

    /**
     * Returns Billing Address.
     * Billing address
     */
    public function getBillingAddress(): CreateAddressRequest
    {
        return $this->billingAddress;
    }

    /**
     * Sets Billing Address.
     * Billing address
     *
     * @required
     * @maps billing_address
     */
    public function setBillingAddress(CreateAddressRequest $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * Returns Metadata.
     * Metadata
     *
     * @return array<string,string>
     */
    public function getMetadata(): array
    {
        return $this->metadata;
    }

    /**
     * Sets Metadata.
     * Metadata
     *
     * @required
     * @maps metadata
     *
     * @param array<string,string> $metadata
     */
    public function setMetadata(array $metadata): void
    {
        $this->metadata = $metadata;
    }

    /**
     * Returns Label.
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * Sets Label.
     *
     * @required
     * @maps label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
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
        $json['holder_name']            = $this->holderName;
        $json['exp_month']              = $this->expMonth;
        $json['exp_year']               = $this->expYear;
        if (!empty($this->billingAddressId)) {
            $json['billing_address_id'] = $this->billingAddressId['value'];
        }
        $json['billing_address']        = $this->billingAddress;
        $json['metadata']               = $this->metadata;
        $json['label']                  = $this->label;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
