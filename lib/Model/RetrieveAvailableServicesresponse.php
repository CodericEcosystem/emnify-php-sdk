<?php
/**
 * RetrieveAvailableServicesresponse
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
 * RetrieveAvailableServicesresponse Class Doc Comment
 *
 * @category Class
 * @package  Emnify\EmnifySdk
 * @author   Coderic Development Team
 * @link     https://github.com/CodericEcosystem/emnify-php-sdk
 */
class RetrieveAvailableServicesresponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RetrieveAvailableServicesresponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'description' => 'string',
        'teleservice_code' => 'int',
        'used_with_vlr' => 'bool',
        'used_with_sgsn' => 'bool',
        'traffic_type' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'description' => null,
        'teleservice_code' => 'int32',
        'used_with_vlr' => null,
        'used_with_sgsn' => null,
        'traffic_type' => null
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
        'id' => 'id',
        'description' => 'description',
        'teleservice_code' => 'teleservice_code',
        'used_with_vlr' => 'used_with_vlr',
        'used_with_sgsn' => 'used_with_sgsn',
        'traffic_type' => 'traffic_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'description' => 'setDescription',
        'teleservice_code' => 'setTeleserviceCode',
        'used_with_vlr' => 'setUsedWithVlr',
        'used_with_sgsn' => 'setUsedWithSgsn',
        'traffic_type' => 'setTrafficType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'description' => 'getDescription',
        'teleservice_code' => 'getTeleserviceCode',
        'used_with_vlr' => 'getUsedWithVlr',
        'used_with_sgsn' => 'getUsedWithSgsn',
        'traffic_type' => 'getTrafficType'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['teleservice_code'] = isset($data['teleservice_code']) ? $data['teleservice_code'] : null;
        $this->container['used_with_vlr'] = isset($data['used_with_vlr']) ? $data['used_with_vlr'] : null;
        $this->container['used_with_sgsn'] = isset($data['used_with_sgsn']) ? $data['used_with_sgsn'] : null;
        $this->container['traffic_type'] = isset($data['traffic_type']) ? $data['traffic_type'] : null;
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets teleservice_code
     *
     * @return int
     */
    public function getTeleserviceCode()
    {
        return $this->container['teleservice_code'];
    }

    /**
     * Sets teleservice_code
     *
     * @param int $teleservice_code teleservice_code
     *
     * @return $this
     */
    public function setTeleserviceCode($teleservice_code)
    {
        $this->container['teleservice_code'] = $teleservice_code;

        return $this;
    }

    /**
     * Gets used_with_vlr
     *
     * @return bool
     */
    public function getUsedWithVlr()
    {
        return $this->container['used_with_vlr'];
    }

    /**
     * Sets used_with_vlr
     *
     * @param bool $used_with_vlr used_with_vlr
     *
     * @return $this
     */
    public function setUsedWithVlr($used_with_vlr)
    {
        $this->container['used_with_vlr'] = $used_with_vlr;

        return $this;
    }

    /**
     * Gets used_with_sgsn
     *
     * @return bool
     */
    public function getUsedWithSgsn()
    {
        return $this->container['used_with_sgsn'];
    }

    /**
     * Sets used_with_sgsn
     *
     * @param bool $used_with_sgsn used_with_sgsn
     *
     * @return $this
     */
    public function setUsedWithSgsn($used_with_sgsn)
    {
        $this->container['used_with_sgsn'] = $used_with_sgsn;

        return $this;
    }

    /**
     * Gets traffic_type
     *
     * @return object
     */
    public function getTrafficType()
    {
        return $this->container['traffic_type'];
    }

    /**
     * Sets traffic_type
     *
     * @param object $traffic_type traffic_type
     *
     * @return $this
     */
    public function setTrafficType($traffic_type)
    {
        $this->container['traffic_type'] = $traffic_type;

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
    public function offsetExists($offset): bool
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
    public function offsetGet($offset): mixed
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
