<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\GetBalanceResponse;
use PagarmeApiSDKLib\Models\GetRecipientResponse;

/**
 * Builder for model GetBalanceResponse
 *
 * @see GetBalanceResponse
 */
class GetBalanceResponseBuilder
{
    /**
     * @var GetBalanceResponse
     */
    private $instance;

    private function __construct(GetBalanceResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new get balance response Builder object.
     */
    public static function init(): self
    {
        return new self(new GetBalanceResponse());
    }

    /**
     * Sets currency field.
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
        return $this;
    }

    /**
     * Unsets currency field.
     */
    public function unsetCurrency(): self
    {
        $this->instance->unsetCurrency();
        return $this;
    }

    /**
     * Sets available amount field.
     */
    public function availableAmount(?int $value): self
    {
        $this->instance->setAvailableAmount($value);
        return $this;
    }

    /**
     * Unsets available amount field.
     */
    public function unsetAvailableAmount(): self
    {
        $this->instance->unsetAvailableAmount();
        return $this;
    }

    /**
     * Sets recipient field.
     */
    public function recipient(?GetRecipientResponse $value): self
    {
        $this->instance->setRecipient($value);
        return $this;
    }

    /**
     * Unsets recipient field.
     */
    public function unsetRecipient(): self
    {
        $this->instance->unsetRecipient();
        return $this;
    }

    /**
     * Sets transferred amount field.
     */
    public function transferredAmount(?int $value): self
    {
        $this->instance->setTransferredAmount($value);
        return $this;
    }

    /**
     * Unsets transferred amount field.
     */
    public function unsetTransferredAmount(): self
    {
        $this->instance->unsetTransferredAmount();
        return $this;
    }

    /**
     * Sets waiting funds amount field.
     */
    public function waitingFundsAmount(?int $value): self
    {
        $this->instance->setWaitingFundsAmount($value);
        return $this;
    }

    /**
     * Unsets waiting funds amount field.
     */
    public function unsetWaitingFundsAmount(): self
    {
        $this->instance->unsetWaitingFundsAmount();
        return $this;
    }

    /**
     * Initializes a new get balance response object.
     */
    public function build(): GetBalanceResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
