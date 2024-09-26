# # AppShoppingCartPNGRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shopOrderId** | **string** | The order number in the shop. All characters are allowed except &lt; and &amp;. It is optional in case of query parameter finalize is true. In all other cases it is mandatory required. | [optional]
**total** | **int** | Total value of the shopping cart in euro cents. | [optional]
**createManifest** | **bool** | The flag indicating whether a posting receipt should be created. | [optional]
**createShippingList** | **string** | Enum that determines whether a mailing list should be created and if so, whether with or without addresses. | [optional]
**dpi** | **string** |  | [optional]
**optimizePNG** | **bool** | The flag to optimize the PNG (avoid redundant area height). | [optional]
**positions** | [**\OpenAPI\Client\Internetmarke\Model\AppShoppingCartPosition[]**](AppShoppingCartPosition.md) | List of PNG order items. At least one item has to be specified. |
**type** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
