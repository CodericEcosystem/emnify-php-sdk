<?php
/**
 * Apiv1simsimIdstatsLastMonthData
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
 * Apiv1simsimIdstatsLastMonthData Class Doc Comment
 *
 * @category Class
 * @package  Emnify\EmnifySdk
 * @author   Coderic Development Team
 * @link     https://github.com/CodericEcosystem/emnify-php-sdk
 */
class Apiv1simsimIdstatsLastMonthData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'apiv1simsim_idstats_last_month_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sim_id' => 'float',
        'month' => '\DateTime',
        'volume' => 'float',
        'volume_tx' => 'float',
        'volume_rx' => 'float',
        'traffic_type_id' => 'float',
        'last_updated' => '\DateTime',
        'cost' => 'float',
        'currency_id' => 'float',
        'id' => 'float',
        'traffic_type' => '\Emnify\EmnifySdk\Model\OrganisationDailyTrafficObjectTrafficType',
        'currency' => '\Emnify\EmnifySdk\Model\Currency'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sim_id' => null,
        'month' => 'date',
        'volume' => 'float',
        'volume_tx' => 'float',
        'volume_rx' => 'float',
        'traffic_type_id' => null,
        'last_updated' => 'date-time',
        'cost' => 'float',
        'currency_id' => null,
        'id' => null,
        'traffic_type' => null,
        'currency' => null
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
        'sim_id' => 'sim_id',
        'month' => 'month',
        'volume' => 'volume',
        'volume_tx' => 'volume_tx',
        'volume_rx' => 'volume_rx',
        'traffic_type_id' => 'traffic_type_id',
        'last_updated' => 'last_updated',
        'cost' => 'cost',
        'currency_id' => 'currency_id',
        'id' => 'id',
        'traffic_type' => 'traffic_type',
        'currency' => 'currency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sim_id' => 'setSimId',
        'month' => 'setMonth',
        'volume' => 'setVolume',
        'volume_tx' => 'setVolumeTx',
        'volume_rx' => 'setVolumeRx',
        'traffic_type_id' => 'setTrafficTypeId',
        'last_updated' => 'setLastUpdated',
        'cost' => 'setCost',
        'currency_id' => 'setCurrencyId',
        'id' => 'setId',
        'traffic_type' => 'setTrafficType',
        'currency' => 'setCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sim_id' => 'getSimId',
        'month' => 'getMonth',
        'volume' => 'getVolume',
        'volume_tx' => 'getVolumeTx',
        'volume_rx' => 'getVolumeRx',
        'traffic_type_id' => 'getTrafficTypeId',
        'last_updated' => 'getLastUpdated',
        'cost' => 'getCost',
        'currency_id' => 'getCurrencyId',
        'id' => 'getId',
        'traffic_type' => 'getTrafficType',
        'currency' => 'getCurrency'
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
        $this->container['sim_id'] = isset($data['sim_id']) ? $data['sim_id'] : null;
        $this->container['month'] = isset($data['month']) ? $data['month'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['volume_tx'] = isset($data['volume_tx']) ? $data['volume_tx'] : null;
        $this->container['volume_rx'] = isset($data['volume_rx']) ? $data['volume_rx'] : null;
        $this->container['traffic_type_id'] = isset($data['traffic_type_id']) ? $data['traffic_type_id'] : null;
        $this->container['last_updated'] = isset($data['last_updated']) ? $data['last_updated'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['currency_id'] = isset($data['currency_id']) ? $data['currency_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['traffic_type'] = isset($data['traffic_type']) ? $data['traffic_type'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
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
     * Gets sim_id
     *
     * @return float
     */
    public function getSimId()
    {
        return $this->container['sim_id'];
    }

    /**
     * Sets sim_id
     *
     * @param float $sim_id sim_id
     *
     * @return $this
     */
    public function setSimId($sim_id)
    {
        $this->container['sim_id'] = $sim_id;

        return $this;
    }

    /**
     * Gets month
     *
     * @return \DateTime
     */
    public function getMonth()
    {
        return $this->container['month'];
    }

    /**
     * Sets month
     *
     * @param \DateTime $month month
     *
     * @return $this
     */
    public function setMonth($month)
    {
        $this->container['month'] = $month;

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
     * Gets volume_tx
     *
     * @return float
     */
    public function getVolumeTx()
    {
        return $this->container['volume_tx'];
    }

    /**
     * Sets volume_tx
     *
     * @param float $volume_tx volume_tx
     *
     * @return $this
     */
    public function setVolumeTx($volume_tx)
    {
        $this->container['volume_tx'] = $volume_tx;

        return $this;
    }

    /**
     * Gets volume_rx
     *
     * @return float
     */
    public function getVolumeRx()
    {
        return $this->container['volume_rx'];
    }

    /**
     * Sets volume_rx
     *
     * @param float $volume_rx volume_rx
     *
     * @return $this
     */
    public function setVolumeRx($volume_rx)
    {
        $this->container['volume_rx'] = $volume_rx;

        return $this;
    }

    /**
     * Gets traffic_type_id
     *
     * @return float
     */
    public function getTrafficTypeId()
    {
        return $this->container['traffic_type_id'];
    }

    /**
     * Sets traffic_type_id
     *
     * @param float $traffic_type_id traffic_type_id
     *
     * @return $this
     */
    public function setTrafficTypeId($traffic_type_id)
    {
        $this->container['traffic_type_id'] = $traffic_type_id;

        return $this;
    }

    /**
     * Gets last_updated
     *
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        return $this->container['last_updated'];
    }

    /**
     * Sets last_updated
     *
     * @param \DateTime $last_updated last_updated
     *
     * @return $this
     */
    public function setLastUpdated($last_updated)
    {
        $this->container['last_updated'] = $last_updated;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return float
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param float $cost cost
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets currency_id
     *
     * @return float
     */
    public function getCurrencyId()
    {
        return $this->container['currency_id'];
    }

    /**
     * Sets currency_id
     *
     * @param float $currency_id currency_id
     *
     * @return $this
     */
    public function setCurrencyId($currency_id)
    {
        $this->container['currency_id'] = $currency_id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return float
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param float $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets traffic_type
     *
     * @return \Emnify\EmnifySdk\Model\OrganisationDailyTrafficObjectTrafficType
     */
    public function getTrafficType()
    {
        return $this->container['traffic_type'];
    }

    /**
     * Sets traffic_type
     *
     * @param \Emnify\EmnifySdk\Model\OrganisationDailyTrafficObjectTrafficType $traffic_type traffic_type
     *
     * @return $this
     */
    public function setTrafficType($traffic_type)
    {
        $this->container['traffic_type'] = $traffic_type;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \Emnify\EmnifySdk\Model\Currency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Emnify\EmnifySdk\Model\Currency $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

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
