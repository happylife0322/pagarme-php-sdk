<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreateCashPaymentRequest;

/**
 * Builder for model CreateCashPaymentRequest
 *
 * @see CreateCashPaymentRequest
 */
class CreateCashPaymentRequestBuilder
{
    /**
     * @var CreateCashPaymentRequest
     */
    private $instance;

    private function __construct(CreateCashPaymentRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create cash payment request Builder object.
     */
    public static function init(string $description, bool $confirm): self
    {
        return new self(new CreateCashPaymentRequest($description, $confirm));
    }

    /**
     * Initializes a new create cash payment request object.
     */
    public function build(): CreateCashPaymentRequest
    {
        return CoreHelper::clone($this->instance);
    }
}