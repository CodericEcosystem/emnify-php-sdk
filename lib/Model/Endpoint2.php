<?php
/**
 * Endpoint2
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
 * Endpoint2 Class Doc Comment
 *
 * @category Class
 * @package  Emnify\EmnifySdk
 * @author   Coderic Development Team
 * @link     https://github.com/CodericEcosystem/emnify-php-sdk
 */
class Endpoint2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Endpoint_2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'tags' => 'string',
        'created' => '\DateTime',
        'last_updated' => '\DateTime',
        'status' => '\Emnify\EmnifySdk\Model\Status',
        'service_profile' => '\Emnify\EmnifySdk\Model\ServiceProfile',
        'tariff_profile' => '\Emnify\EmnifySdk\Model\TariffProfile',
        'ip_address' => 'string',
        'ip_address_space' => '\Emnify\EmnifySdk\Model\HasId',
        'sim' => '\Emnify\EmnifySdk\Model\Sim',
        'imei' => 'string',
        'imei_lock' => 'bool',
        'runtime_data' => '\Emnify\EmnifySdk\Model\EndpointRuntimeData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'name' => null,
        'tags' => null,
        'created' => 'date-time',
        'last_updated' => 'date-time',
        'status' => null,
        'service_profile' => null,
        'tariff_profile' => null,
        'ip_address' => null,
        'ip_address_space' => null,
        'sim' => null,
        'imei' => null,
        'imei_lock' => null,
        'runtime_data' => null
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
        'name' => 'name',
        'tags' => 'tags',
        'created' => 'created',
        'last_updated' => 'last_updated',
        'status' => 'status',
        'service_profile' => 'service_profile',
        'tariff_profile' => 'tariff_profile',
        'ip_address' => 'ip_address',
        'ip_address_space' => 'ip_address_space',
        'sim' => 'sim',
        'imei' => 'imei',
        'imei_lock' => 'imei_lock',
        'runtime_data' => 'runtime_data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'tags' => 'setTags',
        'created' => 'setCreated',
        'last_updated' => 'setLastUpdated',
        'status' => 'setStatus',
        'service_profile' => 'setServiceProfile',
        'tariff_profile' => 'setTariffProfile',
        'ip_address' => 'setIpAddress',
        'ip_address_space' => 'setIpAddressSpace',
        'sim' => 'setSim',
        'imei' => 'setImei',
        'imei_lock' => 'setImeiLock',
        'runtime_data' => 'setRuntimeData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'tags' => 'getTags',
        'created' => 'getCreated',
        'last_updated' => 'getLastUpdated',
        'status' => 'getStatus',
        'service_profile' => 'getServiceProfile',
        'tariff_profile' => 'getTariffProfile',
        'ip_address' => 'getIpAddress',
        'ip_address_space' => 'getIpAddressSpace',
        'sim' => 'getSim',
        'imei' => 'getImei',
        'imei_lock' => 'getImeiLock',
        'runtime_data' => 'getRuntimeData'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['last_updated'] = isset($data['last_updated']) ? $data['last_updated'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['service_profile'] = isset($data['service_profile']) ? $data['service_profile'] : null;
        $this->container['tariff_profile'] = isset($data['tariff_profile']) ? $data['tariff_profile'] : null;
        $this->container['ip_address'] = isset($data['ip_address']) ? $data['ip_address'] : null;
        $this->container['ip_address_space'] = isset($data['ip_address_space']) ? $data['ip_address_space'] : null;
        $this->container['sim'] = isset($data['sim']) ? $data['sim'] : null;
        $this->container['imei'] = isset($data['imei']) ? $data['imei'] : null;
        $this->container['imei_lock'] = isset($data['imei_lock']) ? $data['imei_lock'] : null;
        $this->container['runtime_data'] = isset($data['runtime_data']) ? $data['runtime_data'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['service_profile'] === null) {
            $invalidProperties[] = "'service_profile' can't be null";
        }
        if ($this->container['tariff_profile'] === null) {
            $invalidProperties[] = "'tariff_profile' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime $created created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

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
     * Gets status
     *
     * @return \Emnify\EmnifySdk\Model\Status
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Emnify\EmnifySdk\Model\Status $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets service_profile
     *
     * @return \Emnify\EmnifySdk\Model\ServiceProfile
     */
    public function getServiceProfile()
    {
        return $this->container['service_profile'];
    }

    /**
     * Sets service_profile
     *
     * @param \Emnify\EmnifySdk\Model\ServiceProfile $service_profile service_profile
     *
     * @return $this
     */
    public function setServiceProfile($service_profile)
    {
        $this->container['service_profile'] = $service_profile;

        return $this;
    }

    /**
     * Gets tariff_profile
     *
     * @return \Emnify\EmnifySdk\Model\TariffProfile
     */
    public function getTariffProfile()
    {
        return $this->container['tariff_profile'];
    }

    /**
     * Sets tariff_profile
     *
     * @param \Emnify\EmnifySdk\Model\TariffProfile $tariff_profile tariff_profile
     *
     * @return $this
     */
    public function setTariffProfile($tariff_profile)
    {
        $this->container['tariff_profile'] = $tariff_profile;

        return $this;
    }

    /**
     * Gets ip_address
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->container['ip_address'];
    }

    /**
     * Sets ip_address
     *
     * @param string $ip_address ip_address
     *
     * @return $this
     */
    public function setIpAddress($ip_address)
    {
        $this->container['ip_address'] = $ip_address;

        return $this;
    }

    /**
     * Gets ip_address_space
     *
     * @return \Emnify\EmnifySdk\Model\HasId
     */
    public function getIpAddressSpace()
    {
        return $this->container['ip_address_space'];
    }

    /**
     * Sets ip_address_space
     *
     * @param \Emnify\EmnifySdk\Model\HasId $ip_address_space ip_address_space
     *
     * @return $this
     */
    public function setIpAddressSpace($ip_address_space)
    {
        $this->container['ip_address_space'] = $ip_address_space;

        return $this;
    }

    /**
     * Gets sim
     *
     * @return \Emnify\EmnifySdk\Model\Sim
     */
    public function getSim()
    {
        return $this->container['sim'];
    }

    /**
     * Sets sim
     *
     * @param \Emnify\EmnifySdk\Model\Sim $sim sim
     *
     * @return $this
     */
    public function setSim($sim)
    {
        $this->container['sim'] = $sim;

        return $this;
    }

    /**
     * Gets imei
     *
     * @return string
     */
    public function getImei()
    {
        return $this->container['imei'];
    }

    /**
     * Sets imei
     *
     * @param string $imei imei
     *
     * @return $this
     */
    public function setImei($imei)
    {
        $this->container['imei'] = $imei;

        return $this;
    }

    /**
     * Gets imei_lock
     *
     * @return bool
     */
    public function getImeiLock()
    {
        return $this->container['imei_lock'];
    }

    /**
     * Sets imei_lock
     *
     * @param bool $imei_lock imei_lock
     *
     * @return $this
     */
    public function setImeiLock($imei_lock)
    {
        $this->container['imei_lock'] = $imei_lock;

        return $this;
    }

    /**
     * Gets runtime_data
     *
     * @return \Emnify\EmnifySdk\Model\EndpointRuntimeData
     */
    public function getRuntimeData()
    {
        return $this->container['runtime_data'];
    }

    /**
     * Sets runtime_data
     *
     * @param \Emnify\EmnifySdk\Model\EndpointRuntimeData $runtime_data runtime_data
     *
     * @return $this
     */
    public function setRuntimeData($runtime_data)
    {
        $this->container['runtime_data'] = $runtime_data;

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
