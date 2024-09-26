# # CheckoutShoppingCartPDFAppRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | set AppShoppingCartPDFRequest if validate&#x3D;false, AppShoppingCartPreviewPDFRequest if validate&#x3D;true | [default to 'AppShoppingCartPreviewPDFRequest']
**productCode** | **int** | The product code for the selected product, e.g. standard letter, maxi letter etc. The product code must be greater than 0 and the product must be available in the third-party application. | [optional]
**imageID** | **int** | The ID of the motif. | [optional]
**voucherLayout** | **string** |  |
**pageFormatId** | **int** | The ID of the print format. All available formats can be identified by request /app/catalog?types&#x3D;PAGE_FORMATS | [optional]
**dpi** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
