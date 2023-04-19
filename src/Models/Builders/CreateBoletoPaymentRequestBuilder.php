<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreateAddressRequest;
use PagarmeApiSDKLib\Models\CreateBoletoPaymentRequest;
use PagarmeApiSDKLib\Models\CreateFineRequest;
use PagarmeApiSDKLib\Models\CreateInterestRequest;

/**
 * Builder for model CreateBoletoPaymentRequest
 *
 * @see CreateBoletoPaymentRequest
 */
class CreateBoletoPaymentRequestBuilder
{
    /**
     * @var CreateBoletoPaymentRequest
     */
    private $instance;

    private function __construct(CreateBoletoPaymentRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create boleto payment request Builder object.
     */
    public static function init(
        int $retries,
        string $bank,
        string $instructions,
        CreateAddressRequest $billingAddress,
        string $documentNumber,
        string $statementDescriptor
    ): self {
        return new self(new CreateBoletoPaymentRequest(
            $retries,
            $bank,
            $instructions,
            $billingAddress,
            $documentNumber,
            $statementDescriptor
        ));
    }

    /**
     * Sets due at field.
     */
    public function dueAt(?\DateTime $value): self
    {
        $this->instance->setDueAt($value);
        return $this;
    }

    /**
     * Unsets due at field.
     */
    public function unsetDueAt(): self
    {
        $this->instance->unsetDueAt();
        return $this;
    }

    /**
     * Sets billing address id field.
     */
    public function billingAddressId(?string $value): self
    {
        $this->instance->setBillingAddressId($value);
        return $this;
    }

    /**
     * Unsets billing address id field.
     */
    public function unsetBillingAddressId(): self
    {
        $this->instance->unsetBillingAddressId();
        return $this;
    }

    /**
     * Sets nosso numero field.
     */
    public function nossoNumero(?string $value): self
    {
        $this->instance->setNossoNumero($value);
        return $this;
    }

    /**
     * Unsets nosso numero field.
     */
    public function unsetNossoNumero(): self
    {
        $this->instance->unsetNossoNumero();
        return $this;
    }

    /**
     * Sets interest field.
     */
    public function interest(?CreateInterestRequest $value): self
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
    public function fine(?CreateFineRequest $value): self
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
     * Initializes a new create boleto payment request object.
     */
    public function build(): CreateBoletoPaymentRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
