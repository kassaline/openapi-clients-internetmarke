# # Authentication200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accessToken** | **string** | The access token / bearer token | [optional]
**walletBalance** | **int** | money balance in portokasse | [optional]
**infoMessage** | **string** | info message, if any | [optional]
**tokenType** | **string** | Will always contain &#39;BearerToken&#39; | [optional]
**expiresIn** | **int** | remaining token validity in seconds | [optional]
**issuedAt** | **string** | Time when token was issued | [optional]
**externalCustomerId** | **string** | Matches the user requesting the token, used internally | [optional]
**autenticatedUser** | **string** | user requesting the token | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
