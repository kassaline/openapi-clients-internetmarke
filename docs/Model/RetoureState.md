# # RetoureState

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**retoureTransactionId** | **int** | The transaction number for the refund. | [optional]
**shopRetoureId** | **string** | The id to be assigned by the shop for the refund. |
**totalCount** | **int** | The number of stamps processed with this refund transaction. | [optional]
**countStillOpen** | **int** | The number of stamps not yet processed. ZINS feedback has not arrived here yet. | [optional]
**retourePrice** | **int** | The total value of confirmed refunds. | [optional]
**creationDate** | **string** | The timestamp when the refund was created. |
**serialnumber** | **string** | The serial number of the Safebox (FrankierAccountId). |
**refundedVouchers** | [**\OpenAPI\Client\Internetmarke\Model\Voucher[]**](Voucher.md) | The list of created franking IDs. |
**notRefundedVouchers** | [**\OpenAPI\Client\Internetmarke\Model\Voucher[]**](Voucher.md) | The list of created franking IDs. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
