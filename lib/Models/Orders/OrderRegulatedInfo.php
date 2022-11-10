<?php

namespace SellerLegend\AmazonSellingPartnerAPI\Models\Orders;

use \ArrayAccess;
use \SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;
use \SellerLegend\AmazonSellingPartnerAPI\Models\ModelInterface;

/**
 * OrderRegulatedInfo Class Doc Comment
 *
 * @category Class
 * @description The order&#39;s regulated information along with its verification status.
 * @package  SellerLegend\AmazonSellingPartnerAPI
 * @group
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OrderRegulatedInfo implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate {

    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'OrderRegulatedInfo';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'amazon_order_id'                     => 'string',
        'regulated_information'               => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\RegulatedInformation',
        'requires_dosage_label'               => 'bool',
        'regulated_order_verification_status' => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\RegulatedOrderVerificationStatus'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $swaggerFormats = [
        'amazon_order_id'                     => null,
        'regulated_information'               => null,
        'requires_dosage_label'               => null,
        'regulated_order_verification_status' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats() {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'amazon_order_id'                     => 'AmazonOrderId',
        'regulated_information'               => 'RegulatedInformation',
        'requires_dosage_label'               => 'RequiresDosageLabel',
        'regulated_order_verification_status' => 'RegulatedOrderVerificationStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amazon_order_id'                     => 'setAmazonOrderId',
        'regulated_information'               => 'setRegulatedInformation',
        'requires_dosage_label'               => 'setRequiresDosageLabel',
        'regulated_order_verification_status' => 'setRegulatedOrderVerificationStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amazon_order_id'                     => 'getAmazonOrderId',
        'regulated_information'               => 'getRegulatedInformation',
        'requires_dosage_label'               => 'getRequiresDosageLabel',
        'regulated_order_verification_status' => 'getRegulatedOrderVerificationStatus'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap() {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters() {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters() {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName() {
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
    public function __construct(array $data = null) {
        $this->container['amazon_order_id'] = $data['amazon_order_id'] ?? null;
        $this->container['regulated_information'] = $data['regulated_information'] ?? null;
        $this->container['requires_dosage_label'] = $data['requires_dosage_label'] ?? null;
        $this->container['regulated_order_verification_status'] = $data['regulated_order_verification_status'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() {
        $invalidProperties = [];
        if ($this->container['amazon_order_id'] === null) {
            $invalidProperties[] = "'amazon_order_id' can't be null";
        }
        if ($this->container['regulated_information'] === null) {
            $invalidProperties[] = "'regulated_information' can't be null";
        }
        if ($this->container['requires_dosage_label'] === null) {
            $invalidProperties[] = "'requires_dosage_label' can't be null";
        }
        if ($this->container['regulated_order_verification_status'] === null) {
            $invalidProperties[] = "'regulated_order_verification_status' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid() {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets amazon_order_id
     *
     * @return string
     */
    public function getAmazonOrderId() {
        return $this->container['amazon_order_id'];
    }

    /**
     * Sets amazon_order_id
     *
     * @param string $amazon_order_id An Amazon-defined order identifier, in 3-7-7 format.
     *
     * @return self
     */
    public function setAmazonOrderId($amazon_order_id) {
        $this->container['amazon_order_id'] = $amazon_order_id;

        return $this;
    }

    /**
     * Gets regulated_information
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\RegulatedInformation
     */
    public function getRegulatedInformation() {
        return $this->container['regulated_information'];
    }

    /**
     * Sets regulated_information
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\RegulatedInformation $regulated_information regulated_information
     *
     * @return self
     */
    public function setRegulatedInformation($regulated_information) {
        $this->container['regulated_information'] = $regulated_information;

        return $this;
    }

    /**
     * Gets requires_dosage_label
     *
     * @return bool
     */
    public function getRequiresDosageLabel() {
        return $this->container['requires_dosage_label'];
    }

    /**
     * Sets requires_dosage_label
     *
     * @param bool $requires_dosage_label When true, the order requires attaching a dosage information label when shipped.
     *
     * @return self
     */
    public function setRequiresDosageLabel($requires_dosage_label) {
        $this->container['requires_dosage_label'] = $requires_dosage_label;

        return $this;
    }

    /**
     * Gets regulated_order_verification_status
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\RegulatedOrderVerificationStatus
     */
    public function getRegulatedOrderVerificationStatus() {
        return $this->container['regulated_order_verification_status'];
    }

    /**
     * Sets regulated_order_verification_status
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\RegulatedOrderVerificationStatus $regulated_order_verification_status regulated_order_verification_status
     *
     * @return self
     */
    public function setRegulatedOrderVerificationStatus($regulated_order_verification_status) {
        $this->container['regulated_order_verification_status'] = $regulated_order_verification_status;

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
    public function offsetExists($offset) {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset) {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed $value Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value) {
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
    public function offsetUnset($offset) {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize() {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString() {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue() {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Enable iterating over all of the model's attributes in $key => $value format
     *
     * @return \Traversable
     */
    public function getIterator(): \Traversable {
        return (function () {
            foreach ($this->container as $key => $value) {
                yield $key => $value;
            }
        })();
    }

    /**
     * Retrieves the property with the given name by converting the property accession
     * to a getter call.
     *
     * @param string $propertyName
     * @return mixed
     */
    public function __get($propertyName) {
        // This doesn't make a syntactical difference since PHP is case-insensitive, but
        // makes error messages clearer (e.g. "Call to undefined method getFoo()" rather
        // than "Call to undefined method getfoo()").
        $ucProp = ucfirst($propertyName);
        $getter = "get$ucProp";
        return $this->$getter();
    }

    /**
     * Sets the property with the given name by converting the property accession
     * to a setter call.
     *
     * @param string $propertyName
     * @param mixed $propertyValue
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\OrderRegulatedInfo
     */
    public function __set($propertyName, $propertyValue) {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


