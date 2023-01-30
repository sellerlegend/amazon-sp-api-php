<?php
/**
 * PutTransportDetailsRequest
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
 * PutTransportDetailsRequest Class Doc Comment
 *
 * @category Class
 * @description The request schema for a putTransportDetails operation.
 * @package  SellingPartnerApi
 * @group
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PutTransportDetailsRequest implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate {
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'PutTransportDetailsRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'is_partnered'      => 'bool',
        'shipment_type'     => '\SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ShipmentType',
        'transport_details' => '\SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\TransportDetailInput'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $swaggerFormats = [
        'is_partnered'      => null,
        'shipment_type'     => null,
        'transport_details' => null
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
        'is_partnered'      => 'IsPartnered',
        'shipment_type'     => 'ShipmentType',
        'transport_details' => 'TransportDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_partnered'      => 'setIsPartnered',
        'shipment_type'     => 'setShipmentType',
        'transport_details' => 'setTransportDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_partnered'      => 'getIsPartnered',
        'shipment_type'     => 'getShipmentType',
        'transport_details' => 'getTransportDetails'
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
        $this->container['is_partnered'] = $data['is_partnered'] ?? null;
        $this->container['shipment_type'] = $data['shipment_type'] ?? null;
        $this->container['transport_details'] = $data['transport_details'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() {
        $invalidProperties = [];
        if ($this->container['is_partnered'] === null) {
            $invalidProperties[] = "'is_partnered' can't be null";
        }
        if ($this->container['shipment_type'] === null) {
            $invalidProperties[] = "'shipment_type' can't be null";
        }
        if ($this->container['transport_details'] === null) {
            $invalidProperties[] = "'transport_details' can't be null";
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
     * Gets is_partnered
     *
     * @return bool
     */
    public function getIsPartnered() {
        return $this->container['is_partnered'];
    }

    /**
     * Sets is_partnered
     *
     * @param bool $is_partnered Indicates whether a putTransportDetails request is for an Amazon-partnered carrier.
     *
     * @return self
     */
    public function setIsPartnered($is_partnered) {
        $this->container['is_partnered'] = $is_partnered;

        return $this;
    }

    /**
     * Gets shipment_type
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ShipmentType
     */
    public function getShipmentType() {
        return $this->container['shipment_type'];
    }

    /**
     * Sets shipment_type
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ShipmentType $shipment_type shipment_type
     *
     * @return self
     */
    public function setShipmentType($shipment_type) {
        $this->container['shipment_type'] = $shipment_type;

        return $this;
    }

    /**
     * Gets transport_details
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\TransportDetailInput
     */
    public function getTransportDetails() {
        return $this->container['transport_details'];
    }

    /**
     * Sets transport_details
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\TransportDetailInput $transport_details transport_details
     *
     * @return self
     */
    public function setTransportDetails($transport_details) {
        $this->container['transport_details'] = $transport_details;

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
     * @return SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PutTransportDetailsRequest
     */
    public function __set($propertyName, $propertyValue) {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


