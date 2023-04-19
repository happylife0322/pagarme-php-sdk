<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\GetAutomaticAnticipationResponse;

/**
 * Builder for model GetAutomaticAnticipationResponse
 *
 * @see GetAutomaticAnticipationResponse
 */
class GetAutomaticAnticipationResponseBuilder
{
    /**
     * @var GetAutomaticAnticipationResponse
     */
    private $instance;

    private function __construct(GetAutomaticAnticipationResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new get automatic anticipation response Builder object.
     */
    public static function init(): self
    {
        return new self(new GetAutomaticAnticipationResponse());
    }

    /**
     * Sets enabled field.
     */
    public function enabled(?bool $value): self
    {
        $this->instance->setEnabled($value);
        return $this;
    }

    /**
     * Unsets enabled field.
     */
    public function unsetEnabled(): self
    {
        $this->instance->unsetEnabled();
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
     * Sets volume percentage field.
     */
    public function volumePercentage(?int $value): self
    {
        $this->instance->setVolumePercentage($value);
        return $this;
    }

    /**
     * Unsets volume percentage field.
     */
    public function unsetVolumePercentage(): self
    {
        $this->instance->unsetVolumePercentage();
        return $this;
    }

    /**
     * Sets delay field.
     */
    public function delay(?int $value): self
    {
        $this->instance->setDelay($value);
        return $this;
    }

    /**
     * Unsets delay field.
     */
    public function unsetDelay(): self
    {
        $this->instance->unsetDelay();
        return $this;
    }

    /**
     * Sets days field.
     */
    public function days(?array $value): self
    {
        $this->instance->setDays($value);
        return $this;
    }

    /**
     * Unsets days field.
     */
    public function unsetDays(): self
    {
        $this->instance->unsetDays();
        return $this;
    }

    /**
     * Initializes a new get automatic anticipation response object.
     */
    public function build(): GetAutomaticAnticipationResponse
    {
        return CoreHelper::clone($this->instance);
    }
}