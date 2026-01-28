# BhrSdk\EmployeeFilesApi

All URIs are relative to https://companySubDomain.bamboohr.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addEmployeeFileCategory()**](EmployeeFilesApi.md#addEmployeeFileCategory) | **POST** /api/v1/employees/files/categories | Create Employee File Category |
| [**deleteEmployeeFile()**](EmployeeFilesApi.md#deleteEmployeeFile) | **DELETE** /api/v1/employees/{id}/files/{fileId} | Delete Employee File |
| [**getEmployeeFile()**](EmployeeFilesApi.md#getEmployeeFile) | **GET** /api/v1/employees/{id}/files/{fileId} | Get Employee File |
| [**listEmployeeFiles()**](EmployeeFilesApi.md#listEmployeeFiles) | **GET** /api/v1/employees/{id}/files/view | Get Employee Files and Categories |
| [**updateEmployeeFile()**](EmployeeFilesApi.md#updateEmployeeFile) | **POST** /api/v1/employees/{id}/files/{fileId} | Update Employee File |
| [**uploadEmployeeFile()**](EmployeeFilesApi.md#uploadEmployeeFile) | **POST** /api/v1/employees/{id}/files | Upload Employee File |


## `addEmployeeFileCategory()`

```php
addEmployeeFileCategory($request_body)
```

Create Employee File Category

Add an employee file category.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization
$config = BhrSdk\Configuration::getDefaultConfiguration()
              ->setApiKey('x-api-key', 'YOUR_API_KEY');

// Or configure OAuth2 access token for authorization
// $config = BhrSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new BhrSdk\Api\EmployeeFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = array('request_body_example'); // string[]

try {
    $apiInstance->addEmployeeFileCategory($request_body);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeFilesApi->addEmployeeFileCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**string[]**](../Model/string.md)|  | |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEmployeeFile()`

```php
deleteEmployeeFile($id, $file_id)
```

Delete Employee File

Delete an employee file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization
$config = BhrSdk\Configuration::getDefaultConfiguration()
              ->setApiKey('x-api-key', 'YOUR_API_KEY');

// Or configure OAuth2 access token for authorization
// $config = BhrSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new BhrSdk\Api\EmployeeFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = '0'; // string | {id} is an employee ID. The special employee ID of zero (0) means to use the employee ID associated with the API key (if any).
$file_id = 'file_id_example'; // string | {fileId} is the ID of the employee file being deleted.

try {
    $apiInstance->deleteEmployeeFile($id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeFilesApi->deleteEmployeeFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| {id} is an employee ID. The special employee ID of zero (0) means to use the employee ID associated with the API key (if any). | [default to &#39;0&#39;] |
| **file_id** | **string**| {fileId} is the ID of the employee file being deleted. | |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmployeeFile()`

```php
getEmployeeFile($id, $file_id)
```

Get Employee File

Gets an employee file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization
$config = BhrSdk\Configuration::getDefaultConfiguration()
              ->setApiKey('x-api-key', 'YOUR_API_KEY');

// Or configure OAuth2 access token for authorization
// $config = BhrSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new BhrSdk\Api\EmployeeFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = '0'; // string | {id} is an employee ID. The special employee ID of zero (0) means to use the employee ID associated with the API key (if any).
$file_id = 'file_id_example'; // string | {fileId} is the ID of the employee file being retrieved.

try {
    $apiInstance->getEmployeeFile($id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeFilesApi->getEmployeeFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| {id} is an employee ID. The special employee ID of zero (0) means to use the employee ID associated with the API key (if any). | [default to &#39;0&#39;] |
| **file_id** | **string**| {fileId} is the ID of the employee file being retrieved. | |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEmployeeFiles()`

```php
listEmployeeFiles($id)
```

Get Employee Files and Categories

Lists employee files and categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization
$config = BhrSdk\Configuration::getDefaultConfiguration()
              ->setApiKey('x-api-key', 'YOUR_API_KEY');

// Or configure OAuth2 access token for authorization
// $config = BhrSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new BhrSdk\Api\EmployeeFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1501; // string | Employee ID is required and needs to be a valid employee ID.

try {
    $apiInstance->listEmployeeFiles($id);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeFilesApi->listEmployeeFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Employee ID is required and needs to be a valid employee ID. | |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/xml`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmployeeFile()`

```php
updateEmployeeFile($id, $file_id, $employee_file_update)
```

Update Employee File

Update an employee file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization
$config = BhrSdk\Configuration::getDefaultConfiguration()
              ->setApiKey('x-api-key', 'YOUR_API_KEY');

// Or configure OAuth2 access token for authorization
// $config = BhrSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new BhrSdk\Api\EmployeeFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = '0'; // string | {id} is an employee ID. The special employee ID of zero (0) means to use the employee ID associated with the API key (if any).
$file_id = 'file_id_example'; // string | {fileId} is the ID of the employee file being updated.
$employee_file_update = new \BhrSdk\Model\EmployeeFileUpdate(); // \BhrSdk\Model\EmployeeFileUpdate

try {
    $apiInstance->updateEmployeeFile($id, $file_id, $employee_file_update);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeFilesApi->updateEmployeeFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| {id} is an employee ID. The special employee ID of zero (0) means to use the employee ID associated with the API key (if any). | [default to &#39;0&#39;] |
| **file_id** | **string**| {fileId} is the ID of the employee file being updated. | |
| **employee_file_update** | [**\BhrSdk\Model\EmployeeFileUpdate**](../Model/EmployeeFileUpdate.md)|  | |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadEmployeeFile()`

```php
uploadEmployeeFile($id, $category, $file_name, $share, $file)
```

Upload Employee File

Upload an employee file.

This endpoint uses `multipart/form-data` with these required form fields:

- `category` (category ID)
- `fileName` (the name to associate with the file)
- `share` (`yes` or `no`)
- `file` (the file content; the field name must be `file`)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization
$config = BhrSdk\Configuration::getDefaultConfiguration()
              ->setApiKey('x-api-key', 'YOUR_API_KEY');

$apiInstance = new BhrSdk\Api\EmployeeFilesApi(
    new GuzzleHttp\Client(),
    $config
);

$id = '1';
$category = 112;
$fileName = 'readme.txt';
$share = 'yes';
$file = __DIR__ . '/readme.txt'; // can also be a resource or SplFileInfo

try {
    $apiInstance->uploadEmployeeFile($id, $category, $fileName, $share, $file);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeFilesApi->uploadEmployeeFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| {id} is an employee ID. The special employee ID of zero (0) means to use the employee ID associated with the API key (if any). | [default to '0'] |
| **category** | **string\|int**| The category ID to place the new file in. | |
| **file_name** | **string**| The file name to associate with the file (`fileName` form field). | |
| **share** | **string**| Whether to make the file available to the employee. Allowed values: `yes`, `no`. | |
| **file** | **mixed**| The file to upload (resource, `SplFileInfo`/`SplFileObject`, or a filesystem path string). The form field name must be `file`. | |

### Return type

**string** (raw response body; BambooHR commonly returns an empty body with HTTP 201)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
