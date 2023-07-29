<?php
/**
 * CreateaServiceProfilerequest
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
 * CreateaServiceProfilerequest Class Doc Comment
 *
 * @category Class
 * @package  Emnify\EmnifySdk
 * @author   Coderic Development Team
 * @link     https://github.com/CodericEcosystem/emnify-php-sdk
 */
class CreateaServiceProfilerequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateaServiceProfilerequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'description' => 'string',
        'allowed_3g' => 'bool',
        'allowed_4g' => 'bool',
        'allowed_nb_iot' => 'bool',
        'apply_sms_quota' => 'bool',
        'apply_data_quota' => 'bool',
        'retail' => 'bool',
        'sms_p2p_int' => 'bool',
        'sms_p2p_ext' => 'bool',
        'prepaid' => 'bool',
        'nipdp' => 'bool',
        'api_callback' => 'object',
        'api_secret' => 'object',
        'moc_callback' => 'object',
        'esme_interface_type' => 'object',
        'breakout_region' => 'object',
        'dns' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'description' => null,
        'allowed_3g' => null,
        'allowed_4g' => null,
        'allowed_nb_iot' => null,
        'apply_sms_quota' => null,
        'apply_data_quota' => null,
        'retail' => null,
        'sms_p2p_int' => null,
        'sms_p2p_ext' => null,
        'prepaid' => null,
        'nipdp' => null,
        'api_callback' => null,
        'api_secret' => null,
        'moc_callback' => null,
        'esme_interface_type' => null,
        'breakout_region' => null,
        'dns' => null
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
        'name' => 'name',
        'description' => 'description',
        'allowed_3g' => 'allowed_3g',
        'allowed_4g' => 'allowed_4g',
        'allowed_nb_iot' => 'allowed_nb_iot',
        'apply_sms_quota' => 'apply_sms_quota',
        'apply_data_quota' => 'apply_data_quota',
        'retail' => 'retail',
        'sms_p2p_int' => 'sms_p2p_int',
        'sms_p2p_ext' => 'sms_p2p_ext',
        'prepaid' => 'prepaid',
        'nipdp' => 'nipdp',
        'api_callback' => 'api_callback',
        'api_secret' => 'api_secret',
        'moc_callback' => 'moc_callback',
        'esme_interface_type' => 'esme_interface_type',
        'breakout_region' => 'breakout_region',
        'dns' => 'dns'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'allowed_3g' => 'setAllowed3g',
        'allowed_4g' => 'setAllowed4g',
        'allowed_nb_iot' => 'setAllowedNbIot',
        'apply_sms_quota' => 'setApplySmsQuota',
        'apply_data_quota' => 'setApplyDataQuota',
        'retail' => 'setRetail',
        'sms_p2p_int' => 'setSmsP2pInt',
        'sms_p2p_ext' => 'setSmsP2pExt',
        'prepaid' => 'setPrepaid',
        'nipdp' => 'setNipdp',
        'api_callback' => 'setApiCallback',
        'api_secret' => 'setApiSecret',
        'moc_callback' => 'setMocCallback',
        'esme_interface_type' => 'setEsmeInterfaceType',
        'breakout_region' => 'setBreakoutRegion',
        'dns' => 'setDns'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'allowed_3g' => 'getAllowed3g',
        'allowed_4g' => 'getAllowed4g',
        'allowed_nb_iot' => 'getAllowedNbIot',
        'apply_sms_quota' => 'getApplySmsQuota',
        'apply_data_quota' => 'getApplyDataQuota',
        'retail' => 'getRetail',
        'sms_p2p_int' => 'getSmsP2pInt',
        'sms_p2p_ext' => 'getSmsP2pExt',
        'prepaid' => 'getPrepaid',
        'nipdp' => 'getNipdp',
        'api_callback' => 'getApiCallback',
        'api_secret' => 'getApiSecret',
        'moc_callback' => 'getMocCallback',
        'esme_interface_type' => 'getEsmeInterfaceType',
        'breakout_region' => 'getBreakoutRegion',
        'dns' => 'getDns'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['allowed_3g'] = isset($data['allowed_3g']) ? $data['allowed_3g'] : null;
        $this->container['allowed_4g'] = isset($data['allowed_4g']) ? $data['allowed_4g'] : null;
        $this->container['allowed_nb_iot'] = isset($data['allowed_nb_iot']) ? $data['allowed_nb_iot'] : null;
        $this->container['apply_sms_quota'] = isset($data['apply_sms_quota']) ? $data['apply_sms_quota'] : null;
        $this->container['apply_data_quota'] = isset($data['apply_data_quota']) ? $data['apply_data_quota'] : null;
        $this->container['retail'] = isset($data['retail']) ? $data['retail'] : null;
        $this->container['sms_p2p_int'] = isset($data['sms_p2p_int']) ? $data['sms_p2p_int'] : null;
        $this->container['sms_p2p_ext'] = isset($data['sms_p2p_ext']) ? $data['sms_p2p_ext'] : null;
        $this->container['prepaid'] = isset($data['prepaid']) ? $data['prepaid'] : null;
        $this->container['nipdp'] = isset($data['nipdp']) ? $data['nipdp'] : null;
        $this->container['api_callback'] = isset($data['api_callback']) ? $data['api_callback'] : null;
        $this->container['api_secret'] = isset($data['api_secret']) ? $data['api_secret'] : null;
        $this->container['moc_callback'] = isset($data['moc_callback']) ? $data['moc_callback'] : null;
        $this->container['esme_interface_type'] = isset($data['esme_interface_type']) ? $data['esme_interface_type'] : null;
        $this->container['breakout_region'] = isset($data['breakout_region']) ? $data['breakout_region'] : null;
        $this->container['dns'] = isset($data['dns']) ? $data['dns'] : null;
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
     * Gets allowed_3g
     *
     * @return bool
     */
    public function getAllowed3g()
    {
        return $this->container['allowed_3g'];
    }

    /**
     * Sets allowed_3g
     *
     * @param bool $allowed_3g allowed_3g
     *
     * @return $this
     */
    public function setAllowed3g($allowed_3g)
    {
        $this->container['allowed_3g'] = $allowed_3g;

        return $this;
    }

    /**
     * Gets allowed_4g
     *
     * @return bool
     */
    public function getAllowed4g()
    {
        return $this->container['allowed_4g'];
    }

    /**
     * Sets allowed_4g
     *
     * @param bool $allowed_4g allowed_4g
     *
     * @return $this
     */
    public function setAllowed4g($allowed_4g)
    {
        $this->container['allowed_4g'] = $allowed_4g;

        return $this;
    }

    /**
     * Gets allowed_nb_iot
     *
     * @return bool
     */
    public function getAllowedNbIot()
    {
        return $this->container['allowed_nb_iot'];
    }

    /**
     * Sets allowed_nb_iot
     *
     * @param bool $allowed_nb_iot allowed_nb_iot
     *
     * @return $this
     */
    public function setAllowedNbIot($allowed_nb_iot)
    {
        $this->container['allowed_nb_iot'] = $allowed_nb_iot;

        return $this;
    }

    /**
     * Gets apply_sms_quota
     *
     * @return bool
     */
    public function getApplySmsQuota()
    {
        return $this->container['apply_sms_quota'];
    }

    /**
     * Sets apply_sms_quota
     *
     * @param bool $apply_sms_quota apply_sms_quota
     *
     * @return $this
     */
    public function setApplySmsQuota($apply_sms_quota)
    {
        $this->container['apply_sms_quota'] = $apply_sms_quota;

        return $this;
    }

    /**
     * Gets apply_data_quota
     *
     * @return bool
     */
    public function getApplyDataQuota()
    {
        return $this->container['apply_data_quota'];
    }

    /**
     * Sets apply_data_quota
     *
     * @param bool $apply_data_quota apply_data_quota
     *
     * @return $this
     */
    public function setApplyDataQuota($apply_data_quota)
    {
        $this->container['apply_data_quota'] = $apply_data_quota;

        return $this;
    }

    /**
     * Gets retail
     *
     * @return bool
     */
    public function getRetail()
    {
        return $this->container['retail'];
    }

    /**
     * Sets retail
     *
     * @param bool $retail retail
     *
     * @return $this
     */
    public function setRetail($retail)
    {
        $this->container['retail'] = $retail;

        return $this;
    }

    /**
     * Gets sms_p2p_int
     *
     * @return bool
     */
    public function getSmsP2pInt()
    {
        return $this->container['sms_p2p_int'];
    }

    /**
     * Sets sms_p2p_int
     *
     * @param bool $sms_p2p_int sms_p2p_int
     *
     * @return $this
     */
    public function setSmsP2pInt($sms_p2p_int)
    {
        $this->container['sms_p2p_int'] = $sms_p2p_int;

        return $this;
    }

    /**
     * Gets sms_p2p_ext
     *
     * @return bool
     */
    public function getSmsP2pExt()
    {
        return $this->container['sms_p2p_ext'];
    }

    /**
     * Sets sms_p2p_ext
     *
     * @param bool $sms_p2p_ext sms_p2p_ext
     *
     * @return $this
     */
    public function setSmsP2pExt($sms_p2p_ext)
    {
        $this->container['sms_p2p_ext'] = $sms_p2p_ext;

        return $this;
    }

    /**
     * Gets prepaid
     *
     * @return bool
     */
    public function getPrepaid()
    {
        return $this->container['prepaid'];
    }

    /**
     * Sets prepaid
     *
     * @param bool $prepaid prepaid
     *
     * @return $this
     */
    public function setPrepaid($prepaid)
    {
        $this->container['prepaid'] = $prepaid;

        return $this;
    }

    /**
     * Gets nipdp
     *
     * @return bool
     */
    public function getNipdp()
    {
        return $this->container['nipdp'];
    }

    /**
     * Sets nipdp
     *
     * @param bool $nipdp nipdp
     *
     * @return $this
     */
    public function setNipdp($nipdp)
    {
        $this->container['nipdp'] = $nipdp;

        return $this;
    }

    /**
     * Gets api_callback
     *
     * @return object
     */
    public function getApiCallback()
    {
        return $this->container['api_callback'];
    }

    /**
     * Sets api_callback
     *
     * @param object $api_callback api_callback
     *
     * @return $this
     */
    public function setApiCallback($api_callback)
    {
        $this->container['api_callback'] = $api_callback;

        return $this;
    }

    /**
     * Gets api_secret
     *
     * @return object
     */
    public function getApiSecret()
    {
        return $this->container['api_secret'];
    }

    /**
     * Sets api_secret
     *
     * @param object $api_secret api_secret
     *
     * @return $this
     */
    public function setApiSecret($api_secret)
    {
        $this->container['api_secret'] = $api_secret;

        return $this;
    }

    /**
     * Gets moc_callback
     *
     * @return object
     */
    public function getMocCallback()
    {
        return $this->container['moc_callback'];
    }

    /**
     * Sets moc_callback
     *
     * @param object $moc_callback moc_callback
     *
     * @return $this
     */
    public function setMocCallback($moc_callback)
    {
        $this->container['moc_callback'] = $moc_callback;

        return $this;
    }

    /**
     * Gets esme_interface_type
     *
     * @return object
     */
    public function getEsmeInterfaceType()
    {
        return $this->container['esme_interface_type'];
    }

    /**
     * Sets esme_interface_type
     *
     * @param object $esme_interface_type esme_interface_type
     *
     * @return $this
     */
    public function setEsmeInterfaceType($esme_interface_type)
    {
        $this->container['esme_interface_type'] = $esme_interface_type;

        return $this;
    }

    /**
     * Gets breakout_region
     *
     * @return object
     */
    public function getBreakoutRegion()
    {
        return $this->container['breakout_region'];
    }

    /**
     * Sets breakout_region
     *
     * @param object $breakout_region breakout_region
     *
     * @return $this
     */
    public function setBreakoutRegion($breakout_region)
    {
        $this->container['breakout_region'] = $breakout_region;

        return $this;
    }

    /**
     * Gets dns
     *
     * @return object
     */
    public function getDns()
    {
        return $this->container['dns'];
    }

    /**
     * Sets dns
     *
     * @param object $dns dns
     *
     * @return $this
     */
    public function setDns($dns)
    {
        $this->container['dns'] = $dns;

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
