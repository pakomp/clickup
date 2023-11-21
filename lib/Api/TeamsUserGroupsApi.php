<?php
/**
 * TeamsUserGroupsApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Msn\Apis\Clickup
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * ClickUp API V2
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Msn\Apis\Clickup\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Msn\Apis\Clickup\ApiException;
use Msn\Apis\Clickup\Configuration;
use Msn\Apis\Clickup\HeaderSelector;
use Msn\Apis\Clickup\ObjectSerializer;

/**
 * TeamsUserGroupsApi Class Doc Comment
 *
 * @category Class
 * @package  Msn\Apis\Clickup
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TeamsUserGroupsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'apiV2GroupGet' => [
            'application/json',
        ],
        'apiV2GroupGroupIdDelete' => [
            'application/json',
        ],
        'apiV2GroupGroupIdPut' => [
            'application/json',
        ],
        'apiV2TeamTeamIdGroupPost' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation apiV2GroupGet
     *
     * Get Teams
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV2GroupGet'] to see the possible values for this operation
     *
     * @throws \Msn\Apis\Clickup\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV2GroupGet(string $contentType = self::contentTypes['apiV2GroupGet'][0])
    {
        $this->apiV2GroupGetWithHttpInfo($contentType);
    }

    /**
     * Operation apiV2GroupGetWithHttpInfo
     *
     * Get Teams
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV2GroupGet'] to see the possible values for this operation
     *
     * @throws \Msn\Apis\Clickup\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV2GroupGetWithHttpInfo(string $contentType = self::contentTypes['apiV2GroupGet'][0])
    {
        $request = $this->apiV2GroupGetRequest($contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation apiV2GroupGetAsync
     *
     * Get Teams
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV2GroupGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV2GroupGetAsync(string $contentType = self::contentTypes['apiV2GroupGet'][0])
    {
        return $this->apiV2GroupGetAsyncWithHttpInfo($contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV2GroupGetAsyncWithHttpInfo
     *
     * Get Teams
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV2GroupGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV2GroupGetAsyncWithHttpInfo(string $contentType = self::contentTypes['apiV2GroupGet'][0])
    {
        $returnType = '';
        $request = $this->apiV2GroupGetRequest($contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiV2GroupGet'
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV2GroupGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function apiV2GroupGetRequest(string $contentType = self::contentTypes['apiV2GroupGet'][0])
    {


        $resourcePath = '/api/v2/group';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiV2GroupGroupIdDelete
     *
     * Delete a Team
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV2GroupGroupIdDelete'] to see the possible values for this operation
     *
     * @throws \Msn\Apis\Clickup\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV2GroupGroupIdDelete(string $contentType = self::contentTypes['apiV2GroupGroupIdDelete'][0])
    {
        $this->apiV2GroupGroupIdDeleteWithHttpInfo($contentType);
    }

    /**
     * Operation apiV2GroupGroupIdDeleteWithHttpInfo
     *
     * Delete a Team
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV2GroupGroupIdDelete'] to see the possible values for this operation
     *
     * @throws \Msn\Apis\Clickup\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV2GroupGroupIdDeleteWithHttpInfo(string $contentType = self::contentTypes['apiV2GroupGroupIdDelete'][0])
    {
        $request = $this->apiV2GroupGroupIdDeleteRequest($contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation apiV2GroupGroupIdDeleteAsync
     *
     * Delete a Team
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV2GroupGroupIdDelete'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV2GroupGroupIdDeleteAsync(string $contentType = self::contentTypes['apiV2GroupGroupIdDelete'][0])
    {
        return $this->apiV2GroupGroupIdDeleteAsyncWithHttpInfo($contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV2GroupGroupIdDeleteAsyncWithHttpInfo
     *
     * Delete a Team
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV2GroupGroupIdDelete'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV2GroupGroupIdDeleteAsyncWithHttpInfo(string $contentType = self::contentTypes['apiV2GroupGroupIdDelete'][0])
    {
        $returnType = '';
        $request = $this->apiV2GroupGroupIdDeleteRequest($contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiV2GroupGroupIdDelete'
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV2GroupGroupIdDelete'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function apiV2GroupGroupIdDeleteRequest(string $contentType = self::contentTypes['apiV2GroupGroupIdDelete'][0])
    {


        $resourcePath = '/api/v2/group/group_id';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'DELETE',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiV2GroupGroupIdPut
     *
     * Update Team
     *
     * @param  object $body body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV2GroupGroupIdPut'] to see the possible values for this operation
     *
     * @throws \Msn\Apis\Clickup\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV2GroupGroupIdPut($body = null, string $contentType = self::contentTypes['apiV2GroupGroupIdPut'][0])
    {
        $this->apiV2GroupGroupIdPutWithHttpInfo($body, $contentType);
    }

    /**
     * Operation apiV2GroupGroupIdPutWithHttpInfo
     *
     * Update Team
     *
     * @param  object $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV2GroupGroupIdPut'] to see the possible values for this operation
     *
     * @throws \Msn\Apis\Clickup\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV2GroupGroupIdPutWithHttpInfo($body = null, string $contentType = self::contentTypes['apiV2GroupGroupIdPut'][0])
    {
        $request = $this->apiV2GroupGroupIdPutRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation apiV2GroupGroupIdPutAsync
     *
     * Update Team
     *
     * @param  object $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV2GroupGroupIdPut'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV2GroupGroupIdPutAsync($body = null, string $contentType = self::contentTypes['apiV2GroupGroupIdPut'][0])
    {
        return $this->apiV2GroupGroupIdPutAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV2GroupGroupIdPutAsyncWithHttpInfo
     *
     * Update Team
     *
     * @param  object $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV2GroupGroupIdPut'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV2GroupGroupIdPutAsyncWithHttpInfo($body = null, string $contentType = self::contentTypes['apiV2GroupGroupIdPut'][0])
    {
        $returnType = '';
        $request = $this->apiV2GroupGroupIdPutRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiV2GroupGroupIdPut'
     *
     * @param  object $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV2GroupGroupIdPut'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function apiV2GroupGroupIdPutRequest($body = null, string $contentType = self::contentTypes['apiV2GroupGroupIdPut'][0])
    {



        $resourcePath = '/api/v2/group/group_id';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiV2TeamTeamIdGroupPost
     *
     * Create a Team
     *
     * @param  object $body body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV2TeamTeamIdGroupPost'] to see the possible values for this operation
     *
     * @throws \Msn\Apis\Clickup\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV2TeamTeamIdGroupPost($body = null, string $contentType = self::contentTypes['apiV2TeamTeamIdGroupPost'][0])
    {
        $this->apiV2TeamTeamIdGroupPostWithHttpInfo($body, $contentType);
    }

    /**
     * Operation apiV2TeamTeamIdGroupPostWithHttpInfo
     *
     * Create a Team
     *
     * @param  object $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV2TeamTeamIdGroupPost'] to see the possible values for this operation
     *
     * @throws \Msn\Apis\Clickup\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV2TeamTeamIdGroupPostWithHttpInfo($body = null, string $contentType = self::contentTypes['apiV2TeamTeamIdGroupPost'][0])
    {
        $request = $this->apiV2TeamTeamIdGroupPostRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation apiV2TeamTeamIdGroupPostAsync
     *
     * Create a Team
     *
     * @param  object $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV2TeamTeamIdGroupPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV2TeamTeamIdGroupPostAsync($body = null, string $contentType = self::contentTypes['apiV2TeamTeamIdGroupPost'][0])
    {
        return $this->apiV2TeamTeamIdGroupPostAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV2TeamTeamIdGroupPostAsyncWithHttpInfo
     *
     * Create a Team
     *
     * @param  object $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV2TeamTeamIdGroupPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV2TeamTeamIdGroupPostAsyncWithHttpInfo($body = null, string $contentType = self::contentTypes['apiV2TeamTeamIdGroupPost'][0])
    {
        $returnType = '';
        $request = $this->apiV2TeamTeamIdGroupPostRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiV2TeamTeamIdGroupPost'
     *
     * @param  object $body (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV2TeamTeamIdGroupPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function apiV2TeamTeamIdGroupPostRequest($body = null, string $contentType = self::contentTypes['apiV2TeamTeamIdGroupPost'][0])
    {



        $resourcePath = '/api/v2/team/team_id/group';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
