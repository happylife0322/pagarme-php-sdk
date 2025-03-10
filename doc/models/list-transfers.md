
# List Transfers

## Structure

`ListTransfers`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`GetTransfer[]`](../../doc/models/get-transfer.md) | Required | The Increments response | getData(): array | setData(array data): void |
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
      "created_at": "2016-03-13T12:52:32.123Z",
      "updated_at": "2016-03-13T12:52:32.123Z",
      "metadata": {
        "key0": "metadata4",
        "key1": "metadata3"
      },
      "fee": 79,
      "funding_date": "2016-03-13T12:52:32.123Z",
      "funding_estimated_date": "2016-03-13T12:52:32.123Z",
      "type": "type5",
      "source": {
        "source_id": "source_id5",
        "type": "type1"
      },
      "target": {
        "target_id": "target_id3",
        "type": "type7"
      }
    }
  ],
  "paging": {
    "total": 6,
    "previous": "previous2",
    "next": "next8"
  }
}
```

