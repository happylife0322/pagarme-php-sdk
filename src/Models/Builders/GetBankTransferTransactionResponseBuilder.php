<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\GetAntifraudResponse;
use PagarmeApiSDKLib\Models\GetBankTransferTransactionResponse;
use PagarmeApiSDKLib\Models\GetFineResponse;
use PagarmeApiSDKLib\Models\GetGatewayResponseResponse;
use PagarmeApiSDKLib\Models\GetInterestResponse;

/**
 * Builder for model GetBankTransferTransactionResponse
 *
 * @see GetBankTransferTransactionResponse
 */
class GetBankTransferTransactionResponseBuilder
{
    /**
     * @var GetBankTransferTransactionResponse
     */
    private $instance;

    private function __construct(GetBankTransferTransactionResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new get bank transfer transaction response Builder object.
     */
    public static function init(): self
    {
        return new self(new GetBankTransferTransactionResponse());
    }

    /**
     * Sets gateway id field.
     */
    public function gatewayId(?string $value): self
    {
        $this->instance->setGatewayId($value);
        return $this;
    }

    /**
     * Unsets gateway id field.
     */
    public function unsetGatewayId(): self
    {
        $this->instance->unsetGatewayId();
        return $this;
    }

    /**
     * Sets amount field.
     */
    public function amount(?int $value): self
    {
        $this->instance->setAmount($value);
        return $this;
    }

    /**
     * Unsets amount field.
     */
    public function unsetAmount(): self
    {
        $this->instance->unsetAmount();
        return $this;
    }

    /**
     * Sets status field.
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Unsets status field.
     */
    public function unsetStatus(): self
    {
        $this->instance->unsetStatus();
        return $this;
    }

    /**
     * Sets success field.
     */
    public function success(?bool $value): self
    {
        $this->instance->setSuccess($value);
        return $this;
    }

    /**
     * Unsets success field.
     */
    public function unsetSuccess(): self
    {
        $this->instance->unsetSuccess();
        return $this;
    }

    /**
     * Sets created at field.
     */
    public function createdAt(?\DateTime $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Unsets created at field.
     */
    public function unsetCreatedAt(): self
    {
        $this->instance->unsetCreatedAt();
        return $this;
    }

    /**
     * Sets updated at field.
     */
    public function updatedAt(?\DateTime $value): self
    {
        $this->instance->setUpdatedAt($value);
        return $this;
    }

    /**
     * Unsets updated at field.
     */
    public function unsetUpdatedAt(): self
    {
        $this->instance->unsetUpdatedAt();
        return $this;
    }

    /**
     * Sets attempt count field.
     */
    public function attemptCount(?int $value): self
    {
        $this->instance->setAttemptCount($value);
        return $this;
    }

    /**
     * Unsets attempt count field.
     */
    public function unsetAttemptCount(): self
    {
        $this->instance->unsetAttemptCount();
        return $this;
    }

    /**
     * Sets max attempts field.
     */
    public function maxAttempts(?int $value): self
    {
        $this->instance->setMaxAttempts($value);
        return $this;
    }

    /**
     * Unsets max attempts field.
     */
    public function unsetMaxAttempts(): self
    {
        $this->instance->unsetMaxAttempts();
        return $this;
    }

    /**
     * Sets splits field.
     */
    public function splits(?array $value): self
    {
        $this->instance->setSplits($value);
        return $this;
    }

    /**
     * Unsets splits field.
     */
    public function unsetSplits(): self
    {
        $this->instance->unsetSplits();
        return $this;
    }

    /**
     * Sets next attempt field.
     */
    public function nextAttempt(?\DateTime $value): self
    {
        $this->instance->setNextAttempt($value);
        return $this;
    }

    /**
     * Unsets next attempt field.
     */
    public function unsetNextAttempt(): self
    {
        $this->instance->unsetNextAttempt();
        return $this;
    }

    /**
     * Sets transaction type field.
     */
    public function transactionType(?string $value): self
    {
        $this->instance->setTransactionType($value);
        return $this;
    }

    /**
     * Sets id field.
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Unsets id field.
     */
    public function unsetId(): self
    {
        $this->instance->unsetId();
        return $this;
    }

    /**
     * Sets gateway response field.
     */
    public function gatewayResponse(?GetGatewayResponseResponse $value): self
    {
        $this->instance->setGatewayResponse($value);
        return $this;
    }

    /**
     * Unsets gateway response field.
     */
    public function unsetGatewayResponse(): self
    {
        $this->instance->unsetGatewayResponse();
        return $this;
    }

    /**
     * Sets antifraud response field.
     */
    public function antifraudResponse(?GetAntifraudResponse $value): self
    {
        $this->instance->setAntifraudResponse($value);
        return $this;
    }

    /**
     * Unsets antifraud response field.
     */
    public function unsetAntifraudResponse(): self
    {
        $this->instance->unsetAntifraudResponse();
        return $this;
    }

    /**
     * Sets metadata field.
     */
    public function metadata(?array $value): self
    {
        $this->instance->setMetadata($value);
        return $this;
    }

    /**
     * Unsets metadata field.
     */
    public function unsetMetadata(): self
    {
        $this->instance->unsetMetadata();
        return $this;
    }

    /**
     * Sets split field.
     */
    public function split(?array $value): self
    {
        $this->instance->setSplit($value);
        return $this;
    }

    /**
     * Unsets split field.
     */
    public function unsetSplit(): self
    {
        $this->instance->unsetSplit();
        return $this;
    }

    /**
     * Sets interest field.
     */
    public function interest(?GetInterestResponse $value): self
    {
        $this->instance->setInterest($value);
        return $this;
    }

    /**
     * Unsets interest field.
     */
    public function unsetInterest(): self
    {
        $this->instance->unsetInterest();
        return $this;
    }

    /**
     * Sets fine field.
     */
    public function fine(?GetFineResponse $value): self
    {
        $this->instance->setFine($value);
        return $this;
    }

    /**
     * Unsets fine field.
     */
    public function unsetFine(): self
    {
        $this->instance->unsetFine();
        return $this;
    }

    /**
     * Sets max days to pay past due field.
     */
    public function maxDaysToPayPastDue(?int $value): self
    {
        $this->instance->setMaxDaysToPayPastDue($value);
        return $this;
    }

    /**
     * Unsets max days to pay past due field.
     */
    public function unsetMaxDaysToPayPastDue(): self
    {
        $this->instance->unsetMaxDaysToPayPastDue();
        return $this;
    }

    /**
     * Sets url field.
     */
    public function url(?string $value): self
    {
        $this->instance->setUrl($value);
        return $this;
    }

    /**
     * Sets bank tid field.
     */
    public function bankTid(?string $value): self
    {
        $this->instance->setBankTid($value);
        return $this;
    }

    /**
     * Sets bank field.
     */
    public function bank(?string $value): self
    {
        $this->instance->setBank($value);
        return $this;
    }

    /**
     * Sets paid at field.
     */
    public function paidAt(?\DateTime $value): self
    {
        $this->instance->setPaidAt($value);
        return $this;
    }

    /**
     * Sets paid amount field.
     */
    public function paidAmount(?int $value): self
    {
        $this->instance->setPaidAmount($value);
        return $this;
    }

    /**
     * Initializes a new get bank transfer transaction response object.
     */
    public function build(): GetBankTransferTransactionResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
