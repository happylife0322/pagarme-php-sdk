<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\GetBankAccountResponse;
use PagarmeApiSDKLib\Models\GetRecipientResponse;

/**
 * Builder for model GetBankAccountResponse
 *
 * @see GetBankAccountResponse
 */
class GetBankAccountResponseBuilder
{
    /**
     * @var GetBankAccountResponse
     */
    private $instance;

    private function __construct(GetBankAccountResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new get bank account response Builder object.
     */
    public static function init(): self
    {
        return new self(new GetBankAccountResponse());
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
     * Sets holder name field.
     */
    public function holderName(?string $value): self
    {
        $this->instance->setHolderName($value);
        return $this;
    }

    /**
     * Unsets holder name field.
     */
    public function unsetHolderName(): self
    {
        $this->instance->unsetHolderName();
        return $this;
    }

    /**
     * Sets holder type field.
     */
    public function holderType(?string $value): self
    {
        $this->instance->setHolderType($value);
        return $this;
    }

    /**
     * Unsets holder type field.
     */
    public function unsetHolderType(): self
    {
        $this->instance->unsetHolderType();
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
     * Unsets bank field.
     */
    public function unsetBank(): self
    {
        $this->instance->unsetBank();
        return $this;
    }

    /**
     * Sets branch number field.
     */
    public function branchNumber(?string $value): self
    {
        $this->instance->setBranchNumber($value);
        return $this;
    }

    /**
     * Unsets branch number field.
     */
    public function unsetBranchNumber(): self
    {
        $this->instance->unsetBranchNumber();
        return $this;
    }

    /**
     * Sets branch check digit field.
     */
    public function branchCheckDigit(?string $value): self
    {
        $this->instance->setBranchCheckDigit($value);
        return $this;
    }

    /**
     * Unsets branch check digit field.
     */
    public function unsetBranchCheckDigit(): self
    {
        $this->instance->unsetBranchCheckDigit();
        return $this;
    }

    /**
     * Sets account number field.
     */
    public function accountNumber(?string $value): self
    {
        $this->instance->setAccountNumber($value);
        return $this;
    }

    /**
     * Unsets account number field.
     */
    public function unsetAccountNumber(): self
    {
        $this->instance->unsetAccountNumber();
        return $this;
    }

    /**
     * Sets account check digit field.
     */
    public function accountCheckDigit(?string $value): self
    {
        $this->instance->setAccountCheckDigit($value);
        return $this;
    }

    /**
     * Unsets account check digit field.
     */
    public function unsetAccountCheckDigit(): self
    {
        $this->instance->unsetAccountCheckDigit();
        return $this;
    }

    /**
     * Sets type field.
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Unsets type field.
     */
    public function unsetType(): self
    {
        $this->instance->unsetType();
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
     * Sets deleted at field.
     */
    public function deletedAt(?\DateTime $value): self
    {
        $this->instance->setDeletedAt($value);
        return $this;
    }

    /**
     * Unsets deleted at field.
     */
    public function unsetDeletedAt(): self
    {
        $this->instance->unsetDeletedAt();
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
     * Sets pix key field.
     */
    public function pixKey(?string $value): self
    {
        $this->instance->setPixKey($value);
        return $this;
    }

    /**
     * Unsets pix key field.
     */
    public function unsetPixKey(): self
    {
        $this->instance->unsetPixKey();
        return $this;
    }

    /**
     * Initializes a new get bank account response object.
     */
    public function build(): GetBankAccountResponse
    {
        return CoreHelper::clone($this->instance);
    }
}