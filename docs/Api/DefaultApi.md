# OpenAPI\Client\DefaultApi



All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authAuthTokenPost()**](DefaultApi.md#authAuthTokenPost) | **POST** /auth/auth-token | API KEY Authentification |
| [**documentsArchivePost()**](DefaultApi.md#documentsArchivePost) | **POST** /documents/archive | Archive Document |
| [**documentsDeleteDelete()**](DefaultApi.md#documentsDeleteDelete) | **DELETE** /documents/delete | Delete Document |
| [**documentsDetailsGet()**](DefaultApi.md#documentsDetailsGet) | **GET** /documents/details | Get Document Info |
| [**documentsGet()**](DefaultApi.md#documentsGet) | **GET** /documents | Get Document By Workspace |
| [**documentsMovePost()**](DefaultApi.md#documentsMovePost) | **POST** /documents/move | Move Document |
| [**documentsRestorePost()**](DefaultApi.md#documentsRestorePost) | **POST** /documents/restore | Restore Document |
| [**documentsStreamGet()**](DefaultApi.md#documentsStreamGet) | **GET** /documents/stream | Stream Document Copy |
| [**documentsUpdatePut()**](DefaultApi.md#documentsUpdatePut) | **PUT** /documents/update | Update Document |
| [**documentsUploadPost()**](DefaultApi.md#documentsUploadPost) | **POST** /documents/upload | Upload Document |
| [**foldersContentGet()**](DefaultApi.md#foldersContentGet) | **GET** /folders/content | Get Folder Content |
| [**foldersCreatePost()**](DefaultApi.md#foldersCreatePost) | **POST** /folders/create | Create Folder |
| [**foldersDeleteDelete()**](DefaultApi.md#foldersDeleteDelete) | **DELETE** /folders/delete | Delete Folder |
| [**foldersDetailsGet()**](DefaultApi.md#foldersDetailsGet) | **GET** /folders/details | Get Folder Details |
| [**foldersGet()**](DefaultApi.md#foldersGet) | **GET** /folders | Get Folders |
| [**foldersMovePost()**](DefaultApi.md#foldersMovePost) | **POST** /folders/move | Move Folder |
| [**foldersUpdatePut()**](DefaultApi.md#foldersUpdatePut) | **PUT** /folders/update | Update Folder |
| [**teamsCreatePost()**](DefaultApi.md#teamsCreatePost) | **POST** /teams/create | Create Team |
| [**teamsDashboardGet()**](DefaultApi.md#teamsDashboardGet) | **GET** /teams/dashboard | Get Team Data |
| [**teamsDeleteDelete()**](DefaultApi.md#teamsDeleteDelete) | **DELETE** /teams/delete | Delete Team |
| [**teamsGet()**](DefaultApi.md#teamsGet) | **GET** /teams | Get Account Teams |
| [**teamsInfoGet()**](DefaultApi.md#teamsInfoGet) | **GET** /teams/info | Get Team Details |
| [**teamsLogsGet()**](DefaultApi.md#teamsLogsGet) | **GET** /teams/logs | Get Team logs |
| [**teamsMembersAddPost()**](DefaultApi.md#teamsMembersAddPost) | **POST** /teams/members/add | Add Team Member Copy |
| [**teamsMembersGet()**](DefaultApi.md#teamsMembersGet) | **GET** /teams/members | Get Team Members |
| [**teamsUpdatePut()**](DefaultApi.md#teamsUpdatePut) | **PUT** /teams/update | Update Team Data |
| [**teamsWorkspacesGet()**](DefaultApi.md#teamsWorkspacesGet) | **GET** /teams/workspaces | Get Team workspaces |
| [**workspacesCreatePost()**](DefaultApi.md#workspacesCreatePost) | **POST** /workspaces/create | Create New Workspace |
| [**workspacesDeleteDelete()**](DefaultApi.md#workspacesDeleteDelete) | **DELETE** /workspaces/delete | Delete workspace |
| [**workspacesDetailsGet()**](DefaultApi.md#workspacesDetailsGet) | **GET** /workspaces/details | Get Workspace Details |
| [**workspacesDriveGet()**](DefaultApi.md#workspacesDriveGet) | **GET** /workspaces/drive | Get Account Drive |
| [**workspacesGet()**](DefaultApi.md#workspacesGet) | **GET** /workspaces | Get Workspaces By Team |
| [**workspacesTeamsGet()**](DefaultApi.md#workspacesTeamsGet) | **GET** /workspaces/teams | Get Team Workspaces |
| [**workspacesUpdatePut()**](DefaultApi.md#workspacesUpdatePut) | **PUT** /workspaces/update | Update workspace |


## `authAuthTokenPost()`

```php
authAuthTokenPost($auth_auth_token_post_request): object
```

API KEY Authentification



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auth_auth_token_post_request = {"publicKey":"pk_test_xxx","secretKey":"sk_test_xxx"}; // \OpenAPI\Client\Model\AuthAuthTokenPostRequest

try {
    $result = $apiInstance->authAuthTokenPost($auth_auth_token_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->authAuthTokenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **auth_auth_token_post_request** | [**\OpenAPI\Client\Model\AuthAuthTokenPostRequest**](../Model/AuthAuthTokenPostRequest.md)|  | |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentsArchivePost()`

```php
documentsArchivePost($documents_archive_post_request): object
```

Archive Document



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documents_archive_post_request = {"documentId":"d77cf229-1515-48d8-bb02-387ccc52b707","reason":"Avarus desipio iure. Arbor speciosus alter conor earum antepono. Suffoco vicinus tenax adsuesco quasi astrum denuo ustilo.\nCommodi depulso triumphus tametsi angulus tutis suasoria pectus saepe error. Substantia certe id vilicus verus. Aetas sequi talus viriliter copiose tolero suggero odit.\nAtavus explicabo patior possimus vado aureus conduco templum. Bellicus vos virga pauci trepide conscendo casso voro statua unde. Soluta tunc cado vespillo vivo colo vinco absum triduana."}; // \OpenAPI\Client\Model\DocumentsArchivePostRequest

try {
    $result = $apiInstance->documentsArchivePost($documents_archive_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->documentsArchivePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **documents_archive_post_request** | [**\OpenAPI\Client\Model\DocumentsArchivePostRequest**](../Model/DocumentsArchivePostRequest.md)|  | |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentsDeleteDelete()`

```php
documentsDeleteDelete($documents_delete_delete_request): object
```

Delete Document



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documents_delete_delete_request = {"id":"2ad9169b-50f7-4f56-84cb-8c38fa821020"}; // \OpenAPI\Client\Model\DocumentsDeleteDeleteRequest

try {
    $result = $apiInstance->documentsDeleteDelete($documents_delete_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->documentsDeleteDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **documents_delete_delete_request** | [**\OpenAPI\Client\Model\DocumentsDeleteDeleteRequest**](../Model/DocumentsDeleteDeleteRequest.md)|  | |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentsDetailsGet()`

```php
documentsDetailsGet($document_id): object
```

Get Document Info



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_id = a3f8e9d2-1a4b-4c7e-9f3a-2b8c6d4e1f0a; // string | 

try {
    $result = $apiInstance->documentsDetailsGet($document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->documentsDetailsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_id** | **string**|  | [optional] |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentsGet()`

```php
documentsGet($workspace_id): object
```

Get Document By Workspace



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 94506d68-6e3b-479f-83d2-5401b779b565; // string | 

try {
    $result = $apiInstance->documentsGet($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->documentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | [optional] |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentsMovePost()`

```php
documentsMovePost($documents_move_post_request): object
```

Move Document



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documents_move_post_request = {"documentId":"1f81517f-ec7b-45cf-bab6-c6b6bc245ddd","folderId":"731a34c8-67b4-4fa4-ae44-594c9124f322","workspaceId":"ad9f8f61-fed8-4f2e-a8d4-2c5e3ff3bcf6"}; // \OpenAPI\Client\Model\DocumentsMovePostRequest

try {
    $result = $apiInstance->documentsMovePost($documents_move_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->documentsMovePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **documents_move_post_request** | [**\OpenAPI\Client\Model\DocumentsMovePostRequest**](../Model/DocumentsMovePostRequest.md)|  | |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentsRestorePost()`

```php
documentsRestorePost($documents_restore_post_request): object
```

Restore Document



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documents_restore_post_request = {"documentId":"a333812e-1359-422d-adf2-76d82bbb3948"}; // \OpenAPI\Client\Model\DocumentsRestorePostRequest

try {
    $result = $apiInstance->documentsRestorePost($documents_restore_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->documentsRestorePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **documents_restore_post_request** | [**\OpenAPI\Client\Model\DocumentsRestorePostRequest**](../Model/DocumentsRestorePostRequest.md)|  | |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentsStreamGet()`

```php
documentsStreamGet($body, $document_id): object
```

Stream Document Copy



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = {"documentId":"1f81517f-ec7b-45cf-bab6-c6b6bc245ddd","folderId":"731a34c8-67b4-4fa4-ae44-594c9124f322","workspaceId":"ad9f8f61-fed8-4f2e-a8d4-2c5e3ff3bcf6"}; // object
$document_id = 731a34c8-67b4-4fa4-ae44-594c9124f322; // string | 

try {
    $result = $apiInstance->documentsStreamGet($body, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->documentsStreamGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **object**|  | |
| **document_id** | **string**|  | [optional] |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentsUpdatePut()`

```php
documentsUpdatePut($documents_update_put_request): object
```

Update Document



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documents_update_put_request = {"id":"c8eec57a-9922-4a7e-87b4-c278adf5210e","name":"coma","description":"Ullus victoria circumvenio taceo cuppedia. Corpus decretum abundans aeternus cinis contigo quidem certe. Coma vilis corrigo claro vobis triumphus.","folderId":"56"}; // \OpenAPI\Client\Model\DocumentsUpdatePutRequest

try {
    $result = $apiInstance->documentsUpdatePut($documents_update_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->documentsUpdatePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **documents_update_put_request** | [**\OpenAPI\Client\Model\DocumentsUpdatePutRequest**](../Model/DocumentsUpdatePutRequest.md)|  | |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentsUploadPost()`

```php
documentsUploadPost($workspace_id, $folder_id, $file1, $file2): object
```

Upload Document



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 731a34c8-67b4-4fa4-ae44-594c9124f322; // string | 
$folder_id = 731a34c8-67b4-4fa4-ae44-594c9124f322; // string | 
$file1 = '/path/to/file.txt'; // \SplFileObject
$file2 = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->documentsUploadPost($workspace_id, $folder_id, $file1, $file2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->documentsUploadPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | [optional] |
| **folder_id** | **string**|  | [optional] |
| **file1** | **\SplFileObject****\SplFileObject**|  | [optional] |
| **file2** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `foldersContentGet()`

```php
foldersContentGet($folder_id): \OpenAPI\Client\Model\FoldersContentGet200Response
```

Get Folder Content



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folder_id = ["7935763f-dac9-4bfe-be30-ff7dc0124f16"]; // string[] | 

try {
    $result = $apiInstance->foldersContentGet($folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->foldersContentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FoldersContentGet200Response**](../Model/FoldersContentGet200Response.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `foldersCreatePost()`

```php
foldersCreatePost($folders_create_post_request): \OpenAPI\Client\Model\FoldersCreatePost201Response
```

Create Folder



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folders_create_post_request = {"workspaceId":"94506d68-6e3b-479f-83d2-5401b779b565","name":"API TEST","description":"Cimentarius agnitio vilis villa. Cedo vere quae thymbra.","parentFolderId":null}; // \OpenAPI\Client\Model\FoldersCreatePostRequest

try {
    $result = $apiInstance->foldersCreatePost($folders_create_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->foldersCreatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folders_create_post_request** | [**\OpenAPI\Client\Model\FoldersCreatePostRequest**](../Model/FoldersCreatePostRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\FoldersCreatePost201Response**](../Model/FoldersCreatePost201Response.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `foldersDeleteDelete()`

```php
foldersDeleteDelete($folders_delete_delete_request): object
```

Delete Folder



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folders_delete_delete_request = {"id":"3dabdd39-0564-474f-a30e-6803d1c6ac80"}; // \OpenAPI\Client\Model\FoldersDeleteDeleteRequest

try {
    $result = $apiInstance->foldersDeleteDelete($folders_delete_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->foldersDeleteDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folders_delete_delete_request** | [**\OpenAPI\Client\Model\FoldersDeleteDeleteRequest**](../Model/FoldersDeleteDeleteRequest.md)|  | |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `foldersDetailsGet()`

```php
foldersDetailsGet($folder_id): \OpenAPI\Client\Model\FoldersDetailsGet200Response
```

Get Folder Details



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folder_id = 7935763f-dac9-4bfe-be30-ff7dc0124f16; // string | 

try {
    $result = $apiInstance->foldersDetailsGet($folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->foldersDetailsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folder_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FoldersDetailsGet200Response**](../Model/FoldersDetailsGet200Response.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `foldersGet()`

```php
foldersGet($workspace_id): \OpenAPI\Client\Model\FoldersGet200Response
```

Get Folders



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 94506d68-6e3b-479f-83d2-5401b779b565; // string | 

try {
    $result = $apiInstance->foldersGet($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->foldersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\FoldersGet200Response**](../Model/FoldersGet200Response.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `foldersMovePost()`

```php
foldersMovePost($folders_delete_delete_request): object
```

Move Folder



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folders_delete_delete_request = {id=3dabdd39-0564-474f-a30e-6803d1c6ac80}; // \OpenAPI\Client\Model\FoldersDeleteDeleteRequest

try {
    $result = $apiInstance->foldersMovePost($folders_delete_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->foldersMovePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folders_delete_delete_request** | [**\OpenAPI\Client\Model\FoldersDeleteDeleteRequest**](../Model/FoldersDeleteDeleteRequest.md)|  | |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `foldersUpdatePut()`

```php
foldersUpdatePut($folders_update_put_request): object
```

Update Folder



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$folders_update_put_request = {"id":"046df82d-97a5-47ec-8f52-4e717066b1ed","name":"delectatio","description":"Tutis patria constans deficio. Villa soleo sponte sollers toties crudelis tempore capillus concido. Conventus aequus autem vester."}; // \OpenAPI\Client\Model\FoldersUpdatePutRequest

try {
    $result = $apiInstance->foldersUpdatePut($folders_update_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->foldersUpdatePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **folders_update_put_request** | [**\OpenAPI\Client\Model\FoldersUpdatePutRequest**](../Model/FoldersUpdatePutRequest.md)|  | |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `teamsCreatePost()`

```php
teamsCreatePost($teams_create_post_request): object
```

Create Team



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$teams_create_post_request = new \OpenAPI\Client\Model\TeamsCreatePostRequest(); // \OpenAPI\Client\Model\TeamsCreatePostRequest

try {
    $result = $apiInstance->teamsCreatePost($teams_create_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->teamsCreatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **teams_create_post_request** | [**\OpenAPI\Client\Model\TeamsCreatePostRequest**](../Model/TeamsCreatePostRequest.md)|  | |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `teamsDashboardGet()`

```php
teamsDashboardGet(): object
```

Get Team Data



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->teamsDashboardGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->teamsDashboardGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `teamsDeleteDelete()`

```php
teamsDeleteDelete($teams_delete_delete_request): object
```

Delete Team



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$teams_delete_delete_request = new \OpenAPI\Client\Model\TeamsDeleteDeleteRequest(); // \OpenAPI\Client\Model\TeamsDeleteDeleteRequest

try {
    $result = $apiInstance->teamsDeleteDelete($teams_delete_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->teamsDeleteDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **teams_delete_delete_request** | [**\OpenAPI\Client\Model\TeamsDeleteDeleteRequest**](../Model/TeamsDeleteDeleteRequest.md)|  | |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `teamsGet()`

```php
teamsGet(): object
```

Get Account Teams



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->teamsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->teamsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `teamsInfoGet()`

```php
teamsInfoGet($body, $team_id): object
```

Get Team Details



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object
$team_id = ["a3f8e9d2-1a4b-4c7e-9f3a-2b8c6d4e1f0a"]; // string[] | 

try {
    $result = $apiInstance->teamsInfoGet($body, $team_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->teamsInfoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **object**|  | |
| **team_id** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `teamsLogsGet()`

```php
teamsLogsGet($team_id, $page, $limit): object
```

Get Team logs



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_id = ["a3f8e9d2-1a4b-4c7e-9f3a-2b8c6d4e1f0a"]; // string[] | team Id
$page = 1; // string | 
$limit = 50; // string | 

try {
    $result = $apiInstance->teamsLogsGet($team_id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->teamsLogsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_id** | [**string[]**](../Model/string.md)| team Id | [optional] |
| **page** | **string**|  | [optional] |
| **limit** | **string**|  | [optional] |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `teamsMembersAddPost()`

```php
teamsMembersAddPost($teams_members_add_post_request): object
```

Add Team Member Copy



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$teams_members_add_post_request = new \OpenAPI\Client\Model\TeamsMembersAddPostRequest(); // \OpenAPI\Client\Model\TeamsMembersAddPostRequest

try {
    $result = $apiInstance->teamsMembersAddPost($teams_members_add_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->teamsMembersAddPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **teams_members_add_post_request** | [**\OpenAPI\Client\Model\TeamsMembersAddPostRequest**](../Model/TeamsMembersAddPostRequest.md)|  | |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `teamsMembersGet()`

```php
teamsMembersGet($team_id, $page, $limit): object
```

Get Team Members



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_id = 1; // string | 
$page = 1; // float | 
$limit = 10; // float | 

try {
    $result = $apiInstance->teamsMembersGet($team_id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->teamsMembersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_id** | **string**|  | [optional] |
| **page** | **float**|  | [optional] |
| **limit** | **float**|  | [optional] |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `teamsUpdatePut()`

```php
teamsUpdatePut($teams_update_put_request): object
```

Update Team Data



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$teams_update_put_request = new \OpenAPI\Client\Model\TeamsUpdatePutRequest(); // \OpenAPI\Client\Model\TeamsUpdatePutRequest

try {
    $result = $apiInstance->teamsUpdatePut($teams_update_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->teamsUpdatePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **teams_update_put_request** | [**\OpenAPI\Client\Model\TeamsUpdatePutRequest**](../Model/TeamsUpdatePutRequest.md)|  | |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `teamsWorkspacesGet()`

```php
teamsWorkspacesGet($team_id): object
```

Get Team workspaces



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_id = 64eefb76-8b3a-4f7d-92c0-7f76370d0ec0; // string | team Id

try {
    $result = $apiInstance->teamsWorkspacesGet($team_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->teamsWorkspacesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_id** | **string**| team Id | [optional] |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `workspacesCreatePost()`

```php
workspacesCreatePost($workspaces_create_post_request): \OpenAPI\Client\Model\WorkspacesCreatePost201Response
```

Create New Workspace



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspaces_create_post_request = {"name":"SDK","description":"Abscido venia tepidus vilis ullam uterque terra depereo.","teamId":"0f9dfdec-7cce-4ed3-b7d5-672d33b18e8e"}; // \OpenAPI\Client\Model\WorkspacesCreatePostRequest

try {
    $result = $apiInstance->workspacesCreatePost($workspaces_create_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->workspacesCreatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspaces_create_post_request** | [**\OpenAPI\Client\Model\WorkspacesCreatePostRequest**](../Model/WorkspacesCreatePostRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WorkspacesCreatePost201Response**](../Model/WorkspacesCreatePost201Response.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `workspacesDeleteDelete()`

```php
workspacesDeleteDelete($workspaces_delete_delete_request): object
```

Delete workspace



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspaces_delete_delete_request = {"workspace_id":"e87824d8-fab0-44a1-b678-5630c961cf54"}; // \OpenAPI\Client\Model\WorkspacesDeleteDeleteRequest

try {
    $result = $apiInstance->workspacesDeleteDelete($workspaces_delete_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->workspacesDeleteDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspaces_delete_delete_request** | [**\OpenAPI\Client\Model\WorkspacesDeleteDeleteRequest**](../Model/WorkspacesDeleteDeleteRequest.md)|  | |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `workspacesDetailsGet()`

```php
workspacesDetailsGet($workspace_id): \OpenAPI\Client\Model\WorkspacesDetailsGet200Response
```

Get Workspace Details



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 94506d68-6e3b-479f-83d2-5401b779b565; // string | 

try {
    $result = $apiInstance->workspacesDetailsGet($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->workspacesDetailsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WorkspacesDetailsGet200Response**](../Model/WorkspacesDetailsGet200Response.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `workspacesDriveGet()`

```php
workspacesDriveGet(): object
```

Get Account Drive



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->workspacesDriveGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->workspacesDriveGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `workspacesGet()`

```php
workspacesGet($team_id): object
```

Get Workspaces By Team



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_id = 64eefb76-8b3a-4f7d-92c0-7f76370d0ec0; // string | team Id

try {
    $result = $apiInstance->workspacesGet($team_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->workspacesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_id** | **string**| team Id | [optional] |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `workspacesTeamsGet()`

```php
workspacesTeamsGet($team_id): \OpenAPI\Client\Model\WorkspacesTeamsGet200Response
```

Get Team Workspaces



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_id = 0f9dfdec-7cce-4ed3-b7d5-672d33b18e8e; // string | 

try {
    $result = $apiInstance->workspacesTeamsGet($team_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->workspacesTeamsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WorkspacesTeamsGet200Response**](../Model/WorkspacesTeamsGet200Response.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `workspacesUpdatePut()`

```php
workspacesUpdatePut($workspaces_update_put_request): \OpenAPI\Client\Model\WorkspacesUpdatePut200Response
```

Update workspace



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspaces_update_put_request = {"id":"7c291030-5be4-4d1e-a33e-3d7c5a2519f0","description":"Derideo usus summopere comis adflicto temptatio consectetur. Consequatur deporto terga bene aedificium peccatus vespillo. Esse angelus thesis ara abduco varius agnosco clamo numquam alter. Ubi caritas distinctio tersus facere adulatio vesper. Contego claro vociferor error adulescens nobis eius. Suscipit capillus testimonium. Sunt validus aestivus.","status":"active"}; // \OpenAPI\Client\Model\WorkspacesUpdatePutRequest

try {
    $result = $apiInstance->workspacesUpdatePut($workspaces_update_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->workspacesUpdatePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspaces_update_put_request** | [**\OpenAPI\Client\Model\WorkspacesUpdatePutRequest**](../Model/WorkspacesUpdatePutRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WorkspacesUpdatePut200Response**](../Model/WorkspacesUpdatePut200Response.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
