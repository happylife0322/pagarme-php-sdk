<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreateIncrementRequest;

/**
 * Builder for model CreateIncrementRequest
 *
 * @see CreateIncrementRequest
 */
class CreateIncrementRequestBuilder
{
    /**
     * @var CreateIncrementRequest
     */
    private $instance;

    private function __construct(CreateIncrementRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create increment request Builder object.
     */
    public static function init(float $value, string $incrementType, string $itemId): self
    {
        return new self(new CreateIncrementRequest($value, $incrementType, $itemId));
    }

    /**
     * Sets cycles field.
     */
    public function cycles(?int $value): self
    {
        $this->instance->setCycles($value);
        return $this;
    }

    /**
     * Sets description field.
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Initializes a new create increment request object.
     */
    public function build(): CreateIncrementRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
