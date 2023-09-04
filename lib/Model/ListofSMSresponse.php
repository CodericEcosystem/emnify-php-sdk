<?php

/**
 * ListofSMSresponse
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
 * ListofSMSresponse Class Doc Comment
 *
 * @category Class
 * @package  Emnify\EmnifySdk
 * @author   Coderic Development Team
 * @link     https://github.com/CodericEcosystem/emnify-php-sdk
 */
class ListofSMSresponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ListofSMSresponse';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'submit_date' => '\DateTime',
        'delivery_date' => '\DateTime',
        'expiry_date' => '\DateTime',
        'final_date' => '\DateTime',
        'retry_date' => '\DateTime',
        'last_delivery_attempt' => 'string',
        'retry_count' => 'string',
        'gsm_map_error' => 'string',
        'dcs' => 'int',
        'pid' => 'int',
        'source_address' => 'string',
        'endpoint' => 'object',
        'sim_id' => 'string',
        'iccid' => 'string',
        'msisdn' => 'string',
        'imsi' => 'string',
        'msc' => 'string',
        'udh' => 'string',
        'payload' => 'string',
        'id' => 'int',
        'status' => '\Emnify\EmnifySdk\Model\Status',
        'sms_type' => '\Emnify\EmnifySdk\Model\Status',
        'source_address_type' => '\Emnify\EmnifySdk\Model\Status'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'submit_date' => 'date-time',
        'delivery_date' => 'date-time',
        'expiry_date' => 'date-time',
        'final_date' => 'date-time',
        'retry_date' => 'date-time',
        'last_delivery_attempt' => null,
        'retry_count' => null,
        'gsm_map_error' => null,
        'dcs' => 'int32',
        'pid' => 'int32',
        'source_address' => null,
        'endpoint' => null,
        'sim_id' => null,
        'iccid' => null,
        'msisdn' => null,
        'imsi' => null,
        'msc' => null,
        'udh' => null,
        'payload' => null,
        'id' => 'int32',
        'status' => null,
        'sms_type' => null,
        'source_address_type' => null
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
        'submit_date' => 'submit_date',
        'delivery_date' => 'delivery_date',
        'expiry_date' => 'expiry_date',
        'final_date' => 'final_date',
        'retry_date' => 'retry_date',
        'last_delivery_attempt' => 'last_delivery_attempt',
        'retry_count' => 'retry_count',
        'gsm_map_error' => 'gsm_map_error',
        'dcs' => 'dcs',
        'pid' => 'pid',
        'source_address' => 'source_address',
        'endpoint' => 'endpoint',
        'sim_id' => 'sim_id',
        'iccid' => 'iccid',
        'msisdn' => 'msisdn',
        'imsi' => 'imsi',
        'msc' => 'msc',
        'udh' => 'udh',
        'payload' => 'payload',
        'id' => 'id',
        'status' => 'status',
        'sms_type' => 'sms_type',
        'source_address_type' => 'source_address_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'submit_date' => 'setSubmitDate',
        'delivery_date' => 'setDeliveryDate',
        'expiry_date' => 'setExpiryDate',
        'final_date' => 'setFinalDate',
        'retry_date' => 'setRetryDate',
        'last_delivery_attempt' => 'setLastDeliveryAttempt',
        'retry_count' => 'setRetryCount',
        'gsm_map_error' => 'setGsmMapError',
        'dcs' => 'setDcs',
        'pid' => 'setPid',
        'source_address' => 'setSourceAddress',
        'endpoint' => 'setEndpoint',
        'sim_id' => 'setSimId',
        'iccid' => 'setIccid',
        'msisdn' => 'setMsisdn',
        'imsi' => 'setImsi',
        'msc' => 'setMsc',
        'udh' => 'setUdh',
        'payload' => 'setPayload',
        'id' => 'setId',
        'status' => 'setStatus',
        'sms_type' => 'setSmsType',
        'source_address_type' => 'setSourceAddressType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'submit_date' => 'getSubmitDate',
        'delivery_date' => 'getDeliveryDate',
        'expiry_date' => 'getExpiryDate',
        'final_date' => 'getFinalDate',
        'retry_date' => 'getRetryDate',
        'last_delivery_attempt' => 'getLastDeliveryAttempt',
        'retry_count' => 'getRetryCount',
        'gsm_map_error' => 'getGsmMapError',
        'dcs' => 'getDcs',
        'pid' => 'getPid',
        'source_address' => 'getSourceAddress',
        'endpoint' => 'getEndpoint',
        'sim_id' => 'getSimId',
        'iccid' => 'getIccid',
        'msisdn' => 'getMsisdn',
        'imsi' => 'getImsi',
        'msc' => 'getMsc',
        'udh' => 'getUdh',
        'payload' => 'getPayload',
        'id' => 'getId',
        'status' => 'getStatus',
        'sms_type' => 'getSmsType',
        'source_address_type' => 'getSourceAddressType'
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
        $this->container['submit_date'] = isset($data['submit_date']) ? $data['submit_date'] : null;
        $this->container['delivery_date'] = isset($data['delivery_date']) ? $data['delivery_date'] : null;
        $this->container['expiry_date'] = isset($data['expiry_date']) ? $data['expiry_date'] : null;
        $this->container['final_date'] = isset($data['final_date']) ? $data['final_date'] : null;
        $this->container['retry_date'] = isset($data['retry_date']) ? $data['retry_date'] : null;
        $this->container['last_delivery_attempt'] = isset($data['last_delivery_attempt']) ? $data['last_delivery_attempt'] : null;
        $this->container['retry_count'] = isset($data['retry_count']) ? $data['retry_count'] : null;
        $this->container['gsm_map_error'] = isset($data['gsm_map_error']) ? $data['gsm_map_error'] : null;
        $this->container['dcs'] = isset($data['dcs']) ? $data['dcs'] : null;
        $this->container['pid'] = isset($data['pid']) ? $data['pid'] : null;
        $this->container['source_address'] = isset($data['source_address']) ? $data['source_address'] : null;
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['sim_id'] = isset($data['sim_id']) ? $data['sim_id'] : null;
        $this->container['iccid'] = isset($data['iccid']) ? $data['iccid'] : null;
        $this->container['msisdn'] = isset($data['msisdn']) ? $data['msisdn'] : null;
        $this->container['imsi'] = isset($data['imsi']) ? $data['imsi'] : null;
        $this->container['msc'] = isset($data['msc']) ? $data['msc'] : null;
        $this->container['udh'] = isset($data['udh']) ? $data['udh'] : null;
        $this->container['payload'] = isset($data['payload']) ? $data['payload'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['sms_type'] = isset($data['sms_type']) ? $data['sms_type'] : null;
        $this->container['source_address_type'] = isset($data['source_address_type']) ? $data['source_address_type'] : null;
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
     * Gets submit_date
     *
     * @return string
     */
    public function getSubmitDate()
    {
        return $this->container['submit_date'];
    }

    /**
     * Sets submit_date
     *
     * @param string $submit_date submit_date
     *
     * @return $this
     */
    public function setSubmitDate($submit_date)
    {
        $this->container['submit_date'] = $submit_date;

        return $this;
    }

    /**
     * Gets delivery_date
     *
     * @return string
     */
    public function getDeliveryDate()
    {
        return $this->container['delivery_date'];
    }

    /**
     * Sets delivery_date
     *
     * @param string $delivery_date delivery_date
     *
     * @return $this
     */
    public function setDeliveryDate($delivery_date)
    {
        $this->container['delivery_date'] = $delivery_date;

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
     * Gets final_date
     *
     * @return string
     */
    public function getFinalDate()
    {
        return $this->container['final_date'];
    }

    /**
     * Sets final_date
     *
     * @param string $final_date final_date
     *
     * @return $this
     */
    public function setFinalDate($final_date)
    {
        $this->container['final_date'] = $final_date;

        return $this;
    }

    /**
     * Gets retry_date
     *
     * @return string
     */
    public function getRetryDate()
    {
        return $this->container['retry_date'];
    }

    /**
     * Sets retry_date
     *
     * @param string $retry_date retry_date
     *
     * @return $this
     */
    public function setRetryDate($retry_date)
    {
        $this->container['retry_date'] = $retry_date;

        return $this;
    }

    /**
     * Gets last_delivery_attempt
     *
     * @return string
     */
    public function getLastDeliveryAttempt()
    {
        return $this->container['last_delivery_attempt'];
    }

    /**
     * Sets last_delivery_attempt
     *
     * @param string $last_delivery_attempt last_delivery_attempt
     *
     * @return $this
     */
    public function setLastDeliveryAttempt($last_delivery_attempt)
    {
        $this->container['last_delivery_attempt'] = $last_delivery_attempt;

        return $this;
    }

    /**
     * Gets retry_count
     *
     * @return string
     */
    public function getRetryCount()
    {
        return $this->container['retry_count'];
    }

    /**
     * Sets retry_count
     *
     * @param string $retry_count retry_count
     *
     * @return $this
     */
    public function setRetryCount($retry_count)
    {
        $this->container['retry_count'] = $retry_count;

        return $this;
    }

    /**
     * Gets gsm_map_error
     *
     * @return string
     */
    public function getGsmMapError()
    {
        return $this->container['gsm_map_error'];
    }

    /**
     * Sets gsm_map_error
     *
     * @param string $gsm_map_error gsm_map_error
     *
     * @return $this
     */
    public function setGsmMapError($gsm_map_error)
    {
        $this->container['gsm_map_error'] = $gsm_map_error;

        return $this;
    }

    /**
     * Gets dcs
     *
     * @return int
     */
    public function getDcs()
    {
        return $this->container['dcs'];
    }

    /**
     * Sets dcs
     *
     * @param int $dcs dcs
     *
     * @return $this
     */
    public function setDcs($dcs)
    {
        $this->container['dcs'] = $dcs;

        return $this;
    }

    /**
     * Gets pid
     *
     * @return int
     */
    public function getPid()
    {
        return $this->container['pid'];
    }

    /**
     * Sets pid
     *
     * @param int $pid pid
     *
     * @return $this
     */
    public function setPid($pid)
    {
        $this->container['pid'] = $pid;

        return $this;
    }

    /**
     * Gets source_address
     *
     * @return string
     */
    public function getSourceAddress()
    {
        return $this->container['source_address'];
    }

    /**
     * Sets source_address
     *
     * @param string $source_address source_address
     *
     * @return $this
     */
    public function setSourceAddress($source_address)
    {
        $this->container['source_address'] = $source_address;

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
     * Gets sim_id
     *
     * @return string
     */
    public function getSimId()
    {
        return $this->container['sim_id'];
    }

    /**
     * Sets sim_id
     *
     * @param string $sim_id sim_id
     *
     * @return $this
     */
    public function setSimId($sim_id)
    {
        $this->container['sim_id'] = $sim_id;

        return $this;
    }

    /**
     * Gets iccid
     *
     * @return string
     */
    public function getIccid()
    {
        return $this->container['iccid'];
    }

    /**
     * Sets iccid
     *
     * @param string $iccid iccid
     *
     * @return $this
     */
    public function setIccid($iccid)
    {
        $this->container['iccid'] = $iccid;

        return $this;
    }

    /**
     * Gets msisdn
     *
     * @return string
     */
    public function getMsisdn()
    {
        return $this->container['msisdn'];
    }

    /**
     * Sets msisdn
     *
     * @param string $msisdn msisdn
     *
     * @return $this
     */
    public function setMsisdn($msisdn)
    {
        $this->container['msisdn'] = $msisdn;

        return $this;
    }

    /**
     * Gets imsi
     *
     * @return string
     */
    public function getImsi()
    {
        return $this->container['imsi'];
    }

    /**
     * Sets imsi
     *
     * @param string $imsi imsi
     *
     * @return $this
     */
    public function setImsi($imsi)
    {
        $this->container['imsi'] = $imsi;

        return $this;
    }

    /**
     * Gets msc
     *
     * @return string
     */
    public function getMsc()
    {
        return $this->container['msc'];
    }

    /**
     * Sets msc
     *
     * @param string $msc msc
     *
     * @return $this
     */
    public function setMsc($msc)
    {
        $this->container['msc'] = $msc;

        return $this;
    }

    /**
     * Gets udh
     *
     * @return string
     */
    public function getUdh()
    {
        return $this->container['udh'];
    }

    /**
     * Sets udh
     *
     * @param string $udh udh
     *
     * @return $this
     */
    public function setUdh($udh)
    {
        $this->container['udh'] = $udh;

        return $this;
    }

    /**
     * Gets payload
     *
     * @return string
     */
    public function getPayload()
    {
        return $this->container['payload'];
    }

    /**
     * Sets payload
     *
     * @param string $payload payload
     *
     * @return $this
     */
    public function setPayload($payload)
    {
        $this->container['payload'] = $payload;

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
     * Gets status
     *
     * @return object
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param object $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets sms_type
     *
     * @return object
     */
    public function getSmsType()
    {
        return $this->container['sms_type'];
    }

    /**
     * Sets sms_type
     *
     * @param object $sms_type sms_type
     *
     * @return $this
     */
    public function setSmsType($sms_type)
    {
        $this->container['sms_type'] = $sms_type;

        return $this;
    }

    /**
     * Gets source_address_type
     *
     * @return object
     */
    public function getSourceAddressType()
    {
        return $this->container['source_address_type'];
    }

    /**
     * Sets source_address_type
     *
     * @param object $source_address_type source_address_type
     *
     * @return $this
     */
    public function setSourceAddressType($source_address_type)
    {
        $this->container['source_address_type'] = $source_address_type;

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
