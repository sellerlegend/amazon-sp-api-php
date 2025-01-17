<?php

namespace SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees;

use \ArrayAccess;
use \SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;
use \SellerLegend\AmazonSellingPartnerAPI\Models\ModelInterface;

/**
 * FeesEstimate Class Doc Comment
 *
 * @category Class
 * @description The total estimated fees for an item and a list of details.
 * @package  SellerLegend\AmazonSellingPartnerAPI
 * @group
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FeesEstimate implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate {
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'FeesEstimate';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'time_of_fees_estimation' => 'string',
        'total_fees_estimate'     => '\SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees\MoneyType',
        'fee_detail_list'         => '\SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees\FeeDetail[]'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $swaggerFormats = [
        'time_of_fees_estimation' => null,
        'total_fees_estimate'     => null,
        'fee_detail_list'         => null
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
        'time_of_fees_estimation' => 'TimeOfFeesEstimation',
        'total_fees_estimate'     => 'TotalFeesEstimate',
        'fee_detail_list'         => 'FeeDetailList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'time_of_fees_estimation' => 'setTimeOfFeesEstimation',
        'total_fees_estimate'     => 'setTotalFeesEstimate',
        'fee_detail_list'         => 'setFeeDetailList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'time_of_fees_estimation' => 'getTimeOfFeesEstimation',
        'total_fees_estimate'     => 'getTotalFeesEstimate',
        'fee_detail_list'         => 'getFeeDetailList'
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
        $this->container['time_of_fees_estimation'] = $data['time_of_fees_estimation'] ?? null;
        $this->container['total_fees_estimate'] = $data['total_fees_estimate'] ?? null;
        $this->container['fee_detail_list'] = $data['fee_detail_list'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() {
        $invalidProperties = [];
        if ($this->container['time_of_fees_estimation'] === null) {
            $invalidProperties[] = "'time_of_fees_estimation' can't be null";
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
     * Gets time_of_fees_estimation
     *
     * @return string
     */
    public function getTimeOfFeesEstimation() {
        return $this->container['time_of_fees_estimation'];
    }

    /**
     * Sets time_of_fees_estimation
     *
     * @param string $time_of_fees_estimation The time at which the fees were estimated. This defaults to the time the request is made. Must be in ISO 8601 format.
     *
     * @return self
     */
    public function setTimeOfFeesEstimation($time_of_fees_estimation) {
        $this->container['time_of_fees_estimation'] = $time_of_fees_estimation;

        return $this;
    }

    /**
     * Gets total_fees_estimate
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees\MoneyType|null
     */
    public function getTotalFeesEstimate() {
        return $this->container['total_fees_estimate'];
    }

    /**
     * Sets total_fees_estimate
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees\MoneyType|null $total_fees_estimate total_fees_estimate
     *
     * @return self
     */
    public function setTotalFeesEstimate($total_fees_estimate) {
        $this->container['total_fees_estimate'] = $total_fees_estimate;

        return $this;
    }

    /**
     * Gets fee_detail_list
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees\FeeDetail[]|null
     */
    public function getFeeDetailList() {
        return $this->container['fee_detail_list'];
    }

    /**
     * Sets fee_detail_list
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees\FeeDetail[]|null $fee_detail_list A list of other fees that contribute to a given fee.
     *
     * @return self
     */
    public function setFeeDetailList($fee_detail_list) {
        $this->container['fee_detail_list'] = $fee_detail_list;

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
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees\FeesEstimate
     */
    public function __set($propertyName, $propertyValue) {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


