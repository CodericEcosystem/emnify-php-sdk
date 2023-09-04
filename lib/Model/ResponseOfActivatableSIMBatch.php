<?php
/**
 * ResponseOfActivatableSIMBatch
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
 * ResponseOfActivatableSIMBatch Class Doc Comment
 *
 * @category Class
 * @package  Emnify\EmnifySdk
 * @author   Coderic Development Team
 * @link     https://github.com/CodericEcosystem/emnify-php-sdk
 */
class ResponseOfActivatableSIMBatch implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Response of activatable SIM batch';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sim_batch_status_id' => 'string',
        'bsn' => 'string',
        'bic' => 'string',
        'quantity' => 'string',
        'sim_model_id' => 'string',
        'issuer_org_id' => 'string',
        'customer_org_id' => 'int',
        'reseller_org_id' => 'int',
        'activated' => 'string',
        'logistic_center_id' => 'string',
        'article_id' => 'string',
        'id' => 'int',
        'status' => '\Emnify\EmnifySdk\Model\Status',
        'model' => '\Emnify\EmnifySdk\Model\SimModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sim_batch_status_id' => null,
        'bsn' => null,
        'bic' => null,
        'quantity' => null,
        'sim_model_id' => null,
        'issuer_org_id' => null,
        'customer_org_id' => 'int32',
        'reseller_org_id' => 'int32',
        'activated' => null,
        'logistic_center_id' => null,
        'article_id' => null,
        'id' => 'int32',
        'status' => null,
        'model' => null
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
        'sim_batch_status_id' => 'sim_batch_status_id',
        'bsn' => 'bsn',
        'bic' => 'bic',
        'quantity' => 'quantity',
        'sim_model_id' => 'sim_model_id',
        'issuer_org_id' => 'issuer_org_id',
        'customer_org_id' => 'customer_org_id',
        'reseller_org_id' => 'reseller_org_id',
        'activated' => 'activated',
        'logistic_center_id' => 'logistic_center_id',
        'article_id' => 'article_id',
        'id' => 'id',
        'status' => 'status',
        'model' => 'model'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sim_batch_status_id' => 'setSimBatchStatusId',
        'bsn' => 'setBsn',
        'bic' => 'setBic',
        'quantity' => 'setQuantity',
        'sim_model_id' => 'setSimModelId',
        'issuer_org_id' => 'setIssuerOrgId',
        'customer_org_id' => 'setCustomerOrgId',
        'reseller_org_id' => 'setResellerOrgId',
        'activated' => 'setActivated',
        'logistic_center_id' => 'setLogisticCenterId',
        'article_id' => 'setArticleId',
        'id' => 'setId',
        'status' => 'setStatus',
        'model' => 'setModel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sim_batch_status_id' => 'getSimBatchStatusId',
        'bsn' => 'getBsn',
        'bic' => 'getBic',
        'quantity' => 'getQuantity',
        'sim_model_id' => 'getSimModelId',
        'issuer_org_id' => 'getIssuerOrgId',
        'customer_org_id' => 'getCustomerOrgId',
        'reseller_org_id' => 'getResellerOrgId',
        'activated' => 'getActivated',
        'logistic_center_id' => 'getLogisticCenterId',
        'article_id' => 'getArticleId',
        'id' => 'getId',
        'status' => 'getStatus',
        'model' => 'getModel'
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
        $this->container['sim_batch_status_id'] = isset($data['sim_batch_status_id']) ? $data['sim_batch_status_id'] : null;
        $this->container['bsn'] = isset($data['bsn']) ? $data['bsn'] : null;
        $this->container['bic'] = isset($data['bic']) ? $data['bic'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['sim_model_id'] = isset($data['sim_model_id']) ? $data['sim_model_id'] : null;
        $this->container['issuer_org_id'] = isset($data['issuer_org_id']) ? $data['issuer_org_id'] : null;
        $this->container['customer_org_id'] = isset($data['customer_org_id']) ? $data['customer_org_id'] : null;
        $this->container['reseller_org_id'] = isset($data['reseller_org_id']) ? $data['reseller_org_id'] : null;
        $this->container['activated'] = isset($data['activated']) ? $data['activated'] : null;
        $this->container['logistic_center_id'] = isset($data['logistic_center_id']) ? $data['logistic_center_id'] : null;
        $this->container['article_id'] = isset($data['article_id']) ? $data['article_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
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
     * Gets sim_batch_status_id
     *
     * @return string
     */
    public function getSimBatchStatusId()
    {
        return $this->container['sim_batch_status_id'];
    }

    /**
     * Sets sim_batch_status_id
     *
     * @param string $sim_batch_status_id sim_batch_status_id
     *
     * @return $this
     */
    public function setSimBatchStatusId($sim_batch_status_id)
    {
        $this->container['sim_batch_status_id'] = $sim_batch_status_id;

        return $this;
    }

    /**
     * Gets bsn
     *
     * @return string
     */
    public function getBsn()
    {
        return $this->container['bsn'];
    }

    /**
     * Sets bsn
     *
     * @param string $bsn bsn
     *
     * @return $this
     */
    public function setBsn($bsn)
    {
        $this->container['bsn'] = $bsn;

        return $this;
    }

    /**
     * Gets bic
     *
     * @return string
     */
    public function getBic()
    {
        return $this->container['bic'];
    }

    /**
     * Sets bic
     *
     * @param string $bic bic
     *
     * @return $this
     */
    public function setBic($bic)
    {
        $this->container['bic'] = $bic;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param string $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets sim_model_id
     *
     * @return string
     */
    public function getSimModelId()
    {
        return $this->container['sim_model_id'];
    }

    /**
     * Sets sim_model_id
     *
     * @param string $sim_model_id sim_model_id
     *
     * @return $this
     */
    public function setSimModelId($sim_model_id)
    {
        $this->container['sim_model_id'] = $sim_model_id;

        return $this;
    }

    /**
     * Gets issuer_org_id
     *
     * @return string
     */
    public function getIssuerOrgId()
    {
        return $this->container['issuer_org_id'];
    }

    /**
     * Sets issuer_org_id
     *
     * @param string $issuer_org_id issuer_org_id
     *
     * @return $this
     */
    public function setIssuerOrgId($issuer_org_id)
    {
        $this->container['issuer_org_id'] = $issuer_org_id;

        return $this;
    }

    /**
     * Gets customer_org_id
     *
     * @return int
     */
    public function getCustomerOrgId()
    {
        return $this->container['customer_org_id'];
    }

    /**
     * Sets customer_org_id
     *
     * @param int $customer_org_id customer_org_id
     *
     * @return $this
     */
    public function setCustomerOrgId($customer_org_id)
    {
        $this->container['customer_org_id'] = $customer_org_id;

        return $this;
    }

    /**
     * Gets reseller_org_id
     *
     * @return int
     */
    public function getResellerOrgId()
    {
        return $this->container['reseller_org_id'];
    }

    /**
     * Sets reseller_org_id
     *
     * @param int $reseller_org_id reseller_org_id
     *
     * @return $this
     */
    public function setResellerOrgId($reseller_org_id)
    {
        $this->container['reseller_org_id'] = $reseller_org_id;

        return $this;
    }

    /**
     * Gets activated
     *
     * @return string
     */
    public function getActivated()
    {
        return $this->container['activated'];
    }

    /**
     * Sets activated
     *
     * @param string $activated activated
     *
     * @return $this
     */
    public function setActivated($activated)
    {
        $this->container['activated'] = $activated;

        return $this;
    }

    /**
     * Gets logistic_center_id
     *
     * @return string
     */
    public function getLogisticCenterId()
    {
        return $this->container['logistic_center_id'];
    }

    /**
     * Sets logistic_center_id
     *
     * @param string $logistic_center_id logistic_center_id
     *
     * @return $this
     */
    public function setLogisticCenterId($logistic_center_id)
    {
        $this->container['logistic_center_id'] = $logistic_center_id;

        return $this;
    }

    /**
     * Gets article_id
     *
     * @return string
     */
    public function getArticleId()
    {
        return $this->container['article_id'];
    }

    /**
     * Sets article_id
     *
     * @param string $article_id article_id
     *
     * @return $this
     */
    public function setArticleId($article_id)
    {
        $this->container['article_id'] = $article_id;

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
     * Gets model
     *
     * @return \Emnify\EmnifySdk\Model\SimModel
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param \Emnify\EmnifySdk\Model\SimModel $model model
     *
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

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
