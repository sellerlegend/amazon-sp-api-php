<?php

namespace SellerLegend\AmazonSellingPartnerAPI\Models\Orders;

use \ArrayAccess;
use \SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;
use \SellerLegend\AmazonSellingPartnerAPI\Models\ModelInterface;

/**
 * ItemBuyerInfo Class Doc Comment
 *
 * @category Class
 * @description A single item&#39;s buyer information.
 * @package  SellerLegend\AmazonSellingPartnerAPI
 * @group
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ItemBuyerInfo implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate {

    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ItemBuyerInfo';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'buyer_customized_info' => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\BuyerCustomizedInfoDetail',
        'gift_wrap_price'       => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money',
        'gift_wrap_tax'         => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money',
        'gift_message_text'     => 'string',
        'gift_wrap_level'       => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $swaggerFormats = [
        'buyer_customized_info' => null,
        'gift_wrap_price'       => null,
        'gift_wrap_tax'         => null,
        'gift_message_text'     => null,
        'gift_wrap_level'       => null
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
        'buyer_customized_info' => 'BuyerCustomizedInfo',
        'gift_wrap_price'       => 'GiftWrapPrice',
        'gift_wrap_tax'         => 'GiftWrapTax',
        'gift_message_text'     => 'GiftMessageText',
        'gift_wrap_level'       => 'GiftWrapLevel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'buyer_customized_info' => 'setBuyerCustomizedInfo',
        'gift_wrap_price'       => 'setGiftWrapPrice',
        'gift_wrap_tax'         => 'setGiftWrapTax',
        'gift_message_text'     => 'setGiftMessageText',
        'gift_wrap_level'       => 'setGiftWrapLevel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'buyer_customized_info' => 'getBuyerCustomizedInfo',
        'gift_wrap_price'       => 'getGiftWrapPrice',
        'gift_wrap_tax'         => 'getGiftWrapTax',
        'gift_message_text'     => 'getGiftMessageText',
        'gift_wrap_level'       => 'getGiftWrapLevel'
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
        $this->container['buyer_customized_info'] = $data['buyer_customized_info'] ?? null;
        $this->container['gift_wrap_price'] = $data['gift_wrap_price'] ?? null;
        $this->container['gift_wrap_tax'] = $data['gift_wrap_tax'] ?? null;
        $this->container['gift_message_text'] = $data['gift_message_text'] ?? null;
        $this->container['gift_wrap_level'] = $data['gift_wrap_level'] ?? null;
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
     * Gets buyer_customized_info
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\BuyerCustomizedInfoDetail|null
     */
    public function getBuyerCustomizedInfo() {
        return $this->container['buyer_customized_info'];
    }

    /**
     * Sets buyer_customized_info
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\BuyerCustomizedInfoDetail|null $buyer_customized_info buyer_customized_info
     *
     * @return self
     */
    public function setBuyerCustomizedInfo($buyer_customized_info) {
        $this->container['buyer_customized_info'] = $buyer_customized_info;

        return $this;
    }

    /**
     * Gets gift_wrap_price
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money|null
     */
    public function getGiftWrapPrice() {
        return $this->container['gift_wrap_price'];
    }

    /**
     * Sets gift_wrap_price
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money|null $gift_wrap_price gift_wrap_price
     *
     * @return self
     */
    public function setGiftWrapPrice($gift_wrap_price) {
        $this->container['gift_wrap_price'] = $gift_wrap_price;

        return $this;
    }

    /**
     * Gets gift_wrap_tax
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money|null
     */
    public function getGiftWrapTax() {
        return $this->container['gift_wrap_tax'];
    }

    /**
     * Sets gift_wrap_tax
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money|null $gift_wrap_tax gift_wrap_tax
     *
     * @return self
     */
    public function setGiftWrapTax($gift_wrap_tax) {
        $this->container['gift_wrap_tax'] = $gift_wrap_tax;

        return $this;
    }

    /**
     * Gets gift_message_text
     *
     * @return string|null
     */
    public function getGiftMessageText() {
        return $this->container['gift_message_text'];
    }

    /**
     * Sets gift_message_text
     *
     * @param string|null $gift_message_text A gift message provided by the buyer.
     *
     * @return self
     */
    public function setGiftMessageText($gift_message_text) {
        $this->container['gift_message_text'] = $gift_message_text;

        return $this;
    }

    /**
     * Gets gift_wrap_level
     *
     * @return string|null
     */
    public function getGiftWrapLevel() {
        return $this->container['gift_wrap_level'];
    }

    /**
     * Sets gift_wrap_level
     *
     * @param string|null $gift_wrap_level The gift wrap level specified by the buyer.
     *
     * @return self
     */
    public function setGiftWrapLevel($gift_wrap_level) {
        $this->container['gift_wrap_level'] = $gift_wrap_level;

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
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\ItemBuyerInfo
     */
    public function __set($propertyName, $propertyValue) {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


