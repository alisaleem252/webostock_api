# Webostock API
[Webostock](https://webostock.com/) API to verify Purchase

[Webostock API OFFICIAL DOCUMENTS](https://webostock.com/licenses/v1/documentation/)
## REQUEST URI
```bash
/licenses/v1/
```

## REQUEST METHOD
```bash
GET
```

## PARAMS
```php
PARAM	TYPE	EXAMPLE	REQUIRED
key	string	Order_ID	Yes
item_id	integer	Item_ID	Yes
domain	string	domain.com Yes
```

## EXAMPLE
```php
https://webostock.com/licenses/v1/?key=abc123123&item_id=12345$item_id&domain=webostock.com
```

## RESPONSE
```json
{
   "item_id":"12345",
     "order_id":"abc123123",
     "domain":"webostock.com",
     "status":"active"
}
```
