<?php
/**
 * Apiv1organisationorgIdtariffPlanTariffPlanPrice
 *
 * PHP version 5
 *
 * @category Class
 * @package  Emnify\EmnifySdk
 * @author   Coderic Development Team
 * @link     https://github.com/CodericEcosystem/emnify-php-sdk
 */

/**
 * emnify Rest API
 *
 * Rest API resources of the emnify System.
 *
 * OpenAPI spec version: 1.3
 * 
 * Generated by: https://github.com/CodericEcosystem/emnify-php-sdk.git
 * Swagger Codegen version: 3.0.46
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/CodericEcosystem/emnify-php-sdk
 * Do not edit the class manually.
 */

namespace Emnify\EmnifySdk\Model;

use \ArrayAccess;
use \Emnify\EmnifySdk\ObjectSerializer;

/**
 * Apiv1organisationorgIdtariffPlanTariffPlanPrice Class Doc Comment
 *
 * @category Class
 * @package  Emnify\EmnifySdk
 * @author   Coderic Development Team
 * @link     https://github.com/CodericEcosystem/emnify-php-sdk
 */
class Apiv1organisationorgIdtariffPlanTariffPlanPrice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'apiv1organisationorg_idtariff_plan_tariff_plan_price';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sim_activated_rate' => '\Emnify\EmnifySdk\Model\OneOfapiv1organisationorgIdtariffPlanTariffPlanPriceSimActivatedRateItems[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sim_activated_rate' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'sim_activated_rate' => 'sim_activated_rate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sim_activated_rate' => 'setSimActivatedRate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sim_activated_rate' => 'getSimActivatedRate'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['sim_activated_rate'] = isset($data['sim_activated_rate']) ? $data['sim_activated_rate'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets sim_activated_rate
     *
     * @return \Emnify\EmnifySdk\Model\OneOfapiv1organisationorgIdtariffPlanTariffPlanPriceSimActivatedRateItems[]
     */
    public function getSimActivatedRate()
    {
        return $this->container['sim_activated_rate'];
    }

    /**
     * Sets sim_activated_rate
     *
     * @param \Emnify\EmnifySdk\Model\OneOfapiv1organisationorgIdtariffPlanTariffPlanPriceSimActivatedRateItems[] $sim_activated_rate sim_activated_rate
     *
     * @return $this
     */
    public function setSimActivatedRate($sim_activated_rate)
    {
        $this->container['sim_activated_rate'] = $sim_activated_rate;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}