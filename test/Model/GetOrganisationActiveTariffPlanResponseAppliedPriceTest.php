<?php
/**
 * GetOrganisationActiveTariffPlanResponseAppliedPriceTest
 *
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
 * Please update the test case below to test the model.
 */

namespace Emnify\EmnifySdk;

use PHPUnit\Framework\TestCase;

/**
 * GetOrganisationActiveTariffPlanResponseAppliedPriceTest Class Doc Comment
 *
 * @category    Class
 * @description the fees that apply for the current month according to the number of activated SIMs. calculation follows volume pricing at the moment, but may be changed at any time. the resulting price is the sum of each price line times the given volume. if it is a scaled price, the rate object contains a &#x60;scale_start&#x60; field, otherwise it is fixed.
 * @package     Emnify\EmnifySdk
 * @author      Coderic Development Team
 * @link        https://github.com/Emnify/emnify-php-sdk
 */
class GetOrganisationActiveTariffPlanResponseAppliedPriceTest extends TestCase
{

    /**
     * Setup before running any test case
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
     * Test "GetOrganisationActiveTariffPlanResponseAppliedPrice"
     */
    public function testGetOrganisationActiveTariffPlanResponseAppliedPrice()
    {
    }

    /**
     * Test attribute "sim_activated_rate"
     */
    public function testPropertySimActivatedRate()
    {
    }
}
