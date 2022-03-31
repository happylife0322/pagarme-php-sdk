<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models;

use stdClass;

class CreateConfirmPaymentRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $description;

    /**
     * @var int|null
     */
    private $amount;

    /**
     * @var string
     */
    private $code;

    /**
     * @param string $description
     * @param string $code
     */
    public function __construct(string $description, string $code)
    {
        $this->description = $description;
        $this->code = $code;
    }

    /**
     * Returns Description.
     * Description
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * Description
     *
     * @required
     * @maps description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Amount.
     * Amount
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * Amount
     *
     * @maps Amount
     */
    public function setAmount(?int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Code.
     * Code reference
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Sets Code.
     * Code reference
     *
     * @required
     * @maps Code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
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
        $json['description'] = $this->description;
        if (isset($this->amount)) {
            $json['Amount']  = $this->amount;
        }
        $json['Code']        = $this->code;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
