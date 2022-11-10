<?php

namespace SellerLegend\AmazonSellingPartnerAPI\Models\Orders;

use \ArrayAccess;
use \SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;
use \SellerLegend\AmazonSellingPartnerAPI\Models\ModelInterface;

/**
 * BuyerInfo Class Doc Comment
 *
 * @category Class
 * @description Buyer information.
 * @package  SellerLegend\AmazonSellingPartnerAPI
 * @group
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BuyerInfo implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate {

    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'BuyerInfo';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'buyer_email'           => 'string',
        'buyer_name'            => 'string',
        'buyer_county'          => 'string',
        'buyer_tax_info'        => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\BuyerTaxInfo',
        'purchase_order_number' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $swaggerFormats = [
        'buyer_email'           => null,
        'buyer_name'            => null,
        'buyer_county'          => null,
        'buyer_tax_info'        => null,
        'purchase_order_number' => null
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
        'buyer_email'           => 'BuyerEmail',
        'buyer_name'            => 'BuyerName',
        'buyer_county'          => 'BuyerCounty',
        'buyer_tax_info'        => 'BuyerTaxInfo',
        'purchase_order_number' => 'PurchaseOrderNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'buyer_email'           => 'setBuyerEmail',
        'buyer_name'            => 'setBuyerName',
        'buyer_county'          => 'setBuyerCounty',
        'buyer_tax_info'        => 'setBuyerTaxInfo',
        'purchase_order_number' => 'setPurchaseOrderNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'buyer_email'           => 'getBuyerEmail',
        'buyer_name'            => 'getBuyerName',
        'buyer_county'          => 'getBuyerCounty',
        'buyer_tax_info'        => 'getBuyerTaxInfo',
        'purchase_order_number' => 'getPurchaseOrderNumber'
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
        $this->container['buyer_email'] = $data['buyer_email'] ?? null;
        $this->container['buyer_name'] = $data['buyer_name'] ?? null;
        $this->container['buyer_county'] = $data['buyer_county'] ?? null;
        $this->container['buyer_tax_info'] = $data['buyer_tax_info'] ?? null;
        $this->container['purchase_order_number'] = $data['purchase_order_number'] ?? null;
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
     * Gets buyer_email
     *
     * @return string|null
     */
    public function getBuyerEmail() {
        return $this->container['buyer_email'];
    }

    /**
     * Sets buyer_email
     *
     * @param string|null $buyer_email The anonymized email address of the buyer.
     *
     * @return self
     */
    public function setBuyerEmail($buyer_email) {
        $this->container['buyer_email'] = $buyer_email;

        return $this;
    }

    /**
     * Gets buyer_name
     *
     * @return string|null
     */
    public function getBuyerName() {
        return $this->container['buyer_name'];
    }

    /**
     * Sets buyer_name
     *
     * @param string|null $buyer_name The name of the buyer.
     *
     * @return self
     */
    public function setBuyerName($buyer_name) {
        $this->container['buyer_name'] = $buyer_name;

        return $this;
    }

    /**
     * Gets buyer_county
     *
     * @return string|null
     */
    public function getBuyerCounty() {
        return $this->container['buyer_county'];
    }

    /**
     * Sets buyer_county
     *
     * @param string|null $buyer_county The county of the buyer.
     *
     * @return self
     */
    public function setBuyerCounty($buyer_county) {
        $this->container['buyer_county'] = $buyer_county;

        return $this;
    }

    /**
     * Gets buyer_tax_info
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\BuyerTaxInfo|null
     */
    public function getBuyerTaxInfo() {
        return $this->container['buyer_tax_info'];
    }

    /**
     * Sets buyer_tax_info
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\BuyerTaxInfo|null $buyer_tax_info buyer_tax_info
     *
     * @return self
     */
    public function setBuyerTaxInfo($buyer_tax_info) {
        $this->container['buyer_tax_info'] = $buyer_tax_info;

        return $this;
    }

    /**
     * Gets purchase_order_number
     *
     * @return string|null
     */
    public function getPurchaseOrderNumber() {
        return $this->container['purchase_order_number'];
    }

    /**
     * Sets purchase_order_number
     *
     * @param string|null $purchase_order_number The purchase order (PO) number entered by the buyer at checkout. Returned only for orders where the buyer entered a PO number at checkout.
     *
     * @return self
     */
    public function setPurchaseOrderNumber($purchase_order_number) {
        $this->container['purchase_order_number'] = $purchase_order_number;

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
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\BuyerInfo
     */
    public function __set($propertyName, $propertyValue) {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}

