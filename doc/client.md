
# Client Class Documentation

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| `serviceRefererName` | `string` |  |
| `timeout` | `int` | Timeout for API calls in seconds.<br>*Default*: `0` |
| `enableRetries` | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| `numberOfRetries` | `int` | The number of retries to make.<br>*Default*: `0` |
| `retryInterval` | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| `backOffFactor` | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| `maximumRetryWaitTime` | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| `retryOnTimeout` | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| `httpStatusCodesToRetry` | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| `httpMethodsToRetry` | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| `basicAuthUserName` | `string` | The username to use with basic authentication |
| `basicAuthPassword` | `string` | The password to use with basic authentication |

The API client can be initialized as follows:

```php
$client = PagarmeApiSDKClientBuilder::init()
    ->basicAuthUserName('BasicAuthUserName')
    ->basicAuthPassword('BasicAuthPassword')
    ->serviceRefererName('ServiceRefererName')
    ->build();
```

## PagarmeApiSDK Client

The gateway for the SDK. This class acts as a factory for the Controllers and also holds the configuration of the SDK.

## Controllers

| Name | Description |
|  --- | --- |
| getOrdersController() | Gets OrdersController |
| getPlansController() | Gets PlansController |
| getSubscriptionsController() | Gets SubscriptionsController |
| getInvoicesController() | Gets InvoicesController |
| getCustomersController() | Gets CustomersController |
| getRecipientsController() | Gets RecipientsController |
| getChargesController() | Gets ChargesController |
| getTokensController() | Gets TokensController |
| getTransfersController() | Gets TransfersController |
| getTransactionsController() | Gets TransactionsController |
| getPayablesController() | Gets PayablesController |
| getBalanceOperationsController() | Gets BalanceOperationsController |

