<?php
/**
 * GetOrganisationActiveTariffPlanResponseTariffPlan
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
 * GetOrganisationActiveTariffPlanResponseTariffPlan Class Doc Comment
 *
 * @category Class
 * @package  Emnify\EmnifySdk
 * @author   Coderic Development Team
 * @link     https://github.com/CodericEcosystem/emnify-php-sdk
 */
class GetOrganisationActiveTariffPlanResponseTariffPlan implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetOrganisationActiveTariffPlanResponse_tariff_plan';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'description' => 'string',
        'creation_date' => 'string',
        'activation_date' => 'string',
        'deprecation_date' => 'string',
        'rate' => 'float',
        'yearly_rate' => 'float',
        'sim_activation_fee' => 'float',
        'max_active_sims' => 'float',
        'add_active_sims_rate' => 'float',
        'add_active_sim_batch' => 'float',
        'max_service_profiles' => 'float',
        'max_tariff_profiles' => 'float',
        'max_users' => 'float',
        'minimum_runtime' => 'float',
        'api_access_allowed' => 'bool',
        'vpn_access' => 'bool',
        'evaluation' => 'bool',
        'expiry_time' => 'float',
        'used_count' => 'float',
        'id' => 'float',
        'price' => '\Emnify\EmnifySdk\Model\GetOrganisationActiveTariffPlanResponseTariffPlanPrice',
        'currency' => '\Emnify\EmnifySdk\Model\Apiv1organisationorgIdtariffPlanTariffPlanCurrency'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'description' => null,
        'creation_date' => null,
        'activation_date' => null,
        'deprecation_date' => null,
        'rate' => null,
        'yearly_rate' => null,
        'sim_activation_fee' => null,
        'max_active_sims' => null,
        'add_active_sims_rate' => null,
        'add_active_sim_batch' => null,
        'max_service_profiles' => null,
        'max_tariff_profiles' => null,
        'max_users' => null,
        'minimum_runtime' => null,
        'api_access_allowed' => null,
        'vpn_access' => null,
        'evaluation' => null,
        'expiry_time' => null,
        'used_count' => null,
        'id' => null,
        'price' => null,
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
        'name' => 'name',
        'description' => 'description',
        'creation_date' => 'creation_date',
        'activation_date' => 'activation_date',
        'deprecation_date' => 'deprecation_date',
        'rate' => 'rate',
        'yearly_rate' => 'yearly_rate',
        'sim_activation_fee' => 'sim_activation_fee',
        'max_active_sims' => 'max_active_sims',
        'add_active_sims_rate' => 'add_active_sims_rate',
        'add_active_sim_batch' => 'add_active_sim_batch',
        'max_service_profiles' => 'max_service_profiles',
        'max_tariff_profiles' => 'max_tariff_profiles',
        'max_users' => 'max_users',
        'minimum_runtime' => 'minimum_runtime',
        'api_access_allowed' => 'api_access_allowed',
        'vpn_access' => 'vpn_access',
        'evaluation' => 'evaluation',
        'expiry_time' => 'expiry_time',
        'used_count' => 'used_count',
        'id' => 'id',
        'price' => 'price',
        'currency' => 'currency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'creation_date' => 'setCreationDate',
        'activation_date' => 'setActivationDate',
        'deprecation_date' => 'setDeprecationDate',
        'rate' => 'setRate',
        'yearly_rate' => 'setYearlyRate',
        'sim_activation_fee' => 'setSimActivationFee',
        'max_active_sims' => 'setMaxActiveSims',
        'add_active_sims_rate' => 'setAddActiveSimsRate',
        'add_active_sim_batch' => 'setAddActiveSimBatch',
        'max_service_profiles' => 'setMaxServiceProfiles',
        'max_tariff_profiles' => 'setMaxTariffProfiles',
        'max_users' => 'setMaxUsers',
        'minimum_runtime' => 'setMinimumRuntime',
        'api_access_allowed' => 'setApiAccessAllowed',
        'vpn_access' => 'setVpnAccess',
        'evaluation' => 'setEvaluation',
        'expiry_time' => 'setExpiryTime',
        'used_count' => 'setUsedCount',
        'id' => 'setId',
        'price' => 'setPrice',
        'currency' => 'setCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'creation_date' => 'getCreationDate',
        'activation_date' => 'getActivationDate',
        'deprecation_date' => 'getDeprecationDate',
        'rate' => 'getRate',
        'yearly_rate' => 'getYearlyRate',
        'sim_activation_fee' => 'getSimActivationFee',
        'max_active_sims' => 'getMaxActiveSims',
        'add_active_sims_rate' => 'getAddActiveSimsRate',
        'add_active_sim_batch' => 'getAddActiveSimBatch',
        'max_service_profiles' => 'getMaxServiceProfiles',
        'max_tariff_profiles' => 'getMaxTariffProfiles',
        'max_users' => 'getMaxUsers',
        'minimum_runtime' => 'getMinimumRuntime',
        'api_access_allowed' => 'getApiAccessAllowed',
        'vpn_access' => 'getVpnAccess',
        'evaluation' => 'getEvaluation',
        'expiry_time' => 'getExpiryTime',
        'used_count' => 'getUsedCount',
        'id' => 'getId',
        'price' => 'getPrice',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['activation_date'] = isset($data['activation_date']) ? $data['activation_date'] : null;
        $this->container['deprecation_date'] = isset($data['deprecation_date']) ? $data['deprecation_date'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
        $this->container['yearly_rate'] = isset($data['yearly_rate']) ? $data['yearly_rate'] : null;
        $this->container['sim_activation_fee'] = isset($data['sim_activation_fee']) ? $data['sim_activation_fee'] : null;
        $this->container['max_active_sims'] = isset($data['max_active_sims']) ? $data['max_active_sims'] : null;
        $this->container['add_active_sims_rate'] = isset($data['add_active_sims_rate']) ? $data['add_active_sims_rate'] : null;
        $this->container['add_active_sim_batch'] = isset($data['add_active_sim_batch']) ? $data['add_active_sim_batch'] : null;
        $this->container['max_service_profiles'] = isset($data['max_service_profiles']) ? $data['max_service_profiles'] : null;
        $this->container['max_tariff_profiles'] = isset($data['max_tariff_profiles']) ? $data['max_tariff_profiles'] : null;
        $this->container['max_users'] = isset($data['max_users']) ? $data['max_users'] : null;
        $this->container['minimum_runtime'] = isset($data['minimum_runtime']) ? $data['minimum_runtime'] : null;
        $this->container['api_access_allowed'] = isset($data['api_access_allowed']) ? $data['api_access_allowed'] : null;
        $this->container['vpn_access'] = isset($data['vpn_access']) ? $data['vpn_access'] : null;
        $this->container['evaluation'] = isset($data['evaluation']) ? $data['evaluation'] : null;
        $this->container['expiry_time'] = isset($data['expiry_time']) ? $data['expiry_time'] : null;
        $this->container['used_count'] = isset($data['used_count']) ? $data['used_count'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
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
     * Gets creation_date
     *
     * @return string
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param string $creation_date creation_date
     *
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets activation_date
     *
     * @return string
     */
    public function getActivationDate()
    {
        return $this->container['activation_date'];
    }

    /**
     * Sets activation_date
     *
     * @param string $activation_date activation_date
     *
     * @return $this
     */
    public function setActivationDate($activation_date)
    {
        $this->container['activation_date'] = $activation_date;

        return $this;
    }

    /**
     * Gets deprecation_date
     *
     * @return string
     */
    public function getDeprecationDate()
    {
        return $this->container['deprecation_date'];
    }

    /**
     * Sets deprecation_date
     *
     * @param string $deprecation_date deprecation_date
     *
     * @return $this
     */
    public function setDeprecationDate($deprecation_date)
    {
        $this->container['deprecation_date'] = $deprecation_date;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return float
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param float $rate rate
     *
     * @return $this
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets yearly_rate
     *
     * @return float
     */
    public function getYearlyRate()
    {
        return $this->container['yearly_rate'];
    }

    /**
     * Sets yearly_rate
     *
     * @param float $yearly_rate yearly_rate
     *
     * @return $this
     */
    public function setYearlyRate($yearly_rate)
    {
        $this->container['yearly_rate'] = $yearly_rate;

        return $this;
    }

    /**
     * Gets sim_activation_fee
     *
     * @return float
     */
    public function getSimActivationFee()
    {
        return $this->container['sim_activation_fee'];
    }

    /**
     * Sets sim_activation_fee
     *
     * @param float $sim_activation_fee sim_activation_fee
     *
     * @return $this
     */
    public function setSimActivationFee($sim_activation_fee)
    {
        $this->container['sim_activation_fee'] = $sim_activation_fee;

        return $this;
    }

    /**
     * Gets max_active_sims
     *
     * @return float
     */
    public function getMaxActiveSims()
    {
        return $this->container['max_active_sims'];
    }

    /**
     * Sets max_active_sims
     *
     * @param float $max_active_sims max_active_sims
     *
     * @return $this
     */
    public function setMaxActiveSims($max_active_sims)
    {
        $this->container['max_active_sims'] = $max_active_sims;

        return $this;
    }

    /**
     * Gets add_active_sims_rate
     *
     * @return float
     */
    public function getAddActiveSimsRate()
    {
        return $this->container['add_active_sims_rate'];
    }

    /**
     * Sets add_active_sims_rate
     *
     * @param float $add_active_sims_rate add_active_sims_rate
     *
     * @return $this
     */
    public function setAddActiveSimsRate($add_active_sims_rate)
    {
        $this->container['add_active_sims_rate'] = $add_active_sims_rate;

        return $this;
    }

    /**
     * Gets add_active_sim_batch
     *
     * @return float
     */
    public function getAddActiveSimBatch()
    {
        return $this->container['add_active_sim_batch'];
    }

    /**
     * Sets add_active_sim_batch
     *
     * @param float $add_active_sim_batch add_active_sim_batch
     *
     * @return $this
     */
    public function setAddActiveSimBatch($add_active_sim_batch)
    {
        $this->container['add_active_sim_batch'] = $add_active_sim_batch;

        return $this;
    }

    /**
     * Gets max_service_profiles
     *
     * @return float
     */
    public function getMaxServiceProfiles()
    {
        return $this->container['max_service_profiles'];
    }

    /**
     * Sets max_service_profiles
     *
     * @param float $max_service_profiles max_service_profiles
     *
     * @return $this
     */
    public function setMaxServiceProfiles($max_service_profiles)
    {
        $this->container['max_service_profiles'] = $max_service_profiles;

        return $this;
    }

    /**
     * Gets max_tariff_profiles
     *
     * @return float
     */
    public function getMaxTariffProfiles()
    {
        return $this->container['max_tariff_profiles'];
    }

    /**
     * Sets max_tariff_profiles
     *
     * @param float $max_tariff_profiles max_tariff_profiles
     *
     * @return $this
     */
    public function setMaxTariffProfiles($max_tariff_profiles)
    {
        $this->container['max_tariff_profiles'] = $max_tariff_profiles;

        return $this;
    }

    /**
     * Gets max_users
     *
     * @return float
     */
    public function getMaxUsers()
    {
        return $this->container['max_users'];
    }

    /**
     * Sets max_users
     *
     * @param float $max_users max_users
     *
     * @return $this
     */
    public function setMaxUsers($max_users)
    {
        $this->container['max_users'] = $max_users;

        return $this;
    }

    /**
     * Gets minimum_runtime
     *
     * @return float
     */
    public function getMinimumRuntime()
    {
        return $this->container['minimum_runtime'];
    }

    /**
     * Sets minimum_runtime
     *
     * @param float $minimum_runtime minimum_runtime
     *
     * @return $this
     */
    public function setMinimumRuntime($minimum_runtime)
    {
        $this->container['minimum_runtime'] = $minimum_runtime;

        return $this;
    }

    /**
     * Gets api_access_allowed
     *
     * @return bool
     */
    public function getApiAccessAllowed()
    {
        return $this->container['api_access_allowed'];
    }

    /**
     * Sets api_access_allowed
     *
     * @param bool $api_access_allowed api_access_allowed
     *
     * @return $this
     */
    public function setApiAccessAllowed($api_access_allowed)
    {
        $this->container['api_access_allowed'] = $api_access_allowed;

        return $this;
    }

    /**
     * Gets vpn_access
     *
     * @return bool
     */
    public function getVpnAccess()
    {
        return $this->container['vpn_access'];
    }

    /**
     * Sets vpn_access
     *
     * @param bool $vpn_access vpn_access
     *
     * @return $this
     */
    public function setVpnAccess($vpn_access)
    {
        $this->container['vpn_access'] = $vpn_access;

        return $this;
    }

    /**
     * Gets evaluation
     *
     * @return bool
     */
    public function getEvaluation()
    {
        return $this->container['evaluation'];
    }

    /**
     * Sets evaluation
     *
     * @param bool $evaluation evaluation
     *
     * @return $this
     */
    public function setEvaluation($evaluation)
    {
        $this->container['evaluation'] = $evaluation;

        return $this;
    }

    /**
     * Gets expiry_time
     *
     * @return float
     */
    public function getExpiryTime()
    {
        return $this->container['expiry_time'];
    }

    /**
     * Sets expiry_time
     *
     * @param float $expiry_time expiry_time
     *
     * @return $this
     */
    public function setExpiryTime($expiry_time)
    {
        $this->container['expiry_time'] = $expiry_time;

        return $this;
    }

    /**
     * Gets used_count
     *
     * @return float
     */
    public function getUsedCount()
    {
        return $this->container['used_count'];
    }

    /**
     * Sets used_count
     *
     * @param float $used_count used_count
     *
     * @return $this
     */
    public function setUsedCount($used_count)
    {
        $this->container['used_count'] = $used_count;

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
     * Gets price
     *
     * @return \Emnify\EmnifySdk\Model\GetOrganisationActiveTariffPlanResponseTariffPlanPrice
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \Emnify\EmnifySdk\Model\GetOrganisationActiveTariffPlanResponseTariffPlanPrice $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \Emnify\EmnifySdk\Model\Apiv1organisationorgIdtariffPlanTariffPlanCurrency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Emnify\EmnifySdk\Model\Apiv1organisationorgIdtariffPlanTariffPlanCurrency $currency currency
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
