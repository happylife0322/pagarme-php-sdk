<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreateCancelChargeRequest;

/**
 * Builder for model CreateCancelChargeRequest
 *
 * @see CreateCancelChargeRequest
 */
class CreateCancelChargeRequestBuilder
{
    /**
     * @var CreateCancelChargeRequest
     */
    private $instance;

    private function __construct(CreateCancelChargeRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create cancel charge request Builder object.
     */
    public static function init(string $operationReference): self
    {
        return new self(new CreateCancelChargeRequest($operationReference));
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
     * Sets split rules field.
     */
    public function splitRules(?array $value): self
    {
        $this->instance->setSplitRules($value);
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
     * Initializes a new create cancel charge request object.
     */
    public function build(): CreateCancelChargeRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
