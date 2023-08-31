<?php
/**
 * RetrieveConnectivityInformationresponse
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
 * RetrieveConnectivityInformationresponse Class Doc Comment
 *
 * @category Class
 * @package  Emnify\EmnifySdk
 * @author   Coderic Development Team
 * @link     https://github.com/CodericEcosystem/emnify-php-sdk
 */
class RetrieveConnectivityInformationresponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RetrieveConnectivityInformationresponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ussd_info' => 'object',
        'subscriber_info' => 'object',
        'request_timestamp' => '\DateTime',
        'reply_timestamp' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ussd_info' => null,
        'subscriber_info' => null,
        'request_timestamp' => 'date-time',
        'reply_timestamp' => 'date-time'
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
        'ussd_info' => 'ussd_info',
        'subscriber_info' => 'subscriber_info',
        'request_timestamp' => 'request_timestamp',
        'reply_timestamp' => 'reply_timestamp'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ussd_info' => 'setUssdInfo',
        'subscriber_info' => 'setSubscriberInfo',
        'request_timestamp' => 'setRequestTimestamp',
        'reply_timestamp' => 'setReplyTimestamp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ussd_info' => 'getUssdInfo',
        'subscriber_info' => 'getSubscriberInfo',
        'request_timestamp' => 'getRequestTimestamp',
        'reply_timestamp' => 'getReplyTimestamp'
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
        $this->container['ussd_info'] = isset($data['ussd_info']) ? $data['ussd_info'] : null;
        $this->container['subscriber_info'] = isset($data['subscriber_info']) ? $data['subscriber_info'] : null;
        $this->container['request_timestamp'] = isset($data['request_timestamp']) ? $data['request_timestamp'] : null;
        $this->container['reply_timestamp'] = isset($data['reply_timestamp']) ? $data['reply_timestamp'] : null;
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
     * Gets ussd_info
     *
     * @return object
     */
    public function getUssdInfo()
    {
        return $this->container['ussd_info'];
    }

    /**
     * Sets ussd_info
     *
     * @param object $ussd_info ussd_info
     *
     * @return $this
     */
    public function setUssdInfo($ussd_info)
    {
        $this->container['ussd_info'] = $ussd_info;

        return $this;
    }

    /**
     * Gets subscriber_info
     *
     * @return object
     */
    public function getSubscriberInfo()
    {
        return $this->container['subscriber_info'];
    }

    /**
     * Sets subscriber_info
     *
     * @param object $subscriber_info subscriber_info
     *
     * @return $this
     */
    public function setSubscriberInfo($subscriber_info)
    {
        $this->container['subscriber_info'] = $subscriber_info;

        return $this;
    }

    /**
     * Gets request_timestamp
     *
     * @return string
     */
    public function getRequestTimestamp()
    {
        return $this->container['request_timestamp'];
    }

    /**
     * Sets request_timestamp
     *
     * @param string $request_timestamp request_timestamp
     *
     * @return $this
     */
    public function setRequestTimestamp($request_timestamp)
    {
        $this->container['request_timestamp'] = $request_timestamp;

        return $this;
    }

    /**
     * Gets reply_timestamp
     *
     * @return string
     */
    public function getReplyTimestamp()
    {
        return $this->container['reply_timestamp'];
    }

    /**
     * Sets reply_timestamp
     *
     * @param string $reply_timestamp reply_timestamp
     *
     * @return $this
     */
    public function setReplyTimestamp($reply_timestamp)
    {
        $this->container['reply_timestamp'] = $reply_timestamp;

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
