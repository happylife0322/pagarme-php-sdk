<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreateBankAccountRequest;
use PagarmeApiSDKLib\Models\UpdateRecipientBankAccountRequest;

/**
 * Builder for model UpdateRecipientBankAccountRequest
 *
 * @see UpdateRecipientBankAccountRequest
 */
class UpdateRecipientBankAccountRequestBuilder
{
    /**
     * @var UpdateRecipientBankAccountRequest
     */
    private $instance;

    private function __construct(UpdateRecipientBankAccountRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new update recipient bank account request Builder object.
     */
    public static function init(CreateBankAccountRequest $bankAccount, string $paymentMode): self
    {
        return new self(new UpdateRecipientBankAccountRequest($bankAccount, $paymentMode));
    }

    /**
     * Initializes a new update recipient bank account request object.
     */
    public function build(): UpdateRecipientBankAccountRequest
    {
        return CoreHelper::clone($this->instance);
    }
}