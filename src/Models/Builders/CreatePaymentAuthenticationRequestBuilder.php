<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreatePaymentAuthenticationRequest;
use PagarmeApiSDKLib\Models\CreateThreeDSecureRequest;

/**
 * Builder for model CreatePaymentAuthenticationRequest
 *
 * @see CreatePaymentAuthenticationRequest
 */
class CreatePaymentAuthenticationRequestBuilder
{
    /**
     * @var CreatePaymentAuthenticationRequest
     */
    private $instance;

    private function __construct(CreatePaymentAuthenticationRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create payment authentication request Builder object.
     */
    public static function init(string $type, CreateThreeDSecureRequest $threedSecure): self
    {
        return new self(new CreatePaymentAuthenticationRequest($type, $threedSecure));
    }

    /**
     * Initializes a new create payment authentication request object.
     */
    public function build(): CreatePaymentAuthenticationRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
