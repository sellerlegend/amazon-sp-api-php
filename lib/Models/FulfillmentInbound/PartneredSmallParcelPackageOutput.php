<?php
/**
 * PartneredSmallParcelPackageOutput
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

namespace SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound;

use \ArrayAccess;
use \SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;
use \SellerLegend\AmazonSellingPartnerAPI\Models\ModelInterface;

/**
 * PartneredSmallParcelPackageOutput Class Doc Comment
 *
 * @category Class
 * @description Dimension, weight, and shipping information for the package.
 * @package  SellingPartnerApi
 * @group
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PartneredSmallParcelPackageOutput implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate {
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'PartneredSmallParcelPackageOutput';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'dimensions'     => '\SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Dimensions',
        'weight'         => '\SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Weight',
        'carrier_name'   => 'string',
        'tracking_id'    => 'string',
        'package_status' => '\SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PackageStatus'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $swaggerFormats = [
        'dimensions'     => null,
        'weight'         => null,
        'carrier_name'   => null,
        'tracking_id'    => null,
        'package_status' => null
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
        'dimensions'     => 'Dimensions',
        'weight'         => 'Weight',
        'carrier_name'   => 'CarrierName',
        'tracking_id'    => 'TrackingId',
        'package_status' => 'PackageStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dimensions'     => 'setDimensions',
        'weight'         => 'setWeight',
        'carrier_name'   => 'setCarrierName',
        'tracking_id'    => 'setTrackingId',
        'package_status' => 'setPackageStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dimensions'     => 'getDimensions',
        'weight'         => 'getWeight',
        'carrier_name'   => 'getCarrierName',
        'tracking_id'    => 'getTrackingId',
        'package_status' => 'getPackageStatus'
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
        $this->container['dimensions'] = $data['dimensions'] ?? null;
        $this->container['weight'] = $data['weight'] ?? null;
        $this->container['carrier_name'] = $data['carrier_name'] ?? null;
        $this->container['tracking_id'] = $data['tracking_id'] ?? null;
        $this->container['package_status'] = $data['package_status'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() {
        $invalidProperties = [];
        if ($this->container['dimensions'] === null) {
            $invalidProperties[] = "'dimensions' can't be null";
        }
        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
        }
        if ($this->container['carrier_name'] === null) {
            $invalidProperties[] = "'carrier_name' can't be null";
        }
        if ($this->container['tracking_id'] === null) {
            $invalidProperties[] = "'tracking_id' can't be null";
        }
        if ($this->container['package_status'] === null) {
            $invalidProperties[] = "'package_status' can't be null";
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
     * Gets dimensions
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Dimensions
     */
    public function getDimensions() {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Dimensions $dimensions dimensions
     *
     * @return self
     */
    public function setDimensions($dimensions) {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Weight
     */
    public function getWeight() {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Weight $weight weight
     *
     * @return self
     */
    public function setWeight($weight) {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets carrier_name
     *
     * @return string
     */
    public function getCarrierName() {
        return $this->container['carrier_name'];
    }

    /**
     * Sets carrier_name
     *
     * @param string $carrier_name The carrier specified with a previous call to putTransportDetails.
     *
     * @return self
     */
    public function setCarrierName($carrier_name) {
        $this->container['carrier_name'] = $carrier_name;

        return $this;
    }

    /**
     * Gets tracking_id
     *
     * @return string
     */
    public function getTrackingId() {
        return $this->container['tracking_id'];
    }

    /**
     * Sets tracking_id
     *
     * @param string $tracking_id The tracking number of the package, provided by the carrier.
     *
     * @return self
     */
    public function setTrackingId($tracking_id) {
        $this->container['tracking_id'] = $tracking_id;

        return $this;
    }

    /**
     * Gets package_status
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PackageStatus
     */
    public function getPackageStatus() {
        return $this->container['package_status'];
    }

    /**
     * Sets package_status
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PackageStatus $package_status package_status
     *
     * @return self
     */
    public function setPackageStatus($package_status) {
        $this->container['package_status'] = $package_status;

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
     * @return SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PartneredSmallParcelPackageOutput
     */
    public function __set($propertyName, $propertyValue) {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


