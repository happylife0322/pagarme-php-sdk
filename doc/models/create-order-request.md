
# Create Order Request

Request for creating an order

## Structure

`CreateOrderRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `items` | [`CreateOrderItemRequest[]`](../../doc/models/create-order-item-request.md) | Required | Items | getItems(): array | setItems(array items): void |
| `customer` | [`CreateCustomerRequest`](../../doc/models/create-customer-request.md) | Required | Customer | getCustomer(): CreateCustomerRequest | setCustomer(CreateCustomerRequest customer): void |
| `payments` | [`CreatePaymentRequest[]`](../../doc/models/create-payment-request.md) | Required | Payment data | getPayments(): array | setPayments(array payments): void |
| `code` | `string` | Required | The order code | getCode(): string | setCode(string code): void |
| `customerId` | `?string` | Optional | The customer id | getCustomerId(): ?string | setCustomerId(?string customerId): void |
| `shipping` | [`?CreateShippingRequest`](../../doc/models/create-shipping-request.md) | Optional | Shipping data | getShipping(): ?CreateShippingRequest | setShipping(?CreateShippingRequest shipping): void |
| `metadata` | `?array<string,string>` | Optional | Metadata | getMetadata(): ?array | setMetadata(?array metadata): void |
| `antifraudEnabled` | `?bool` | Optional | Defines whether the order will go through anti-fraud | getAntifraudEnabled(): ?bool | setAntifraudEnabled(?bool antifraudEnabled): void |
| `ip` | `?string` | Optional | Ip address | getIp(): ?string | setIp(?string ip): void |
| `sessionId` | `?string` | Optional | Session id | getSessionId(): ?string | setSessionId(?string sessionId): void |
| `location` | [`?CreateLocationRequest`](../../doc/models/create-location-request.md) | Optional | Request's location | getLocation(): ?CreateLocationRequest | setLocation(?CreateLocationRequest location): void |
| `device` | [`?CreateDeviceRequest`](../../doc/models/create-device-request.md) | Optional | Device's informations | getDevice(): ?CreateDeviceRequest | setDevice(?CreateDeviceRequest device): void |
| `closed` | `bool` | Required | **Default**: `true` | getClosed(): bool | setClosed(bool closed): void |
| `currency` | `?string` | Optional | Currency | getCurrency(): ?string | setCurrency(?string currency): void |
| `antifraud` | [`?CreateAntifraudRequest`](../../doc/models/create-antifraud-request.md) | Optional | - | getAntifraud(): ?CreateAntifraudRequest | setAntifraud(?CreateAntifraudRequest antifraud): void |
| `submerchant` | [`?CreateSubMerchantRequest`](../../doc/models/create-sub-merchant-request.md) | Optional | SubMerchant | getSubmerchant(): ?CreateSubMerchantRequest | setSubmerchant(?CreateSubMerchantRequest submerchant): void |

## Example (as JSON)

```json
{
  "items": [
    {
      "amount": 13,
      "description": "description7",
      "quantity": 127,
      "category": "category5",
      "code": "code5"
    }
  ],
  "customer": {
    "name": "{\n    \"name\": \"Tony Stark\"\n}",
    "email": "email6",
    "document": "document6",
    "type": "type0",
    "address": {
      "street": "street6",
      "number": "number4",
      "zip_code": "zip_code0",
      "neighborhood": "neighborhood2",
      "city": "city6",
      "state": "state2",
      "country": "country0",
      "complement": "complement2",
      "metadata": {
        "key0": "metadata3"
      },
      "line_1": "line_10",
      "line_2": "line_24"
    },
    "metadata": {
      "key0": "metadata3"
    },
    "phones": {
      "home_phone": {
        "country_code": "country_code2",
        "number": "number0",
        "area_code": "area_code2"
      },
      "mobile_phone": {
        "country_code": "country_code8",
        "number": "number4",
        "area_code": "area_code8"
      }
    },
    "code": "code8",
    "gender": "gender6",
    "document_type": "document_type8"
  },
  "payments": [
    {
      "payment_method": "payment_method4",
      "credit_card": {
        "installments": 176,
        "statement_descriptor": "statement_descriptor4",
        "card": {
          "number": "number4",
          "holder_name": "holder_name4",
          "exp_month": 186,
          "exp_year": 110,
          "cvv": "cvv6"
        },
        "card_id": "card_id0",
        "card_token": "card_token6"
      },
      "debit_card": {
        "statement_descriptor": "statement_descriptor0",
        "card": {
          "number": "number8",
          "holder_name": "holder_name0",
          "exp_month": 112,
          "exp_year": 184,
          "cvv": "cvv8"
        },
        "card_id": "card_id4",
        "card_token": "card_token0",
        "recurrence": false
      },
      "boleto": {
        "retries": 102,
        "bank": "bank4",
        "instructions": "instructions6",
        "due_at": "2016-03-13T12:52:32.123Z",
        "billing_address": {
          "street": "street2",
          "number": "number0",
          "zip_code": "zip_code6",
          "neighborhood": "neighborhood8",
          "city": "city8",
          "state": "state2",
          "country": "country6",
          "complement": "complement2",
          "metadata": {
            "key0": "metadata1"
          },
          "line_1": "line_14",
          "line_2": "line_20"
        },
        "billing_address_id": "billing_address_id2",
        "nosso_numero": "nosso_numero6",
        "document_number": "document_number0",
        "statement_descriptor": "statement_descriptor6",
        "interest": {
          "days": 28,
          "type": "type4",
          "amount": 102
        }
      },
      "currency": "currency6",
      "voucher": {
        "statement_descriptor": "statement_descriptor6",
        "card_id": "card_id2",
        "card_token": "card_token4",
        "Card": {
          "number": "number4",
          "holder_name": "holder_name2",
          "exp_month": 74,
          "exp_year": 114,
          "cvv": "cvv4"
        },
        "recurrency_cycle": "recurrency_cycle0"
      }
    }
  ],
  "code": "code8",
  "closed": true,
  "customer_id": "customer_id8",
  "shipping": {
    "amount": 52,
    "description": "description6",
    "recipient_name": "recipient_name2",
    "recipient_phone": "recipient_phone6",
    "address_id": "address_id6",
    "address": {
      "street": "street0",
      "number": "number8",
      "zip_code": "zip_code4",
      "neighborhood": "neighborhood6",
      "city": "city0",
      "state": "state6",
      "country": "country4",
      "complement": "complement6",
      "metadata": {
        "key0": "metadata7"
      },
      "line_1": "line_14",
      "line_2": "line_28"
    },
    "max_delivery_date": "2016-03-13T12:52:32.123Z",
    "estimated_delivery_date": "2016-03-13T12:52:32.123Z",
    "type": "type6"
  },
  "metadata": {
    "key0": "metadata3",
    "key1": "metadata4",
    "key2": "metadata5"
  },
  "antifraud_enabled": false,
  "ip": "ip4"
}
```

