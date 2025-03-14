# Orders

```php
$ordersController = $client->getOrdersController();
```

## Class Name

`OrdersController`

## Methods

* [Get Orders](../../doc/controllers/orders.md#get-orders)
* [Get Order Item](../../doc/controllers/orders.md#get-order-item)
* [Get Order](../../doc/controllers/orders.md#get-order)
* [Close Order](../../doc/controllers/orders.md#close-order)
* [Create Order](../../doc/controllers/orders.md#create-order)
* [Update Order Item](../../doc/controllers/orders.md#update-order-item)
* [Delete All Order Items](../../doc/controllers/orders.md#delete-all-order-items)
* [Update Order Metadata](../../doc/controllers/orders.md#update-order-metadata)
* [Delete Order Item](../../doc/controllers/orders.md#delete-order-item)
* [Create Order Item](../../doc/controllers/orders.md#create-order-item)


# Get Orders

Gets all orders

```php
function getOrders(
    ?int $page = null,
    ?int $size = null,
    ?string $code = null,
    ?string $status = null,
    ?\DateTime $createdSince = null,
    ?\DateTime $createdUntil = null,
    ?string $customerId = null
): ListOrderResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `page` | `?int` | Query, Optional | Page number |
| `size` | `?int` | Query, Optional | Page size |
| `code` | `?string` | Query, Optional | Filter for order's code |
| `status` | `?string` | Query, Optional | Filter for order's status |
| `createdSince` | `?DateTime` | Query, Optional | Filter for order's creation date start range |
| `createdUntil` | `?DateTime` | Query, Optional | Filter for order's creation date end range |
| `customerId` | `?string` | Query, Optional | Filter for order's customer id |

## Response Type

[`ListOrderResponse`](../../doc/models/list-order-response.md)

## Example Usage

```php
$result = $ordersController->getOrders();
```


# Get Order Item

```php
function getOrderItem(string $orderId, string $itemId): GetOrderItemResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orderId` | `string` | Template, Required | Order Id |
| `itemId` | `string` | Template, Required | Item Id |

## Response Type

[`GetOrderItemResponse`](../../doc/models/get-order-item-response.md)

## Example Usage

```php
$orderId = 'orderId2';

$itemId = 'itemId8';

$result = $ordersController->getOrderItem(
    $orderId,
    $itemId
);
```


# Get Order

Gets an order

```php
function getOrder(string $orderId): GetOrderResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orderId` | `string` | Template, Required | Order id |

## Response Type

[`GetOrderResponse`](../../doc/models/get-order-response.md)

## Example Usage

```php
$orderId = 'order_id6';

$result = $ordersController->getOrder($orderId);
```


# Close Order

```php
function closeOrder(
    string $id,
    UpdateOrderStatusRequest $request,
    ?string $idempotencyKey = null
): GetOrderResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Order Id |
| `request` | [`UpdateOrderStatusRequest`](../../doc/models/update-order-status-request.md) | Body, Required | Update Order Model |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetOrderResponse`](../../doc/models/get-order-response.md)

## Example Usage

```php
$id = 'id0';

$request = UpdateOrderStatusRequestBuilder::init(
    'status8'
)->build();

$result = $ordersController->closeOrder(
    $id,
    $request
);
```


# Create Order

Creates a new Order

```php
function createOrder(CreateOrderRequest $body, ?string $idempotencyKey = null): GetOrderResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CreateOrderRequest`](../../doc/models/create-order-request.md) | Body, Required | Request for creating an order |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetOrderResponse`](../../doc/models/get-order-response.md)

## Example Usage

```php
$body = CreateOrderRequestBuilder::init(
    [
        CreateOrderItemRequestBuilder::init(
            101,
            'description3',
            215,
            'category1'
        )->build()
    ],
    CreateCustomerRequestBuilder::init(
        '{
    "name": "Tony Stark"
}',
        'email2',
        'document2',
        'type6',
        CreateAddressRequestBuilder::init(
            'street0',
            'number8',
            'zip_code4',
            'neighborhood6',
            'city0',
            'state6',
            'country4',
            'complement6',
            'line_16',
            'line_28'
        )->build(),
        [
            'key0' => 'metadata9',
            'key1' => 'metadata0'
        ],
        CreatePhonesRequestBuilder::init()->build(),
        'code2'
    )->build(),
    [
        CreatePaymentRequestBuilder::init(
            'payment_method0'
        )->build()
    ],
    'code4',
    true
)->build();

$result = $ordersController->createOrder($body);
```


# Update Order Item

```php
function updateOrderItem(
    string $orderId,
    string $itemId,
    UpdateOrderItemRequest $request,
    ?string $idempotencyKey = null
): GetOrderItemResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orderId` | `string` | Template, Required | Order Id |
| `itemId` | `string` | Template, Required | Item Id |
| `request` | [`UpdateOrderItemRequest`](../../doc/models/update-order-item-request.md) | Body, Required | Item Model |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetOrderItemResponse`](../../doc/models/get-order-item-response.md)

## Example Usage

```php
$orderId = 'orderId2';

$itemId = 'itemId8';

$request = UpdateOrderItemRequestBuilder::init(
    242,
    'description6',
    100,
    'category4'
)->build();

$result = $ordersController->updateOrderItem(
    $orderId,
    $itemId,
    $request
);
```


# Delete All Order Items

```php
function deleteAllOrderItems(string $orderId, ?string $idempotencyKey = null): GetOrderResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orderId` | `string` | Template, Required | Order Id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetOrderResponse`](../../doc/models/get-order-response.md)

## Example Usage

```php
$orderId = 'orderId2';

$result = $ordersController->deleteAllOrderItems($orderId);
```


# Update Order Metadata

Updates the metadata from an order

```php
function updateOrderMetadata(
    string $orderId,
    UpdateMetadataRequest $request,
    ?string $idempotencyKey = null
): GetOrderResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orderId` | `string` | Template, Required | The order id |
| `request` | [`UpdateMetadataRequest`](../../doc/models/update-metadata-request.md) | Body, Required | Request for updating the order metadata |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetOrderResponse`](../../doc/models/get-order-response.md)

## Example Usage

```php
$orderId = 'order_id6';

$request = UpdateMetadataRequestBuilder::init(
    [
        'key0' => 'metadata3'
    ]
)->build();

$result = $ordersController->updateOrderMetadata(
    $orderId,
    $request
);
```


# Delete Order Item

```php
function deleteOrderItem(string $orderId, string $itemId, ?string $idempotencyKey = null): GetOrderItemResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orderId` | `string` | Template, Required | Order Id |
| `itemId` | `string` | Template, Required | Item Id |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetOrderItemResponse`](../../doc/models/get-order-item-response.md)

## Example Usage

```php
$orderId = 'orderId2';

$itemId = 'itemId8';

$result = $ordersController->deleteOrderItem(
    $orderId,
    $itemId
);
```


# Create Order Item

```php
function createOrderItem(
    string $orderId,
    CreateOrderItemRequest $request,
    ?string $idempotencyKey = null
): GetOrderItemResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orderId` | `string` | Template, Required | Order Id |
| `request` | [`CreateOrderItemRequest`](../../doc/models/create-order-item-request.md) | Body, Required | Order Item Model |
| `idempotencyKey` | `?string` | Header, Optional | - |

## Response Type

[`GetOrderItemResponse`](../../doc/models/get-order-item-response.md)

## Example Usage

```php
$orderId = 'orderId2';

$request = CreateOrderItemRequestBuilder::init(
    242,
    'description6',
    100,
    'category4'
)->build();

$result = $ordersController->createOrderItem(
    $orderId,
    $request
);
```

