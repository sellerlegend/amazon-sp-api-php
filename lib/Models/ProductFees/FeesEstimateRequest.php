<?php

namespace SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees;

use \ArrayAccess;
use \SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;
use \SellerLegend\AmazonSellingPartnerAPI\Models\ModelInterface;

/**
 * FeesEstimateRequest Class Doc Comment
 *
 * @category Class
 * @package  SellerLegend\AmazonSellingPartnerAPI
 * @group
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FeesEstimateRequest implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate {
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'FeesEstimateRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'marketplace_id'               => 'string',
        'is_amazon_fulfilled'          => 'bool',
        'price_to_estimate_fees'       => '\SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees\PriceToEstimateFees',
        'identifier'                   => 'string',
        'optional_fulfillment_program' => '\SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees\OptionalFulfillmentProgram'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $swaggerFormats = [
        'marketplace_id'               => null,
        'is_amazon_fulfilled'          => null,
        'price_to_estimate_fees'       => null,
        'identifier'                   => null,
        'optional_fulfillment_program' => null
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
        'marketplace_id'               => 'MarketplaceId',
        'is_amazon_fulfilled'          => 'IsAmazonFulfilled',
        'price_to_estimate_fees'       => 'PriceToEstimateFees',
        'identifier'                   => 'Identifier',
        'optional_fulfillment_program' => 'OptionalFulfillmentProgram'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplace_id'               => 'setMarketplaceId',
        'is_amazon_fulfilled'          => 'setIsAmazonFulfilled',
        'price_to_estimate_fees'       => 'setPriceToEstimateFees',
        'identifier'                   => 'setIdentifier',
        'optional_fulfillment_program' => 'setOptionalFulfillmentProgram'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace_id'               => 'getMarketplaceId',
        'is_amazon_fulfilled'          => 'getIsAmazonFulfilled',
        'price_to_estimate_fees'       => 'getPriceToEstimateFees',
        'identifier'                   => 'getIdentifier',
        'optional_fulfillment_program' => 'getOptionalFulfillmentProgram'
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
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['is_amazon_fulfilled'] = $data['is_amazon_fulfilled'] ?? null;
        $this->container['price_to_estimate_fees'] = $data['price_to_estimate_fees'] ?? null;
        $this->container['identifier'] = $data['identifier'] ?? null;
        $this->container['optional_fulfillment_program'] = $data['optional_fulfillment_program'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() {
        $invalidProperties = [];
        if ($this->container['marketplace_id'] === null) {
            $invalidProperties[] = "'marketplace_id' can't be null";
        }
        if ($this->container['price_to_estimate_fees'] === null) {
            $invalidProperties[] = "'price_to_estimate_fees' can't be null";
        }
        if ($this->container['identifier'] === null) {
            $invalidProperties[] = "'identifier' can't be null";
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
     * Gets marketplace_id
     *
     * @return string
     */
    public function getMarketplaceId() {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string $marketplace_id A marketplace identifier.
     *
     * @return self
     */
    public function setMarketplaceId($marketplace_id) {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets is_amazon_fulfilled
     *
     * @return bool|null
     */
    public function getIsAmazonFulfilled() {
        return $this->container['is_amazon_fulfilled'];
    }

    /**
     * Sets is_amazon_fulfilled
     *
     * @param bool|null $is_amazon_fulfilled When true, the offer is fulfilled by Amazon.
     *
     * @return self
     */
    public function setIsAmazonFulfilled($is_amazon_fulfilled) {
        $this->container['is_amazon_fulfilled'] = $is_amazon_fulfilled;

        return $this;
    }

    /**
     * Gets price_to_estimate_fees
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees\PriceToEstimateFees
     */
    public function getPriceToEstimateFees() {
        return $this->container['price_to_estimate_fees'];
    }

    /**
     * Sets price_to_estimate_fees
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees\PriceToEstimateFees $price_to_estimate_fees price_to_estimate_fees
     *
     * @return self
     */
    public function setPriceToEstimateFees($price_to_estimate_fees) {
        $this->container['price_to_estimate_fees'] = $price_to_estimate_fees;

        return $this;
    }

    /**
     * Gets identifier
     *
     * @return string
     */
    public function getIdentifier() {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string $identifier A unique identifier provided by the caller to track this request.
     *
     * @return self
     */
    public function setIdentifier($identifier) {
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets optional_fulfillment_program
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees\OptionalFulfillmentProgram|null
     */
    public function getOptionalFulfillmentProgram() {
        return $this->container['optional_fulfillment_program'];
    }

    /**
     * Sets optional_fulfillment_program
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees\OptionalFulfillmentProgram|null $optional_fulfillment_program optional_fulfillment_program
     *
     * @return self
     */
    public function setOptionalFulfillmentProgram($optional_fulfillment_program) {
        $this->container['optional_fulfillment_program'] = $optional_fulfillment_program;

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
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees\FeesEstimateRequest
     */
    public function __set($propertyName, $propertyValue) {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


