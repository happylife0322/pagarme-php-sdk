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
 * Split
 */
class CreateSplitRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var int
     */
    private $amount;

    /**
     * @var string
     */
    private $recipientId;

    /**
     * @var CreateSplitOptionsRequest|null
     */
    private $options;

    /**
     * @param string $type
     * @param int $amount
     * @param string $recipientId
     */
    public function __construct(string $type, int $amount, string $recipientId)
    {
        $this->type = $type;
        $this->amount = $amount;
        $this->recipientId = $recipientId;
    }

    /**
     * Returns Type.
     *
     * Split type
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     *
     * Split type
     *
     * @required
     * @maps type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Amount.
     *
     * Amount
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     *
     * Amount
     *
     * @required
     * @maps amount
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Recipient Id.
     *
     * Recipient id
     */
    public function getRecipientId(): string
    {
        return $this->recipientId;
    }

    /**
     * Sets Recipient Id.
     *
     * Recipient id
     *
     * @required
     * @maps recipient_id
     */
    public function setRecipientId(string $recipientId): void
    {
        $this->recipientId = $recipientId;
    }

    /**
     * Returns Options.
     *
     * The split options request
     */
    public function getOptions(): ?CreateSplitOptionsRequest
    {
        return $this->options;
    }

    /**
     * Sets Options.
     *
     * The split options request
     *
     * @maps options
     */
    public function setOptions(?CreateSplitOptionsRequest $options): void
    {
        $this->options = $options;
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
        $json['type']         = $this->type;
        $json['amount']       = $this->amount;
        $json['recipient_id'] = $this->recipientId;
        if (isset($this->options)) {
            $json['options']  = $this->options;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
