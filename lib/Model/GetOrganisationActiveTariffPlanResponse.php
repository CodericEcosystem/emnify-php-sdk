<?php
/**
 * GetOrganisationActiveTariffPlanResponse
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
 * GetOrganisationActiveTariffPlanResponse Class Doc Comment
 *
 * @category Class
 * @package  Emnify\EmnifySdk
 * @author   Coderic Development Team
 * @link     https://github.com/CodericEcosystem/emnify-php-sdk
 */
class GetOrganisationActiveTariffPlanResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetOrganisationActiveTariffPlanResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'organisation_id' => 'float',
        'start_date' => 'string',
        'expiry_date' => 'string',
        'sim_activated_rate' => 'float',
        'sim_activated_idle_rate' => 'float',
        'sim_suspended_rate' => 'float',
        'sim_suspended_active_rate' => 'float',
        'sim_activated_amount' => 'float',
        'applied_price' => '\Emnify\EmnifySdk\Model\GetOrganisationActiveTariffPlanResponseAppliedPrice',
        'tariff_plan' => '\Emnify\EmnifySdk\Model\GetOrganisationActiveTariffPlanResponseTariffPlan',
        'tariff_plan_runtime' => '\Emnify\EmnifySdk\Model\GetOrganisationActiveTariffPlanResponseTariffPlanRuntime',
        'active' => 'bool',
        'applied_rate' => 'float',
        'id' => 'float',
        'service_level' => '\Emnify\EmnifySdk\Model\Apiv1organisationorgIdtariffPlanTariffPlanServiceLevel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'organisation_id' => null,
        'start_date' => null,
        'expiry_date' => null,
        'sim_activated_rate' => null,
        'sim_activated_idle_rate' => null,
        'sim_suspended_rate' => null,
        'sim_suspended_active_rate' => null,
        'sim_activated_amount' => null,
        'applied_price' => null,
        'tariff_plan' => null,
        'tariff_plan_runtime' => null,
        'active' => null,
        'applied_rate' => null,
        'id' => null,
        'service_level' => null
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
        'organisation_id' => 'organisation_id',
        'start_date' => 'start_date',
        'expiry_date' => 'expiry_date',
        'sim_activated_rate' => 'sim_activated_rate',
        'sim_activated_idle_rate' => 'sim_activated_idle_rate',
        'sim_suspended_rate' => 'sim_suspended_rate',
        'sim_suspended_active_rate' => 'sim_suspended_active_rate',
        'sim_activated_amount' => 'sim_activated_amount',
        'applied_price' => 'applied_price',
        'tariff_plan' => 'tariff_plan',
        'tariff_plan_runtime' => 'tariff_plan_runtime',
        'active' => 'active',
        'applied_rate' => 'applied_rate',
        'id' => 'id',
        'service_level' => 'service_level'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'organisation_id' => 'setOrganisationId',
        'start_date' => 'setStartDate',
        'expiry_date' => 'setExpiryDate',
        'sim_activated_rate' => 'setSimActivatedRate',
        'sim_activated_idle_rate' => 'setSimActivatedIdleRate',
        'sim_suspended_rate' => 'setSimSuspendedRate',
        'sim_suspended_active_rate' => 'setSimSuspendedActiveRate',
        'sim_activated_amount' => 'setSimActivatedAmount',
        'applied_price' => 'setAppliedPrice',
        'tariff_plan' => 'setTariffPlan',
        'tariff_plan_runtime' => 'setTariffPlanRuntime',
        'active' => 'setActive',
        'applied_rate' => 'setAppliedRate',
        'id' => 'setId',
        'service_level' => 'setServiceLevel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'organisation_id' => 'getOrganisationId',
        'start_date' => 'getStartDate',
        'expiry_date' => 'getExpiryDate',
        'sim_activated_rate' => 'getSimActivatedRate',
        'sim_activated_idle_rate' => 'getSimActivatedIdleRate',
        'sim_suspended_rate' => 'getSimSuspendedRate',
        'sim_suspended_active_rate' => 'getSimSuspendedActiveRate',
        'sim_activated_amount' => 'getSimActivatedAmount',
        'applied_price' => 'getAppliedPrice',
        'tariff_plan' => 'getTariffPlan',
        'tariff_plan_runtime' => 'getTariffPlanRuntime',
        'active' => 'getActive',
        'applied_rate' => 'getAppliedRate',
        'id' => 'getId',
        'service_level' => 'getServiceLevel'
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
        $this->container['organisation_id'] = isset($data['organisation_id']) ? $data['organisation_id'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['expiry_date'] = isset($data['expiry_date']) ? $data['expiry_date'] : null;
        $this->container['sim_activated_rate'] = isset($data['sim_activated_rate']) ? $data['sim_activated_rate'] : null;
        $this->container['sim_activated_idle_rate'] = isset($data['sim_activated_idle_rate']) ? $data['sim_activated_idle_rate'] : null;
        $this->container['sim_suspended_rate'] = isset($data['sim_suspended_rate']) ? $data['sim_suspended_rate'] : null;
        $this->container['sim_suspended_active_rate'] = isset($data['sim_suspended_active_rate']) ? $data['sim_suspended_active_rate'] : null;
        $this->container['sim_activated_amount'] = isset($data['sim_activated_amount']) ? $data['sim_activated_amount'] : null;
        $this->container['applied_price'] = isset($data['applied_price']) ? $data['applied_price'] : null;
        $this->container['tariff_plan'] = isset($data['tariff_plan']) ? $data['tariff_plan'] : null;
        $this->container['tariff_plan_runtime'] = isset($data['tariff_plan_runtime']) ? $data['tariff_plan_runtime'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['applied_rate'] = isset($data['applied_rate']) ? $data['applied_rate'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['service_level'] = isset($data['service_level']) ? $data['service_level'] : null;
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
     * Gets organisation_id
     *
     * @return float
     */
    public function getOrganisationId()
    {
        return $this->container['organisation_id'];
    }

    /**
     * Sets organisation_id
     *
     * @param float $organisation_id organisation_id
     *
     * @return $this
     */
    public function setOrganisationId($organisation_id)
    {
        $this->container['organisation_id'] = $organisation_id;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param string $start_date start_date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

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
     * @param string $expiry_date the end date of the tariff_plan, or null if it is open end
     *
     * @return $this
     */
    public function setExpiryDate($expiry_date)
    {
        $this->container['expiry_date'] = $expiry_date;

        return $this;
    }

    /**
     * Gets sim_activated_rate
     *
     * @return float
     */
    public function getSimActivatedRate()
    {
        return $this->container['sim_activated_rate'];
    }

    /**
     * Sets sim_activated_rate
     *
     * @param float $sim_activated_rate sim_activated_rate
     *
     * @return $this
     */
    public function setSimActivatedRate($sim_activated_rate)
    {
        $this->container['sim_activated_rate'] = $sim_activated_rate;

        return $this;
    }

    /**
     * Gets sim_activated_idle_rate
     *
     * @return float
     */
    public function getSimActivatedIdleRate()
    {
        return $this->container['sim_activated_idle_rate'];
    }

    /**
     * Sets sim_activated_idle_rate
     *
     * @param float $sim_activated_idle_rate sim_activated_idle_rate
     *
     * @return $this
     */
    public function setSimActivatedIdleRate($sim_activated_idle_rate)
    {
        $this->container['sim_activated_idle_rate'] = $sim_activated_idle_rate;

        return $this;
    }

    /**
     * Gets sim_suspended_rate
     *
     * @return float
     */
    public function getSimSuspendedRate()
    {
        return $this->container['sim_suspended_rate'];
    }

    /**
     * Sets sim_suspended_rate
     *
     * @param float $sim_suspended_rate sim_suspended_rate
     *
     * @return $this
     */
    public function setSimSuspendedRate($sim_suspended_rate)
    {
        $this->container['sim_suspended_rate'] = $sim_suspended_rate;

        return $this;
    }

    /**
     * Gets sim_suspended_active_rate
     *
     * @return float
     */
    public function getSimSuspendedActiveRate()
    {
        return $this->container['sim_suspended_active_rate'];
    }

    /**
     * Sets sim_suspended_active_rate
     *
     * @param float $sim_suspended_active_rate sim_suspended_active_rate
     *
     * @return $this
     */
    public function setSimSuspendedActiveRate($sim_suspended_active_rate)
    {
        $this->container['sim_suspended_active_rate'] = $sim_suspended_active_rate;

        return $this;
    }

    /**
     * Gets sim_activated_amount
     *
     * @return float
     */
    public function getSimActivatedAmount()
    {
        return $this->container['sim_activated_amount'];
    }

    /**
     * Sets sim_activated_amount
     *
     * @param float $sim_activated_amount the number of activated SIMs this month
     *
     * @return $this
     */
    public function setSimActivatedAmount($sim_activated_amount)
    {
        $this->container['sim_activated_amount'] = $sim_activated_amount;

        return $this;
    }

    /**
     * Gets applied_price
     *
     * @return \Emnify\EmnifySdk\Model\GetOrganisationActiveTariffPlanResponseAppliedPrice
     */
    public function getAppliedPrice()
    {
        return $this->container['applied_price'];
    }

    /**
     * Sets applied_price
     *
     * @param \Emnify\EmnifySdk\Model\GetOrganisationActiveTariffPlanResponseAppliedPrice $applied_price applied_price
     *
     * @return $this
     */
    public function setAppliedPrice($applied_price)
    {
        $this->container['applied_price'] = $applied_price;

        return $this;
    }

    /**
     * Gets tariff_plan
     *
     * @return \Emnify\EmnifySdk\Model\GetOrganisationActiveTariffPlanResponseTariffPlan
     */
    public function getTariffPlan()
    {
        return $this->container['tariff_plan'];
    }

    /**
     * Sets tariff_plan
     *
     * @param \Emnify\EmnifySdk\Model\GetOrganisationActiveTariffPlanResponseTariffPlan $tariff_plan tariff_plan
     *
     * @return $this
     */
    public function setTariffPlan($tariff_plan)
    {
        $this->container['tariff_plan'] = $tariff_plan;

        return $this;
    }

    /**
     * Gets tariff_plan_runtime
     *
     * @return \Emnify\EmnifySdk\Model\GetOrganisationActiveTariffPlanResponseTariffPlanRuntime
     */
    public function getTariffPlanRuntime()
    {
        return $this->container['tariff_plan_runtime'];
    }

    /**
     * Sets tariff_plan_runtime
     *
     * @param \Emnify\EmnifySdk\Model\GetOrganisationActiveTariffPlanResponseTariffPlanRuntime $tariff_plan_runtime tariff_plan_runtime
     *
     * @return $this
     */
    public function setTariffPlanRuntime($tariff_plan_runtime)
    {
        $this->container['tariff_plan_runtime'] = $tariff_plan_runtime;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets applied_rate
     *
     * @return float
     */
    public function getAppliedRate()
    {
        return $this->container['applied_rate'];
    }

    /**
     * Sets applied_rate
     *
     * @param float $applied_rate applied_rate
     *
     * @return $this
     */
    public function setAppliedRate($applied_rate)
    {
        $this->container['applied_rate'] = $applied_rate;

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
     * Gets service_level
     *
     * @return \Emnify\EmnifySdk\Model\Apiv1organisationorgIdtariffPlanTariffPlanServiceLevel
     */
    public function getServiceLevel()
    {
        return $this->container['service_level'];
    }

    /**
     * Sets service_level
     *
     * @param \Emnify\EmnifySdk\Model\Apiv1organisationorgIdtariffPlanTariffPlanServiceLevel $service_level service_level
     *
     * @return $this
     */
    public function setServiceLevel($service_level)
    {
        $this->container['service_level'] = $service_level;

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
