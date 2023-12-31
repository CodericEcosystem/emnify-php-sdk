<?php
/**
 * RetrieveEventsresponse
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
 * RetrieveEventsresponse Class Doc Comment
 *
 * @category Class
 * @package  Emnify\EmnifySdk
 * @author   Coderic Development Team
 * @link     https://github.com/CodericEcosystem/emnify-php-sdk
 */
class RetrieveEventsresponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RetrieveEventsresponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'timestamp' => '\DateTime',
        'alert' => 'bool',
        'description' => 'string',
        'id' => 'int',
        'event_type' => '\Emnify\EmnifySdk\Model\Apiv1eventEventType',
        'event_source' => '\Emnify\EmnifySdk\Model\Apiv1eventEventSource',
        'event_severity' => '\Emnify\EmnifySdk\Model\Apiv1eventEventSeverity',
        'organisation' => '\Emnify\EmnifySdk\Model\Apiv1eventOrganisation',
        'endpoint' => 'object',
        'sim' => '\Emnify\EmnifySdk\Model\SimEntry',
        'imsi' => '\Emnify\EmnifySdk\Model\ImsiEntry'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'timestamp' => 'date-time',
        'alert' => null,
        'description' => null,
        'id' => 'int32',
        'event_type' => null,
        'event_source' => null,
        'event_severity' => null,
        'organisation' => null,
        'endpoint' => null,
        'sim' => null,
        'imsi' => null
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
        'timestamp' => 'timestamp',
        'alert' => 'alert',
        'description' => 'description',
        'id' => 'id',
        'event_type' => 'event_type',
        'event_source' => 'event_source',
        'event_severity' => 'event_severity',
        'organisation' => 'organisation',
        'endpoint' => 'endpoint',
        'sim' => 'sim',
        'imsi' => 'imsi'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'timestamp' => 'setTimestamp',
        'alert' => 'setAlert',
        'description' => 'setDescription',
        'id' => 'setId',
        'event_type' => 'setEventType',
        'event_source' => 'setEventSource',
        'event_severity' => 'setEventSeverity',
        'organisation' => 'setOrganisation',
        'endpoint' => 'setEndpoint',
        'sim' => 'setSim',
        'imsi' => 'setImsi'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'timestamp' => 'getTimestamp',
        'alert' => 'getAlert',
        'description' => 'getDescription',
        'id' => 'getId',
        'event_type' => 'getEventType',
        'event_source' => 'getEventSource',
        'event_severity' => 'getEventSeverity',
        'organisation' => 'getOrganisation',
        'endpoint' => 'getEndpoint',
        'sim' => 'getSim',
        'imsi' => 'getImsi'
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
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['alert'] = isset($data['alert']) ? $data['alert'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['event_type'] = isset($data['event_type']) ? $data['event_type'] : null;
        $this->container['event_source'] = isset($data['event_source']) ? $data['event_source'] : null;
        $this->container['event_severity'] = isset($data['event_severity']) ? $data['event_severity'] : null;
        $this->container['organisation'] = isset($data['organisation']) ? $data['organisation'] : null;
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['sim'] = isset($data['sim']) ? $data['sim'] : null;
        $this->container['imsi'] = isset($data['imsi']) ? $data['imsi'] : null;
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
     * Gets timestamp
     *
     * @return string
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param string $timestamp timestamp
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets alert
     *
     * @return bool
     */
    public function getAlert()
    {
        return $this->container['alert'];
    }

    /**
     * Sets alert
     *
     * @param bool $alert alert
     *
     * @return $this
     */
    public function setAlert($alert)
    {
        $this->container['alert'] = $alert;

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
     * Gets event_type
     *
     * @return object
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     *
     * @param object $event_type event_type
     *
     * @return $this
     */
    public function setEventType($event_type)
    {
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets event_source
     *
     * @return object
     */
    public function getEventSource()
    {
        return $this->container['event_source'];
    }

    /**
     * Sets event_source
     *
     * @param object $event_source event_source
     *
     * @return $this
     */
    public function setEventSource($event_source)
    {
        $this->container['event_source'] = $event_source;

        return $this;
    }

    /**
     * Gets event_severity
     *
     * @return object
     */
    public function getEventSeverity()
    {
        return $this->container['event_severity'];
    }

    /**
     * Sets event_severity
     *
     * @param object $event_severity event_severity
     *
     * @return $this
     */
    public function setEventSeverity($event_severity)
    {
        $this->container['event_severity'] = $event_severity;

        return $this;
    }

    /**
     * Gets organisation
     *
     * @return object
     */
    public function getOrganisation()
    {
        return $this->container['organisation'];
    }

    /**
     * Sets organisation
     *
     * @param object $organisation organisation
     *
     * @return $this
     */
    public function setOrganisation($organisation)
    {
        $this->container['organisation'] = $organisation;

        return $this;
    }

    /**
     * Gets endpoint
     *
     * @return object
     */
    public function getEndpoint()
    {
        return $this->container['endpoint'];
    }

    /**
     * Sets endpoint
     *
     * @param object $endpoint endpoint
     *
     * @return $this
     */
    public function setEndpoint($endpoint)
    {
        $this->container['endpoint'] = $endpoint;

        return $this;
    }

    /**
     * Gets sim
     *
     * @return object
     */
    public function getSim()
    {
        return $this->container['sim'];
    }

    /**
     * Sets sim
     *
     * @param object $sim sim
     *
     * @return $this
     */
    public function setSim($sim)
    {
        $this->container['sim'] = $sim;

        return $this;
    }

    /**
     * Gets imsi
     *
     * @return object
     */
    public function getImsi()
    {
        return $this->container['imsi'];
    }

    /**
     * Sets imsi
     *
     * @param object $imsi imsi
     *
     * @return $this
     */
    public function setImsi($imsi)
    {
        $this->container['imsi'] = $imsi;

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
