# Swagger\Client\UserManagementApi

All URIs are relative to *https://cdn.emnify.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userByIdDelete**](UserManagementApi.md#userbyiddelete) | **DELETE** /api/v1/user/{user_id} | Delete User by ID
[**userByIdDeleteV2**](UserManagementApi.md#userbyiddeletev2) | **DELETE** /api/v2/user/{user_id} | Delete User by ID
[**userByIdGet**](UserManagementApi.md#userbyidget) | **GET** /api/v1/user/{user_id} | Get User by ID or Username
[**userByIdPatch**](UserManagementApi.md#userbyidpatch) | **PATCH** /api/v1/user/{user_id} | Update User by ID
[**userByIdV2CreateSupportToken**](UserManagementApi.md#userbyidv2createsupporttoken) | **POST** /api/v2/user/{user_id}/support_token | Create support access token for given user
[**userEventPagePerPageSortByUserIdAndQGet**](UserManagementApi.md#usereventpageperpagesortbyuseridandqget) | **GET** /api/v1/user/{user_id}/event | List User Events
[**userPerPageSortByQAndPageGet**](UserManagementApi.md#userperpagesortbyqandpageget) | **GET** /api/v1/user | List User Accounts
[**userPerPageSortByQAndPagePost**](UserManagementApi.md#userperpagesortbyqandpagepost) | **POST** /api/v1/user | Create User
[**userRoleByIdAndRoleIdDelete**](UserManagementApi.md#userrolebyidandroleiddelete) | **DELETE** /api/v1/user/{user_id}/role/{role_id} | Delete User Role
[**userRoleByIdAndRoleIdPut**](UserManagementApi.md#userrolebyidandroleidput) | **PUT** /api/v1/user/{user_id}/role/{role_id} | Assign Role to User
[**userRoleGet**](UserManagementApi.md#userroleget) | **GET** /api/v1/user/role | List User Roles
[**userRolePermissionByIdGet**](UserManagementApi.md#userrolepermissionbyidget) | **GET** /api/v1/user/{user_id}/role/permission | List User Role Permissions
[**userStatusGet**](UserManagementApi.md#userstatusget) | **GET** /api/v1/user/status | List User Statuses

# **userByIdDelete**
> userByIdDelete($user_id)

Delete User by ID

**DEPRECATED** Please use DELETE `/api/v2/user/:id` instead **Notes** * A user can be deleted, if belonging to the same organisation as the requesting user,  or to an organisation which is a direct child of the requesting user's organisation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 1.2; // float | User ID

try {
    $apiInstance->userByIdDelete($user_id);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->userByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **float**| User ID |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userByIdDeleteV2**
> userByIdDeleteV2($user_id)

Delete User by ID

**Notes** A user can be deleted, if: * belonging to the same organisation as the requesting user * belonging to an organisation which is a direct child of the requesting user's organisation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 1.2; // float | User ID

try {
    $apiInstance->userByIdDeleteV2($user_id);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->userByIdDeleteV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **float**| User ID |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userByIdGet**
> \Swagger\Client\Model\RetrievetheUserresponse userByIdGet($user_id)

Get User by ID or Username

Get a specific user by ID  provided the user is within this requesting user's organisation or the organisation's immediate child organisations.  `id` may be one of:  * The numeric ID of the user, e.g. \"123\". This is the top-level `id` object returned by each item in `GET /api/v1/user` * Username (email), e.g. \"exampleuser@org.de\". This is the top-level `username` object returned by each item in `GET /api/v1/user`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 1.2; // float | User ID

try {
    $result = $apiInstance->userByIdGet($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->userByIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **float**| User ID |

### Return type

[**\Swagger\Client\Model\RetrievetheUserresponse**](../Model/RetrievetheUserresponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userByIdPatch**
> userByIdPatch($body, $user_id)

Update User by ID

Provided fields * `username` (String optional) - has to be user's email * `name` (String optional) * `status` (Object optional) * `organisation` (Object optional) - must be the current organisation or not to be provided  #### Notes  * Password is not provided. Separate calls provide password management. * The organisation is not modifiable. A user can be updated, if belonging to the same organisation as the requesting user, or to an organisation which is a direct child of the requesting user's organisation. * Status can be changed between ACTIVE (id: 1) and SUSPENDED (id: 2), and from ACTIVATION_PENDING (id: 0) to SUSPENDED.  > Modifying the username invalidates account and triggers the activation procedure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdateUserrequest(); // \Swagger\Client\Model\UpdateUserrequest | 
$user_id = 1.2; // float | User ID

try {
    $apiInstance->userByIdPatch($body, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->userByIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdateUserrequest**](../Model/UpdateUserrequest.md)|  |
 **user_id** | **float**| User ID |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userByIdV2CreateSupportToken**
> \Swagger\Client\Model\UserByIdV2CreateSupportTokenRequest1 userByIdV2CreateSupportToken($user_id, $body)

Create support access token for given user

Create a bearer token that can be used to acces the portal as the target user. Additionally admin or observer role can be selected. The role will not be applied to the user, only to the token.  The access can be made through cannel-partner hierarchies as well. An event will be generated on the accessed organisation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 1.2; // float | User ID
$body = new \Swagger\Client\Model\UserByIdV2CreateSupportTokenRequest(); // \Swagger\Client\Model\UserByIdV2CreateSupportTokenRequest | 

try {
    $result = $apiInstance->userByIdV2CreateSupportToken($user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->userByIdV2CreateSupportToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **float**| User ID |
 **body** | [**\Swagger\Client\Model\UserByIdV2CreateSupportTokenRequest**](../Model/UserByIdV2CreateSupportTokenRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\UserByIdV2CreateSupportTokenRequest1**](../Model/UserByIdV2CreateSupportTokenRequest1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userEventPagePerPageSortByUserIdAndQGet**
> \Swagger\Client\Model\RetrieveEventsresponse4[] userEventPagePerPageSortByUserIdAndQGet($user_id, $page, $per_page, $sort, $q)

List User Events

Returns the list of events, filtered, sorted and paged according to query parameters.  Only an administrator or observer may be allowed to see events of other users, provided they belong to an organisation he/she has access to.  Any user can retrieve their own events at `/api/v1/user/my/event`.  **CAUTION** This API endpoint deviates from the specified conventions and may not return the same HTTP Codes as the higher layer call (`/api/v1/user/{user_id|my}`). In case the requested `{user_id}` does not exist or is not accessible for the user, **HTTP 200** will be returned with empty **[]** as long as the provided `{user_id}` is a number and all parameters are valid. Please take that into consideration when building automation on top of the error behaviour of this endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 1.2; // float | User ID
$page = 56; // int | Current page number
$per_page = 56; // int | Paging parameters defining the number of items per page
$sort = "sort_example"; // string | Sort properties according to a comma separated list of accepted fields. Valid fields are:  * `id` - (**event id**) * `timestamp` - (**event timestamp**) * `source` - (**event source**) * `severity` - (**event severity**) * `alert` - (**alert status**) * `organisation` - (**organisation name**) * `user` - (**user id**) * `endpoint` - (**endpoint name**) * `tags` - (**endpoint tags**) * `ip_address` - (**endpoint ip_address**) * `iccid` - (**sim iccid**) * `imsi` - (**sim imsi**) * `type` - (**event type**)
$q = "q_example"; // string | Filter parameter in `<filter>:<value>` format. Multiple filters must be in the format of a comma separated list of the following fields:  * `type` (**event_type**, numerical) * `source` (**event_type**, numerical, e.g. 0 = Network), 1 = Policy Control, 2 = API) * `severity` (**event_severity**, numerical, e.g. 0 = Info, 1 = Warn), 2 = Critical) * `alert` (boolean, e.g. true, false) * `description` (**event description**, string) * `organisation` (**organisation name**, string) * `user` (**user name**, string) * `endpoint` (**endpoint name**, string) * `tags` (**endpoint tags**, string) * `ip_address` (**endpoint IP address**, valid IPv4/IPv6 address) * `imei` (**endpoint imei**, numerical string) * `iccid` (**sim iccid**, numerical string) * `imsi` (**sim imsi**, numerical string) * `from` (**date**, format `YYYY-MM-DDTHH:mm:ssZ`, __only valid with until!__) * `until` (**date**, format `YYYY-MM-DDTHH:mm:ssZ`, __only valid with from!__) * `timestamp` (**date**, format `YYYY-MM-DDTHH:mm:ssZ`, for querying events of 1 day, deprecated in future)

try {
    $result = $apiInstance->userEventPagePerPageSortByUserIdAndQGet($user_id, $page, $per_page, $sort, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->userEventPagePerPageSortByUserIdAndQGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **float**| User ID |
 **page** | **int**| Current page number | [optional]
 **per_page** | **int**| Paging parameters defining the number of items per page | [optional]
 **sort** | **string**| Sort properties according to a comma separated list of accepted fields. Valid fields are:  * &#x60;id&#x60; - (**event id**) * &#x60;timestamp&#x60; - (**event timestamp**) * &#x60;source&#x60; - (**event source**) * &#x60;severity&#x60; - (**event severity**) * &#x60;alert&#x60; - (**alert status**) * &#x60;organisation&#x60; - (**organisation name**) * &#x60;user&#x60; - (**user id**) * &#x60;endpoint&#x60; - (**endpoint name**) * &#x60;tags&#x60; - (**endpoint tags**) * &#x60;ip_address&#x60; - (**endpoint ip_address**) * &#x60;iccid&#x60; - (**sim iccid**) * &#x60;imsi&#x60; - (**sim imsi**) * &#x60;type&#x60; - (**event type**) | [optional]
 **q** | **string**| Filter parameter in &#x60;&lt;filter&gt;:&lt;value&gt;&#x60; format. Multiple filters must be in the format of a comma separated list of the following fields:  * &#x60;type&#x60; (**event_type**, numerical) * &#x60;source&#x60; (**event_type**, numerical, e.g. 0 &#x3D; Network), 1 &#x3D; Policy Control, 2 &#x3D; API) * &#x60;severity&#x60; (**event_severity**, numerical, e.g. 0 &#x3D; Info, 1 &#x3D; Warn), 2 &#x3D; Critical) * &#x60;alert&#x60; (boolean, e.g. true, false) * &#x60;description&#x60; (**event description**, string) * &#x60;organisation&#x60; (**organisation name**, string) * &#x60;user&#x60; (**user name**, string) * &#x60;endpoint&#x60; (**endpoint name**, string) * &#x60;tags&#x60; (**endpoint tags**, string) * &#x60;ip_address&#x60; (**endpoint IP address**, valid IPv4/IPv6 address) * &#x60;imei&#x60; (**endpoint imei**, numerical string) * &#x60;iccid&#x60; (**sim iccid**, numerical string) * &#x60;imsi&#x60; (**sim imsi**, numerical string) * &#x60;from&#x60; (**date**, format &#x60;YYYY-MM-DDTHH:mm:ssZ&#x60;, __only valid with until!__) * &#x60;until&#x60; (**date**, format &#x60;YYYY-MM-DDTHH:mm:ssZ&#x60;, __only valid with from!__) * &#x60;timestamp&#x60; (**date**, format &#x60;YYYY-MM-DDTHH:mm:ssZ&#x60;, for querying events of 1 day, deprecated in future) | [optional]

### Return type

[**\Swagger\Client\Model\RetrieveEventsresponse4[]**](../Model/RetrieveEventsresponse4.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userPerPageSortByQAndPageGet**
> \Swagger\Client\Model\User[] userPerPageSortByQAndPageGet($page, $q, $per_page, $sort)

List User Accounts

Retrieves the collection of user accounts, filtered, sorted and paged accourding to query parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1.2; // float | Current page number
$q = "q_example"; // string | Filter parameter in `<filter>:<value>` format. Multiple filters must be in the format of a comma separated list of the following fields:  * `id` * `status` * `name` * `username` * `organisation`
$per_page = 56; // int | Paging parameters defining the number of items per page
$sort = "sort_example"; // string | Sort properties according to comma separated list out of the allowed fields  * `id` * `status` * `name` * `username` * `organisation` * `created`

try {
    $result = $apiInstance->userPerPageSortByQAndPageGet($page, $q, $per_page, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->userPerPageSortByQAndPageGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **float**| Current page number | [optional]
 **q** | **string**| Filter parameter in &#x60;&lt;filter&gt;:&lt;value&gt;&#x60; format. Multiple filters must be in the format of a comma separated list of the following fields:  * &#x60;id&#x60; * &#x60;status&#x60; * &#x60;name&#x60; * &#x60;username&#x60; * &#x60;organisation&#x60; | [optional]
 **per_page** | **int**| Paging parameters defining the number of items per page | [optional]
 **sort** | **string**| Sort properties according to comma separated list out of the allowed fields  * &#x60;id&#x60; * &#x60;status&#x60; * &#x60;name&#x60; * &#x60;username&#x60; * &#x60;organisation&#x60; * &#x60;created&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\User[]**](../Model/User.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userPerPageSortByQAndPagePost**
> userPerPageSortByQAndPagePost($body)

Create User

Creates a user which is *not active and has no password assigned*. The URL to get the user details is provided as Location Header in the response.  #### ACTIVATION  Upon creation, the user account undergoes an activation process (see services below ) in which she receives an email with activation link. Following this link the user is asked to set the password and upon successful completion of this process, the account becomes active and operational.  Provided fields:  * `username` (String required) - has to be the email of this user * `name` (String required) * `organisation` (Object optional) -  **may be provided** by regular user, but **is required** for master user. * `roles` (List of Objects optional) - List of one or more role Ids to be assigned at once. If missing, a default role is assigned  #### Notes  * Password is not provided. Separate calls provide password management. * When the organisation of the new user is not specified in the request, it is inherited from the user creating the account.  A regular user is allowed to specify **only organisations which are direct children** of his/her own organisation, or his/her own organisation. * The status field is not user editable at account creation time - the default imposed by server is ACTIVATION_PENDING.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateUserrequest(); // \Swagger\Client\Model\CreateUserrequest | 

try {
    $apiInstance->userPerPageSortByQAndPagePost($body);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->userPerPageSortByQAndPagePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateUserrequest**](../Model/CreateUserrequest.md)|  |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userRoleByIdAndRoleIdDelete**
> userRoleByIdAndRoleIdDelete($user_id, $role_id)

Delete User Role

Release a Role from association with this user.  Note that a Role can only be removed, if it is not the last role of this user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 1.2; // float | User ID
$role_id = 1.2; // float | Role ID to be assigned

try {
    $apiInstance->userRoleByIdAndRoleIdDelete($user_id, $role_id);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->userRoleByIdAndRoleIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **float**| User ID |
 **role_id** | **float**| Role ID to be assigned |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userRoleByIdAndRoleIdPut**
> userRoleByIdAndRoleIdPut($user_id, $role_id)

Assign Role to User

Role is assigned to this user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 1.2; // float | User ID
$role_id = 1.2; // float | Role ID to be assigned

try {
    $apiInstance->userRoleByIdAndRoleIdPut($user_id, $role_id);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->userRoleByIdAndRoleIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **float**| User ID |
 **role_id** | **float**| Role ID to be assigned |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userRoleGet**
> \Swagger\Client\Model\InlineResponse2005[] userRoleGet()

List User Roles

Retrieves the collection of available user roles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->userRoleGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->userRoleGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse2005[]**](../Model/InlineResponse2005.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userRolePermissionByIdGet**
> object userRolePermissionByIdGet($user_id)

List User Role Permissions

Role permissions available to this user.  Only an administrator or observer is allowed to see the role permissions of other users, provided they belong to an organisation he/she has access to.<br/>  Any user can also retrieve one's own role permissions at: `/api/v1/user/my/role/permission`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 1.2; // float | User ID

try {
    $result = $apiInstance->userRolePermissionByIdGet($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->userRolePermissionByIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **float**| User ID |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userStatusGet**
> \Swagger\Client\Model\RetrieveAvailableUserStatusesresponse[] userStatusGet()

List User Statuses

Provides the list of available user status (lookup).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->userStatusGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->userStatusGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\RetrieveAvailableUserStatusesresponse[]**](../Model/RetrieveAvailableUserStatusesresponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

