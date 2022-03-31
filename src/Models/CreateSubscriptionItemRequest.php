<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models;

use stdClass;

/**
 * Request for creating a new subscription item
 */
class CreateSubscriptionItemRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $description;

    /**
     * @var CreatePricingSchemeRequest
     */
    private $pricingScheme;

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $planItemId;

    /**
     * @var CreateDiscountRequest[]
     */
    private $discounts;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int|null
     */
    private $cycles;

    /**
     * @var int|null
     */
    private $quantity;

    /**
     * @var int|null
     */
    private $minimumPrice;

    /**
     * @param string $description
     * @param CreatePricingSchemeRequest $pricingScheme
     * @param string $id
     * @param string $planItemId
     * @param CreateDiscountRequest[] $discounts
     * @param string $name
     */
    public function __construct(
        string $description,
        CreatePricingSchemeRequest $pricingScheme,
        string $id,
        string $planItemId,
        array $discounts,
        string $name
    ) {
        $this->description = $description;
        $this->pricingScheme = $pricingScheme;
        $this->id = $id;
        $this->planItemId = $planItemId;
        $this->discounts = $discounts;
        $this->name = $name;
    }

    /**
     * Returns Description.
     * Item description
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * Item description
     *
     * @required
     * @maps description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Pricing Scheme.
     * Pricing scheme
     */
    public function getPricingScheme(): CreatePricingSchemeRequest
    {
        return $this->pricingScheme;
    }

    /**
     * Sets Pricing Scheme.
     * Pricing scheme
     *
     * @required
     * @maps pricing_scheme
     */
    public function setPricingScheme(CreatePricingSchemeRequest $pricingScheme): void
    {
        $this->pricingScheme = $pricingScheme;
    }

    /**
     * Returns Id.
     * Item id
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Item id
     *
     * @required
     * @maps id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Plan Item Id.
     * Plan item id
     */
    public function getPlanItemId(): string
    {
        return $this->planItemId;
    }

    /**
     * Sets Plan Item Id.
     * Plan item id
     *
     * @required
     * @maps plan_item_id
     */
    public function setPlanItemId(string $planItemId): void
    {
        $this->planItemId = $planItemId;
    }

    /**
     * Returns Discounts.
     * Discounts for the item
     *
     * @return CreateDiscountRequest[]
     */
    public function getDiscounts(): array
    {
        return $this->discounts;
    }

    /**
     * Sets Discounts.
     * Discounts for the item
     *
     * @required
     * @maps discounts
     *
     * @param CreateDiscountRequest[] $discounts
     */
    public function setDiscounts(array $discounts): void
    {
        $this->discounts = $discounts;
    }

    /**
     * Returns Name.
     * Item name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * Item name
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Cycles.
     * Number of cycles which the item will be charged
     */
    public function getCycles(): ?int
    {
        return $this->cycles;
    }

    /**
     * Sets Cycles.
     * Number of cycles which the item will be charged
     *
     * @maps cycles
     */
    public function setCycles(?int $cycles): void
    {
        $this->cycles = $cycles;
    }

    /**
     * Returns Quantity.
     * Quantity of items
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * Sets Quantity.
     * Quantity of items
     *
     * @maps quantity
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns Minimum Price.
     * Minimum price
     */
    public function getMinimumPrice(): ?int
    {
        return $this->minimumPrice;
    }

    /**
     * Sets Minimum Price.
     * Minimum price
     *
     * @maps minimum_price
     */
    public function setMinimumPrice(?int $minimumPrice): void
    {
        $this->minimumPrice = $minimumPrice;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['description']       = $this->description;
        $json['pricing_scheme']    = $this->pricingScheme;
        $json['id']                = $this->id;
        $json['plan_item_id']      = $this->planItemId;
        $json['discounts']         = $this->discounts;
        $json['name']              = $this->name;
        if (isset($this->cycles)) {
            $json['cycles']        = $this->cycles;
        }
        if (isset($this->quantity)) {
            $json['quantity']      = $this->quantity;
        }
        if (isset($this->minimumPrice)) {
            $json['minimum_price'] = $this->minimumPrice;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
