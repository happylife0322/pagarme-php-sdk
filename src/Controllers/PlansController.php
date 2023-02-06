<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Controllers;

use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use CoreInterfaces\Core\Request\RequestMethod;
use PagarmeApiSDKLib\Exceptions\ApiException;
use PagarmeApiSDKLib\Models\CreatePlanItemRequest;
use PagarmeApiSDKLib\Models\CreatePlanRequest;
use PagarmeApiSDKLib\Models\GetPlanItemResponse;
use PagarmeApiSDKLib\Models\GetPlanResponse;
use PagarmeApiSDKLib\Models\ListPlansResponse;
use PagarmeApiSDKLib\Models\UpdateMetadataRequest;
use PagarmeApiSDKLib\Models\UpdatePlanItemRequest;
use PagarmeApiSDKLib\Models\UpdatePlanRequest;
use PagarmeApiSDKLib\Utils\DateTimeHelper;

class PlansController extends BaseController
{
    /**
     * Gets a plan
     *
     * @param string $planId Plan id
     *
     * @return GetPlanResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getPlan(string $planId): GetPlanResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/plans/{plan_id}')
            ->auth('global')
            ->parameters(TemplateParam::init('plan_id', $planId));

        $_resHandler = $this->responseHandler()->type(GetPlanResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Updates a plan
     *
     * @param string $planId Plan id
     * @param UpdatePlanRequest $request Request for updating a plan
     * @param string|null $idempotencyKey
     *
     * @return GetPlanResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updatePlan(
        string $planId,
        UpdatePlanRequest $request,
        ?string $idempotencyKey = null
    ): GetPlanResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/plans/{plan_id}')
            ->auth('global')
            ->parameters(
                TemplateParam::init('plan_id', $planId),
                BodyParam::init($request),
                HeaderParam::init('idempotency-key', $idempotencyKey)
            );

        $_resHandler = $this->responseHandler()->type(GetPlanResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Updates the metadata from a plan
     *
     * @param string $planId The plan id
     * @param UpdateMetadataRequest $request Request for updating the plan metadata
     * @param string|null $idempotencyKey
     *
     * @return GetPlanResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updatePlanMetadata(
        string $planId,
        UpdateMetadataRequest $request,
        ?string $idempotencyKey = null
    ): GetPlanResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PATCH, '/Plans/{plan_id}/metadata')
            ->auth('global')
            ->parameters(
                TemplateParam::init('plan_id', $planId),
                BodyParam::init($request),
                HeaderParam::init('idempotency-key', $idempotencyKey)
            );

        $_resHandler = $this->responseHandler()->type(GetPlanResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Removes an item from a plan
     *
     * @param string $planId Plan id
     * @param string $planItemId Plan item id
     * @param string|null $idempotencyKey
     *
     * @return GetPlanItemResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deletePlanItem(
        string $planId,
        string $planItemId,
        ?string $idempotencyKey = null
    ): GetPlanItemResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/plans/{plan_id}/items/{plan_item_id}')
            ->auth('global')
            ->parameters(
                TemplateParam::init('plan_id', $planId),
                TemplateParam::init('plan_item_id', $planItemId),
                HeaderParam::init('idempotency-key', $idempotencyKey)
            );

        $_resHandler = $this->responseHandler()->type(GetPlanItemResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Gets all plans
     *
     * @param int|null $page Page number
     * @param int|null $size Page size
     * @param string|null $name Filter for Plan's name
     * @param string|null $status Filter for Plan's status
     * @param string|null $billingType Filter for plan's billing type
     * @param \DateTime|null $createdSince Filter for plan's creation date start range
     * @param \DateTime|null $createdUntil Filter for plan's creation date end range
     *
     * @return ListPlansResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getPlans(
        ?int $page = null,
        ?int $size = null,
        ?string $name = null,
        ?string $status = null,
        ?string $billingType = null,
        ?\DateTime $createdSince = null,
        ?\DateTime $createdUntil = null
    ): ListPlansResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/plans')
            ->auth('global')
            ->parameters(
                QueryParam::init('page', $page),
                QueryParam::init('size', $size),
                QueryParam::init('name', $name),
                QueryParam::init('status', $status),
                QueryParam::init('billing_type', $billingType),
                QueryParam::init('created_since', $createdSince)
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime']),
                QueryParam::init('created_until', $createdUntil)
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime'])
            );

        $_resHandler = $this->responseHandler()->type(ListPlansResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Gets a plan item
     *
     * @param string $planId Plan id
     * @param string $planItemId Plan item id
     *
     * @return GetPlanItemResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getPlanItem(string $planId, string $planItemId): GetPlanItemResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/plans/{plan_id}/items/{plan_item_id}')
            ->auth('global')
            ->parameters(TemplateParam::init('plan_id', $planId), TemplateParam::init('plan_item_id', $planItemId));

        $_resHandler = $this->responseHandler()->type(GetPlanItemResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Deletes a plan
     *
     * @param string $planId Plan id
     * @param string|null $idempotencyKey
     *
     * @return GetPlanResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deletePlan(string $planId, ?string $idempotencyKey = null): GetPlanResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/plans/{plan_id}')
            ->auth('global')
            ->parameters(
                TemplateParam::init('plan_id', $planId),
                HeaderParam::init('idempotency-key', $idempotencyKey)
            );

        $_resHandler = $this->responseHandler()->type(GetPlanResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Updates a plan item
     *
     * @param string $planId Plan id
     * @param string $planItemId Plan item id
     * @param UpdatePlanItemRequest $body Request for updating the plan item
     * @param string|null $idempotencyKey
     *
     * @return GetPlanItemResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updatePlanItem(
        string $planId,
        string $planItemId,
        UpdatePlanItemRequest $body,
        ?string $idempotencyKey = null
    ): GetPlanItemResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/plans/{plan_id}/items/{plan_item_id}')
            ->auth('global')
            ->parameters(
                TemplateParam::init('plan_id', $planId),
                TemplateParam::init('plan_item_id', $planItemId),
                BodyParam::init($body),
                HeaderParam::init('idempotency-key', $idempotencyKey)
            );

        $_resHandler = $this->responseHandler()->type(GetPlanItemResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Adds a new item to a plan
     *
     * @param string $planId Plan id
     * @param CreatePlanItemRequest $request Request for creating a plan item
     * @param string|null $idempotencyKey
     *
     * @return GetPlanItemResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createPlanItem(
        string $planId,
        CreatePlanItemRequest $request,
        ?string $idempotencyKey = null
    ): GetPlanItemResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/plans/{plan_id}/items')
            ->auth('global')
            ->parameters(
                TemplateParam::init('plan_id', $planId),
                BodyParam::init($request),
                HeaderParam::init('idempotency-key', $idempotencyKey)
            );

        $_resHandler = $this->responseHandler()->type(GetPlanItemResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Creates a new plan
     *
     * @param CreatePlanRequest $body Request for creating a plan
     * @param string|null $idempotencyKey
     *
     * @return GetPlanResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createPlan(CreatePlanRequest $body, ?string $idempotencyKey = null): GetPlanResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/plans')
            ->auth('global')
            ->parameters(BodyParam::init($body), HeaderParam::init('idempotency-key', $idempotencyKey));

        $_resHandler = $this->responseHandler()->type(GetPlanResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
