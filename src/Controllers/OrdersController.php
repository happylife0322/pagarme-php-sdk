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
use PagarmeApiSDKLib\Models\CreateOrderItemRequest;
use PagarmeApiSDKLib\Models\CreateOrderRequest;
use PagarmeApiSDKLib\Models\GetOrderItemResponse;
use PagarmeApiSDKLib\Models\GetOrderResponse;
use PagarmeApiSDKLib\Models\ListOrderResponse;
use PagarmeApiSDKLib\Models\UpdateMetadataRequest;
use PagarmeApiSDKLib\Models\UpdateOrderItemRequest;
use PagarmeApiSDKLib\Models\UpdateOrderStatusRequest;
use PagarmeApiSDKLib\Utils\DateTimeHelper;

class OrdersController extends BaseController
{
    /**
     * Gets all orders
     *
     * @param int|null $page Page number
     * @param int|null $size Page size
     * @param string|null $code Filter for order's code
     * @param string|null $status Filter for order's status
     * @param \DateTime|null $createdSince Filter for order's creation date start range
     * @param \DateTime|null $createdUntil Filter for order's creation date end range
     * @param string|null $customerId Filter for order's customer id
     *
     * @return ListOrderResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getOrders(
        ?int $page = null,
        ?int $size = null,
        ?string $code = null,
        ?string $status = null,
        ?\DateTime $createdSince = null,
        ?\DateTime $createdUntil = null,
        ?string $customerId = null
    ): ListOrderResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/orders')
            ->auth('global')
            ->parameters(
                QueryParam::init('page', $page),
                QueryParam::init('size', $size),
                QueryParam::init('code', $code),
                QueryParam::init('status', $status),
                QueryParam::init('created_since', $createdSince)
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime']),
                QueryParam::init('created_until', $createdUntil)
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime']),
                QueryParam::init('customer_id', $customerId)
            );

        $_resHandler = $this->responseHandler()->type(ListOrderResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param string $orderId Order Id
     * @param string $itemId Item Id
     *
     * @return GetOrderItemResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getOrderItem(string $orderId, string $itemId): GetOrderItemResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/orders/{orderId}/items/{itemId}')
            ->auth('global')
            ->parameters(TemplateParam::init('orderId', $orderId), TemplateParam::init('itemId', $itemId));

        $_resHandler = $this->responseHandler()->type(GetOrderItemResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Gets an order
     *
     * @param string $orderId Order id
     *
     * @return GetOrderResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getOrder(string $orderId): GetOrderResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/orders/{order_id}')
            ->auth('global')
            ->parameters(TemplateParam::init('order_id', $orderId));

        $_resHandler = $this->responseHandler()->type(GetOrderResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param string $id Order Id
     * @param UpdateOrderStatusRequest $request Update Order Model
     * @param string|null $idempotencyKey
     *
     * @return GetOrderResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function closeOrder(
        string $id,
        UpdateOrderStatusRequest $request,
        ?string $idempotencyKey = null
    ): GetOrderResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PATCH, '/orders/{id}/closed')
            ->auth('global')
            ->parameters(
                TemplateParam::init('id', $id),
                BodyParam::init($request),
                HeaderParam::init('idempotency-key', $idempotencyKey)
            );

        $_resHandler = $this->responseHandler()->type(GetOrderResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Creates a new Order
     *
     * @param CreateOrderRequest $body Request for creating an order
     * @param string|null $idempotencyKey
     *
     * @return GetOrderResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createOrder(CreateOrderRequest $body, ?string $idempotencyKey = null): GetOrderResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/orders')
            ->auth('global')
            ->parameters(BodyParam::init($body), HeaderParam::init('idempotency-key', $idempotencyKey));

        $_resHandler = $this->responseHandler()->type(GetOrderResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param string $orderId Order Id
     * @param string $itemId Item Id
     * @param UpdateOrderItemRequest $request Item Model
     * @param string|null $idempotencyKey
     *
     * @return GetOrderItemResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateOrderItem(
        string $orderId,
        string $itemId,
        UpdateOrderItemRequest $request,
        ?string $idempotencyKey = null
    ): GetOrderItemResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/orders/{orderId}/items/{itemId}')
            ->auth('global')
            ->parameters(
                TemplateParam::init('orderId', $orderId),
                TemplateParam::init('itemId', $itemId),
                BodyParam::init($request),
                HeaderParam::init('idempotency-key', $idempotencyKey)
            );

        $_resHandler = $this->responseHandler()->type(GetOrderItemResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param string $orderId Order Id
     * @param string|null $idempotencyKey
     *
     * @return GetOrderResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deleteAllOrderItems(string $orderId, ?string $idempotencyKey = null): GetOrderResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/orders/{orderId}/items')
            ->auth('global')
            ->parameters(
                TemplateParam::init('orderId', $orderId),
                HeaderParam::init('idempotency-key', $idempotencyKey)
            );

        $_resHandler = $this->responseHandler()->type(GetOrderResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Updates the metadata from an order
     *
     * @param string $orderId The order id
     * @param UpdateMetadataRequest $request Request for updating the order metadata
     * @param string|null $idempotencyKey
     *
     * @return GetOrderResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateOrderMetadata(
        string $orderId,
        UpdateMetadataRequest $request,
        ?string $idempotencyKey = null
    ): GetOrderResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PATCH, '/Orders/{order_id}/metadata')
            ->auth('global')
            ->parameters(
                TemplateParam::init('order_id', $orderId),
                BodyParam::init($request),
                HeaderParam::init('idempotency-key', $idempotencyKey)
            );

        $_resHandler = $this->responseHandler()->type(GetOrderResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param string $orderId Order Id
     * @param string $itemId Item Id
     * @param string|null $idempotencyKey
     *
     * @return GetOrderItemResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deleteOrderItem(
        string $orderId,
        string $itemId,
        ?string $idempotencyKey = null
    ): GetOrderItemResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/orders/{orderId}/items/{itemId}')
            ->auth('global')
            ->parameters(
                TemplateParam::init('orderId', $orderId),
                TemplateParam::init('itemId', $itemId),
                HeaderParam::init('idempotency-key', $idempotencyKey)
            );

        $_resHandler = $this->responseHandler()->type(GetOrderItemResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param string $orderId Order Id
     * @param CreateOrderItemRequest $request Order Item Model
     * @param string|null $idempotencyKey
     *
     * @return GetOrderItemResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createOrderItem(
        string $orderId,
        CreateOrderItemRequest $request,
        ?string $idempotencyKey = null
    ): GetOrderItemResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/orders/{orderId}/items')
            ->auth('global')
            ->parameters(
                TemplateParam::init('orderId', $orderId),
                BodyParam::init($request),
                HeaderParam::init('idempotency-key', $idempotencyKey)
            );

        $_resHandler = $this->responseHandler()->type(GetOrderItemResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
