<?php
/**
 * EndpointApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Emnify\EmnifySdk
 * @author   Coderic Development Team
 * @link     https://github.com/Emnify/emnify-php-sdk
 */

/**
 * emnify Rest API
 *
 * Rest API resources of the emnify System.
 *
 * OpenAPI spec version: 1.3
 * 
 * Generated by: https://github.com/Emnify/emnify-php-sdk.git
 * Swagger Codegen version: 3.0.46
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/Emnify/emnify-php-sdk
 * Please update the test case below to test the endpoint.
 */

namespace Emnify\EmnifySdk;

use Emnify\EmnifySdk\Configuration;
use Emnify\EmnifySdk\ApiException;
use Emnify\EmnifySdk\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * EndpointApiTest Class Doc Comment
 *
 * @category Class
 * @package  Emnify\EmnifySdk
 * @author   Coderic Development Team
 * @link     https://github.com/Emnify/emnify-php-sdk
 */
class EndpointApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for createEndpoint
     *
     * Create Endpoint.
     *
     */
    public function testCreateEndpoint()
    {
    }

    /**
     * Test case for deleteEndpointDataQuotaById
     *
     * Remove Data Quota.
     *
     */
    public function testDeleteEndpointDataQuotaById()
    {
    }

    /**
     * Test case for deleteEndpointSmsQuotaById
     *
     * Remove SMS Quota.
     *
     */
    public function testDeleteEndpointSmsQuotaById()
    {
    }

    /**
     * Test case for endpointBalanceByEndpointIdDelete
     *
     * Reset Prepaid Balance.
     *
     */
    public function testEndpointBalanceByEndpointIdDelete()
    {
    }

    /**
     * Test case for endpointBalanceByEndpointIdGet
     *
     * Endpoint Prepaid Balance.
     *
     */
    public function testEndpointBalanceByEndpointIdGet()
    {
    }

    /**
     * Test case for endpointBalanceByEndpointIdPost
     *
     * Update Prepaid Balance.
     *
     */
    public function testEndpointBalanceByEndpointIdPost()
    {
    }

    /**
     * Test case for endpointByIdDelete
     *
     * Delete an Endpoint.
     *
     */
    public function testEndpointByIdDelete()
    {
    }

    /**
     * Test case for endpointByIdGet
     *
     * Endpoint Details.
     *
     */
    public function testEndpointByIdGet()
    {
    }

    /**
     * Test case for endpointByIdPatch
     *
     * Update an Endpoint.
     *
     */
    public function testEndpointByIdPatch()
    {
    }

    /**
     * Test case for endpointConnectivityByIdGet
     *
     * Endpoint Connectivity Status.
     *
     */
    public function testEndpointConnectivityByIdGet()
    {
    }

    /**
     * Test case for endpointEventsByID
     *
     * List Endpoint events.
     *
     */
    public function testEndpointEventsByID()
    {
    }

    /**
     * Test case for endpointOperatorBlacklistByEndpointIdGet
     *
     * List Operator Blacklist for Endpoint.
     *
     */
    public function testEndpointOperatorBlacklistByEndpointIdGet()
    {
    }

    /**
     * Test case for endpointOperatorBlacklistByEpIdAndOperatorIdDelete
     *
     * Remove an Operator from the Blacklist.
     *
     */
    public function testEndpointOperatorBlacklistByEpIdAndOperatorIdDelete()
    {
    }

    /**
     * Test case for endpointOperatorBlacklistByEpIdAndOperatorIdPut
     *
     * Add an Operator to the Blacklist.
     *
     */
    public function testEndpointOperatorBlacklistByEpIdAndOperatorIdPut()
    {
    }

    /**
     * Test case for endpointQuotaDataByEndpointIdGet
     *
     * Retrieve Data Quota details.
     *
     */
    public function testEndpointQuotaDataByEndpointIdGet()
    {
    }

    /**
     * Test case for endpointQuotaDataByEndpointIdPost
     *
     * Set Data Quota.
     *
     */
    public function testEndpointQuotaDataByEndpointIdPost()
    {
    }

    /**
     * Test case for endpointQuotaSmsByEndpointIdGet
     *
     * Show SMS Quota details.
     *
     */
    public function testEndpointQuotaSmsByEndpointIdGet()
    {
    }

    /**
     * Test case for endpointQuotaSmsByEndpointIdPost
     *
     * Set SMS Quota.
     *
     */
    public function testEndpointQuotaSmsByEndpointIdPost()
    {
    }

    /**
     * Test case for endpointSmsByEndpointIdAndSmsIdDelete
     *
     * Cancel SMS.
     *
     */
    public function testEndpointSmsByEndpointIdAndSmsIdDelete()
    {
    }

    /**
     * Test case for endpointSmsByEndpointIdAndSmsIdGet
     *
     * SMS details.
     *
     */
    public function testEndpointSmsByEndpointIdAndSmsIdGet()
    {
    }

    /**
     * Test case for endpointSmsByIdGet
     *
     * List sent and received SMS.
     *
     */
    public function testEndpointSmsByIdGet()
    {
    }

    /**
     * Test case for endpointSmsByIdPost
     *
     * Send SMS to an Endpoint.
     *
     */
    public function testEndpointSmsByIdPost()
    {
    }

    /**
     * Test case for endpointStatsByIdGet
     *
     * Endpoint Usage and Cost Statistics.
     *
     */
    public function testEndpointStatsByIdGet()
    {
    }

    /**
     * Test case for endpointStatsDailyByIdGet
     *
     * Daily Endpoint Usage Statistics.
     *
     */
    public function testEndpointStatsDailyByIdGet()
    {
    }

    /**
     * Test case for endpointStatusGet
     *
     * List Endpoint Statuses.
     *
     */
    public function testEndpointStatusGet()
    {
    }

    /**
     * Test case for getConnectivityInfoByEndpointId
     *
     * Connectivity Info of an Endpoint.
     *
     */
    public function testGetConnectivityInfoByEndpointId()
    {
    }

    /**
     * Test case for getEndpoints
     *
     * List Endpoints.
     *
     */
    public function testGetEndpoints()
    {
    }

    /**
     * Test case for updateEndpointConnectivityById
     *
     * Reset Endpoint Connectivity.
     *
     */
    public function testUpdateEndpointConnectivityById()
    {
    }
}
