<?php
/**
 * PartneredSmallParcelDataOutput.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * OpenAPI spec version: v0
 */

namespace SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound;

use ArrayAccess;
use SellerLegend\AmazonSellingPartnerAPI\Models\ModelInterface;
use SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * PartneredSmallParcelDataOutput Class Doc Comment.
 *
 * @description Information returned by Amazon about a Small Parcel shipment by an Amazon-partnered carrier.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class PartneredSmallParcelDataOutput implements ModelInterface, ArrayAccess {
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'PartneredSmallParcelDataOutput';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'package_list'       => '\SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PartneredSmallParcelPackageOutputList',
        'partnered_estimate' => '\SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PartneredEstimate'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'package_list'       => null,
        'partnered_estimate' => null
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
        'package_list'       => 'PackageList',
        'partnered_estimate' => 'PartneredEstimate',];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'package_list'       => 'setPackageList',
        'partnered_estimate' => 'setPartneredEstimate',];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'package_list'       => 'getPackageList',
        'partnered_estimate' => 'getPartneredEstimate',];

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
        $this->container['package_list'] = isset($data['package_list']) ? $data['package_list'] : null;
        $this->container['partnered_estimate'] = isset($data['partnered_estimate']) ? $data['partnered_estimate'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() {
        $invalidProperties = [];

        if (null === $this->container['package_list']) {
            $invalidProperties[] = "'package_list' can't be null";
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
     * Gets package_list.
     *
     * @return PartneredSmallParcelPackageOutputList
     */
    public function getPackageList() {
        return $this->container['package_list'];
    }

    /**
     * Sets package_list.
     *
     * @param PartneredSmallParcelPackageOutputList $package_list package_list
     *
     * @return $this
     */
    public function setPackageList($package_list) {
        $this->container['package_list'] = $package_list;

        return $this;
    }

    /**
     * Gets partnered_estimate.
     *
     * @return PartneredEstimate
     */
    public function getPartneredEstimate() {
        return $this->container['partnered_estimate'];
    }

    /**
     * Sets partnered_estimate.
     *
     * @param PartneredEstimate $partnered_estimate partnered_estimate
     *
     * @return $this
     */
    public function setPartneredEstimate($partnered_estimate) {
        $this->container['partnered_estimate'] = $partnered_estimate;

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