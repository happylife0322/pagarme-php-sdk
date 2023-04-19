<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreateTransactionReportFileRequest;

/**
 * Builder for model CreateTransactionReportFileRequest
 *
 * @see CreateTransactionReportFileRequest
 */
class CreateTransactionReportFileRequestBuilder
{
    /**
     * @var CreateTransactionReportFileRequest
     */
    private $instance;

    private function __construct(CreateTransactionReportFileRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create transaction report file request Builder object.
     */
    public static function init(string $name): self
    {
        return new self(new CreateTransactionReportFileRequest($name));
    }

    /**
     * Sets start at field.
     */
    public function startAt(?\DateTime $value): self
    {
        $this->instance->setStartAt($value);
        return $this;
    }

    /**
     * Sets end at field.
     */
    public function endAt(?string $value): self
    {
        $this->instance->setEndAt($value);
        return $this;
    }

    /**
     * Initializes a new create transaction report file request object.
     */
    public function build(): CreateTransactionReportFileRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
