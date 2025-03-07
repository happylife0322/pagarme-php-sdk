
# Create Subscription Split Request

## Structure

`CreateSubscriptionSplitRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `bool` | Required | Defines if the split is enabled | getEnabled(): bool | setEnabled(bool enabled): void |
| `rules` | [`CreateSplitRequest[]`](../../doc/models/create-split-request.md) | Required | Split | getRules(): array | setRules(array rules): void |

## Example (as JSON)

```json
{
  "enabled": false,
  "rules": [
    {
      "type": "type6",
      "amount": 210,
      "recipient_id": "recipient_id6",
      "options": {
        "liable": false,
        "charge_processing_fee": false,
        "charge_remainder_fee": false
      },
      "split_rule_id": "split_rule_id6"
    }
  ]
}
```

