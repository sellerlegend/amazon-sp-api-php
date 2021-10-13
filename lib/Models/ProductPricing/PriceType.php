<?php
/**
 * PriceType.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Pricing.
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
 *
 * OpenAPI spec version: v0
 */

namespace SellerLegend\AmazonSellingPartnerAPI\Models\ProductPricing;

use ArrayAccess;
use SellerLegend\AmazonSellingPartnerAPI\Models\ModelInterface;
use SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * PriceType Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class PriceType implements ModelInterface, ArrayAccess {
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'PriceType';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'landed_price'  => '\SellerLegend\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType',
        'listing_price' => '\SellerLegend\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType',
        'shipping'      => '\SellerLegend\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType',
        'points'        => '\SellerLegend\AmazonSellingPartnerAPI\Models\ProductPricing\Points'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'landed_price'  => null,
        'listing_price' => null,
        'shipping'      => null,
        'points'        => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerFormats() {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'landed_price'  => 'LandedPrice',
        'listing_price' => 'ListingPrice',
        'shipping'      => 'Shipping',
        'points'        => 'Points',];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'landed_price'  => 'setLandedPrice',
        'listing_price' => 'setListingPrice',
        'shipping'      => 'setShipping',
        'points'        => 'setPoints',];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'landed_price'  => 'getLandedPrice',
        'listing_price' => 'getListingPrice',
        'shipping'      => 'getShipping',
        'points'        => 'getPoints',];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap() {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters() {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
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
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null) {
        $this->container['landed_price'] = isset($data['landed_price']) ? $data['landed_price'] : null;
        $this->container['listing_price'] = isset($data['listing_price']) ? $data['listing_price'] : null;
        $this->container['shipping'] = isset($data['shipping']) ? $data['shipping'] : null;
        $this->container['points'] = isset($data['points']) ? $data['points'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() {
        $invalidProperties = [];

        if (null === $this->container['listing_price']) {
            $invalidProperties[] = "'listing_price' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid() {
        return 0 === count($this->listInvalidProperties());
    }

    /**
     * Gets landed_price.
     *
     * @return MoneyType
     */
    public function getLandedPrice() {
        return $this->container['landed_price'];
    }

    /**
     * Sets landed_price.
     *
     * @param MoneyType $landed_price landed_price
     *
     * @return $this
     */
    public function setLandedPrice($landed_price) {
        $this->container['landed_price'] = $landed_price;

        return $this;
    }

    /**
     * Gets listing_price.
     *
     * @return MoneyType
     */
    public function getListingPrice() {
        return $this->container['listing_price'];
    }

    /**
     * Sets listing_price.
     *
     * @param MoneyType $listing_price listing_price
     *
     * @return $this
     */
    public function setListingPrice($listing_price) {
        $this->container['listing_price'] = $listing_price;

        return $this;
    }

    /**
     * Gets shipping.
     *
     * @return MoneyType
     */
    public function getShipping() {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping.
     *
     * @param MoneyType $shipping shipping
     *
     * @return $this
     */
    public function setShipping($shipping) {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets points.
     *
     * @return Points
     */
    public function getPoints() {
        return $this->container['points'];
    }

    /**
     * Sets points.
     *
     * @param Points $points points
     *
     * @return $this
     */
    public function setPoints($points) {
        $this->container['points'] = $points;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset) {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset) {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int $offset Offset
     * @param mixed $value Value to be set
     *
     * @return void
     */
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
     * @param int $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset) {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
     */
    public function __toString() {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
