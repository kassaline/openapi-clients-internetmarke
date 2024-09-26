# # AppShoppingCartPosition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**productCode** | **int** | The product code for the selected product, e.g. standard letter, maxi letter etc. The product code can be derived from ProdWS integration or directly taken from the downloadable product price lists (PPLs). The product code must be greater than 0 and the product must be available in the third-party application. |
**imageID** | **int** | The id of the motif to be printed. | [optional]
**address** | [**\OpenAPI\Client\Internetmarke\Model\AddressBinding**](AddressBinding.md) |  | [optional]
**additionalInfo** | **string** | Additional information on the order item. | [optional]
**voucherLayout** | **string** |  |
**cashOnDelivery** | [**\OpenAPI\Client\Internetmarke\Model\CashOnDelivery**](CashOnDelivery.md) |  | [optional]
**positionType** | **string** |  | [default to 'AppShoppingCartPosition']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
