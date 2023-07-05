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
 * Generic response object for getting a BalanceOperation.
 */
class GetBalanceOperationResponse implements \JsonSerializable
{
    /**
     * @var array
     */
    private $id = [];

    /**
     * @var array
     */
    private $status = [];

    /**
     * @var array
     */
    private $balanceAmount = [];

    /**
     * @var array
     */
    private $balanceOldAmount = [];

    /**
     * @var array
     */
    private $type = [];

    /**
     * @var array
     */
    private $amount = [];

    /**
     * @var array
     */
    private $fee = [];

    /**
     * @var array
     */
    private $createdAt = [];

    /**
     * @var GetMovementObjectBaseResponse|null
     */
    private $movementObject;

    /**
     * Returns Id.
     */
    public function getId(): ?string
    {
        if (count($this->id) == 0) {
            return null;
        }
        return $this->id['value'];
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id['value'] = $id;
    }

    /**
     * Unsets Id.
     */
    public function unsetId(): void
    {
        $this->id = [];
    }

    /**
     * Returns Status.
     */
    public function getStatus(): ?string
    {
        if (count($this->status) == 0) {
            return null;
        }
        return $this->status['value'];
    }

    /**
     * Sets Status.
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status['value'] = $status;
    }

    /**
     * Unsets Status.
     */
    public function unsetStatus(): void
    {
        $this->status = [];
    }

    /**
     * Returns Balance Amount.
     */
    public function getBalanceAmount(): ?string
    {
        if (count($this->balanceAmount) == 0) {
            return null;
        }
        return $this->balanceAmount['value'];
    }

    /**
     * Sets Balance Amount.
     *
     * @maps balance_amount
     */
    public function setBalanceAmount(?string $balanceAmount): void
    {
        $this->balanceAmount['value'] = $balanceAmount;
    }

    /**
     * Unsets Balance Amount.
     */
    public function unsetBalanceAmount(): void
    {
        $this->balanceAmount = [];
    }

    /**
     * Returns Balance Old Amount.
     */
    public function getBalanceOldAmount(): ?string
    {
        if (count($this->balanceOldAmount) == 0) {
            return null;
        }
        return $this->balanceOldAmount['value'];
    }

    /**
     * Sets Balance Old Amount.
     *
     * @maps balance_old_amount
     */
    public function setBalanceOldAmount(?string $balanceOldAmount): void
    {
        $this->balanceOldAmount['value'] = $balanceOldAmount;
    }

    /**
     * Unsets Balance Old Amount.
     */
    public function unsetBalanceOldAmount(): void
    {
        $this->balanceOldAmount = [];
    }

    /**
     * Returns Type.
     */
    public function getType(): ?string
    {
        if (count($this->type) == 0) {
            return null;
        }
        return $this->type['value'];
    }

    /**
     * Sets Type.
     *
     * @maps type
     */
    public function setType(?string $type): void
    {
        $this->type['value'] = $type;
    }

    /**
     * Unsets Type.
     */
    public function unsetType(): void
    {
        $this->type = [];
    }

    /**
     * Returns Amount.
     */
    public function getAmount(): ?string
    {
        if (count($this->amount) == 0) {
            return null;
        }
        return $this->amount['value'];
    }

    /**
     * Sets Amount.
     *
     * @maps amount
     */
    public function setAmount(?string $amount): void
    {
        $this->amount['value'] = $amount;
    }

    /**
     * Unsets Amount.
     */
    public function unsetAmount(): void
    {
        $this->amount = [];
    }

    /**
     * Returns Fee.
     */
    public function getFee(): ?string
    {
        if (count($this->fee) == 0) {
            return null;
        }
        return $this->fee['value'];
    }

    /**
     * Sets Fee.
     *
     * @maps fee
     */
    public function setFee(?string $fee): void
    {
        $this->fee['value'] = $fee;
    }

    /**
     * Unsets Fee.
     */
    public function unsetFee(): void
    {
        $this->fee = [];
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): ?string
    {
        if (count($this->createdAt) == 0) {
            return null;
        }
        return $this->createdAt['value'];
    }

    /**
     * Sets Created At.
     *
     * @maps created_at
     */
    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt['value'] = $createdAt;
    }

    /**
     * Unsets Created At.
     */
    public function unsetCreatedAt(): void
    {
        $this->createdAt = [];
    }

    /**
     * Returns Movement Object.
     */
    public function getMovementObject(): ?GetMovementObjectBaseResponse
    {
        return $this->movementObject;
    }

    /**
     * Sets Movement Object.
     *
     * @maps movement_object
     */
    public function setMovementObject(?GetMovementObjectBaseResponse $movementObject): void
    {
        $this->movementObject = $movementObject;
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
        if (!empty($this->id)) {
            $json['id']                 = $this->id['value'];
        }
        if (!empty($this->status)) {
            $json['status']             = $this->status['value'];
        }
        if (!empty($this->balanceAmount)) {
            $json['balance_amount']     = $this->balanceAmount['value'];
        }
        if (!empty($this->balanceOldAmount)) {
            $json['balance_old_amount'] = $this->balanceOldAmount['value'];
        }
        if (!empty($this->type)) {
            $json['type']               = $this->type['value'];
        }
        if (!empty($this->amount)) {
            $json['amount']             = $this->amount['value'];
        }
        if (!empty($this->fee)) {
            $json['fee']                = $this->fee['value'];
        }
        if (!empty($this->createdAt)) {
            $json['created_at']         = $this->createdAt['value'];
        }
        if (isset($this->movementObject)) {
            $json['movement_object']    = $this->movementObject;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}