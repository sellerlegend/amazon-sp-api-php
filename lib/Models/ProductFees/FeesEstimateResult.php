<?php

namespace SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees;

use \ArrayAccess;
use \SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;
use \SellerLegend\AmazonSellingPartnerAPI\Models\ModelInterface;

/**
 * FeesEstimateResult Class Doc Comment
 *
 * @category Class
 * @description An item identifier and the estimated fees for the item.
 * @package  SellerLegend\AmazonSellingPartnerAPI
 * @group
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FeesEstimateResult implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate {
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'FeesEstimateResult';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'status'                   => 'string',
        'fees_estimate_identifier' => '\SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees\FeesEstimateIdentifier',
        'fees_estimate'            => '\SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees\FeesEstimate',
        'error'                    => '\SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees\FeesEstimateError'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $swaggerFormats = [
        'status'                   => null,
        'fees_estimate_identifier' => null,
        'fees_estimate'            => null,
        'error'                    => null
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
        'status'                   => 'Status',
        'fees_estimate_identifier' => 'FeesEstimateIdentifier',
        'fees_estimate'            => 'FeesEstimate',
        'error'                    => 'Error'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status'                   => 'setStatus',
        'fees_estimate_identifier' => 'setFeesEstimateIdentifier',
        'fees_estimate'            => 'setFeesEstimate',
        'error'                    => 'setError'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status'                   => 'getStatus',
        'fees_estimate_identifier' => 'getFeesEstimateIdentifier',
        'fees_estimate'            => 'getFeesEstimate',
        'error'                    => 'getError'
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
        $this->container['status'] = $data['status'] ?? null;
        $this->container['fees_estimate_identifier'] = $data['fees_estimate_identifier'] ?? null;
        $this->container['fees_estimate'] = $data['fees_estimate'] ?? null;
        $this->container['error'] = $data['error'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() {
        $invalidProperties = [];
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
     * Gets status
     *
     * @return string|null
     */
    public function getStatus() {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The status of the fee request. Possible values: Success, ClientError, ServiceError.
     *
     * @return self
     */
    public function setStatus($status) {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets fees_estimate_identifier
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees\FeesEstimateIdentifier|null
     */
    public function getFeesEstimateIdentifier() {
        return $this->container['fees_estimate_identifier'];
    }

    /**
     * Sets fees_estimate_identifier
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees\FeesEstimateIdentifier|null $fees_estimate_identifier fees_estimate_identifier
     *
     * @return self
     */
    public function setFeesEstimateIdentifier($fees_estimate_identifier) {
        $this->container['fees_estimate_identifier'] = $fees_estimate_identifier;

        return $this;
    }

    /**
     * Gets fees_estimate
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees\FeesEstimate|null
     */
    public function getFeesEstimate() {
        return $this->container['fees_estimate'];
    }

    /**
     * Sets fees_estimate
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees\FeesEstimate|null $fees_estimate fees_estimate
     *
     * @return self
     */
    public function setFeesEstimate($fees_estimate) {
        $this->container['fees_estimate'] = $fees_estimate;

        return $this;
    }

    /**
     * Gets error
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees\FeesEstimateError|null
     */
    public function getError() {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees\FeesEstimateError|null $error error
     *
     * @return self
     */
    public function setError($error) {
        $this->container['error'] = $error;

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
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees\FeesEstimateResult
     */
    public function __set($propertyName, $propertyValue) {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


