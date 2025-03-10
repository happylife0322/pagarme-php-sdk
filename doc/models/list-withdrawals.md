
# List Withdrawals

## Structure

`ListWithdrawals`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`GetWithdrawResponse[]`](../../doc/models/get-withdraw-response.md) | Required | The Increments response | getData(): array | setData(array data): void |
| `paging` | [`PagingResponse`](../../doc/models/paging-response.md) | Required | Paging object | getPaging(): PagingResponse | setPaging(PagingResponse paging): void |

## Example (as JSON)

```json
{
  "data": [
    {
      "id": "id5",
      "gateway_id": "gateway_id5",
      "amount": 121,
      "status": "status7",
      "created_at": "2016-03-13T12:52:32.123Z"
    }
  ],
  "paging": {
    "total": 6,
    "previous": "previous2",
    "next": "next8"
  }
}
```

