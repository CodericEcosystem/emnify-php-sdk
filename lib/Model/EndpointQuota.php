<?php
/**
 * EndpointQuota
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
 * EndpointQuota Class Doc Comment
 *
 * @category Class
 * @package  Emnify\EmnifySdk
 * @author   Coderic Development Team
 * @link     https://github.com/CodericEcosystem/emnify-php-sdk
 */
class EndpointQuota implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EndpointQuota';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'last_volume_added' => 'float',
        'last_status_change_date' => 'string',
        'auto_refill' => 'int',
        'threshold_volume' => 'float',
        'threshold_percentage' => 'float',
        'status' => '\Emnify\EmnifySdk\Model\QuotaStatus',
        'volume' => 'float',
        'expiry_date' => 'string',
        'action_on_exhaustion' => '\Emnify\EmnifySdk\Model\ActionOnExhaustion',
        'peak_throughput' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'last_volume_added' => 'float',
        'last_status_change_date' => null,
        'auto_refill' => 'int32',
        'threshold_volume' => 'float',
        'threshold_percentage' => 'float',
        'status' => null,
        'volume' => 'float',
        'expiry_date' => null,
        'action_on_exhaustion' => null,
        'peak_throughput' => 'int32'
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
        'last_volume_added' => 'last_volume_added',
        'last_status_change_date' => 'last_status_change_date',
        'auto_refill' => 'auto_refill',
        'threshold_volume' => 'threshold_volume',
        'threshold_percentage' => 'threshold_percentage',
        'status' => 'status',
        'volume' => 'volume',
        'expiry_date' => 'expiry_date',
        'action_on_exhaustion' => 'action_on_exhaustion',
        'peak_throughput' => 'peak_throughput'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'last_volume_added' => 'setLastVolumeAdded',
        'last_status_change_date' => 'setLastStatusChangeDate',
        'auto_refill' => 'setAutoRefill',
        'threshold_volume' => 'setThresholdVolume',
        'threshold_percentage' => 'setThresholdPercentage',
        'status' => 'setStatus',
        'volume' => 'setVolume',
        'expiry_date' => 'setExpiryDate',
        'action_on_exhaustion' => 'setActionOnExhaustion',
        'peak_throughput' => 'setPeakThroughput'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'last_volume_added' => 'getLastVolumeAdded',
        'last_status_change_date' => 'getLastStatusChangeDate',
        'auto_refill' => 'getAutoRefill',
        'threshold_volume' => 'getThresholdVolume',
        'threshold_percentage' => 'getThresholdPercentage',
        'status' => 'getStatus',
        'volume' => 'getVolume',
        'expiry_date' => 'getExpiryDate',
        'action_on_exhaustion' => 'getActionOnExhaustion',
        'peak_throughput' => 'getPeakThroughput'
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
        $this->container['last_volume_added'] = isset($data['last_volume_added']) ? $data['last_volume_added'] : null;
        $this->container['last_status_change_date'] = isset($data['last_status_change_date']) ? $data['last_status_change_date'] : null;
        $this->container['auto_refill'] = isset($data['auto_refill']) ? $data['auto_refill'] : null;
        $this->container['threshold_volume'] = isset($data['threshold_volume']) ? $data['threshold_volume'] : null;
        $this->container['threshold_percentage'] = isset($data['threshold_percentage']) ? $data['threshold_percentage'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['expiry_date'] = isset($data['expiry_date']) ? $data['expiry_date'] : null;
        $this->container['action_on_exhaustion'] = isset($data['action_on_exhaustion']) ? $data['action_on_exhaustion'] : null;
        $this->container['peak_throughput'] = isset($data['peak_throughput']) ? $data['peak_throughput'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['volume'] === null) {
            $invalidProperties[] = "'volume' can't be null";
        }
        if ($this->container['expiry_date'] === null) {
            $invalidProperties[] = "'expiry_date' can't be null";
        }
        if ($this->container['action_on_exhaustion'] === null) {
            $invalidProperties[] = "'action_on_exhaustion' can't be null";
        }
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
     * Gets last_volume_added
     *
     * @return float
     */
    public function getLastVolumeAdded()
    {
        return $this->container['last_volume_added'];
    }

    /**
     * Sets last_volume_added
     *
     * @param float $last_volume_added last_volume_added
     *
     * @return $this
     */
    public function setLastVolumeAdded($last_volume_added)
    {
        $this->container['last_volume_added'] = $last_volume_added;

        return $this;
    }

    /**
     * Gets last_status_change_date
     *
     * @return string
     */
    public function getLastStatusChangeDate()
    {
        return $this->container['last_status_change_date'];
    }

    /**
     * Sets last_status_change_date
     *
     * @param string $last_status_change_date last_status_change_date
     *
     * @return $this
     */
    public function setLastStatusChangeDate($last_status_change_date)
    {
        $this->container['last_status_change_date'] = $last_status_change_date;

        return $this;
    }

    /**
     * Gets auto_refill
     *
     * @return int
     */
    public function getAutoRefill()
    {
        return $this->container['auto_refill'];
    }

    /**
     * Sets auto_refill
     *
     * @param int $auto_refill auto_refill
     *
     * @return $this
     */
    public function setAutoRefill($auto_refill)
    {
        $this->container['auto_refill'] = $auto_refill;

        return $this;
    }

    /**
     * Gets threshold_volume
     *
     * @return float
     */
    public function getThresholdVolume()
    {
        return $this->container['threshold_volume'];
    }

    /**
     * Sets threshold_volume
     *
     * @param float $threshold_volume threshold_volume
     *
     * @return $this
     */
    public function setThresholdVolume($threshold_volume)
    {
        $this->container['threshold_volume'] = $threshold_volume;

        return $this;
    }

    /**
     * Gets threshold_percentage
     *
     * @return float
     */
    public function getThresholdPercentage()
    {
        return $this->container['threshold_percentage'];
    }

    /**
     * Sets threshold_percentage
     *
     * @param float $threshold_percentage threshold_percentage
     *
     * @return $this
     */
    public function setThresholdPercentage($threshold_percentage)
    {
        $this->container['threshold_percentage'] = $threshold_percentage;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Emnify\EmnifySdk\Model\QuotaStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Emnify\EmnifySdk\Model\QuotaStatus $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets volume
     *
     * @return float
     */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
     * Sets volume
     *
     * @param float $volume volume
     *
     * @return $this
     */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;

        return $this;
    }

    /**
     * Gets expiry_date
     *
     * @return string
     */
    public function getExpiryDate()
    {
        return $this->container['expiry_date'];
    }

    /**
     * Sets expiry_date
     *
     * @param string $expiry_date expiry_date
     *
     * @return $this
     */
    public function setExpiryDate($expiry_date)
    {
        $this->container['expiry_date'] = $expiry_date;

        return $this;
    }

    /**
     * Gets action_on_exhaustion
     *
     * @return \Emnify\EmnifySdk\Model\ActionOnExhaustion
     */
    public function getActionOnExhaustion()
    {
        return $this->container['action_on_exhaustion'];
    }

    /**
     * Sets action_on_exhaustion
     *
     * @param \Emnify\EmnifySdk\Model\ActionOnExhaustion $action_on_exhaustion action_on_exhaustion
     *
     * @return $this
     */
    public function setActionOnExhaustion($action_on_exhaustion)
    {
        $this->container['action_on_exhaustion'] = $action_on_exhaustion;

        return $this;
    }

    /**
     * Gets peak_throughput
     *
     * @return int
     */
    public function getPeakThroughput()
    {
        return $this->container['peak_throughput'];
    }

    /**
     * Sets peak_throughput
     *
     * @param int $peak_throughput peak_throughput
     *
     * @return $this
     */
    public function setPeakThroughput($peak_throughput)
    {
        $this->container['peak_throughput'] = $peak_throughput;

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