<?php
/**
 * TransportContent
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
 * TransportContent Class Doc Comment
 *
 * @category Class
 * @description Inbound shipment information, including carrier details, shipment status, and the workflow status for a request for shipment with an Amazon-partnered carrier.
 * @package  SellingPartnerApi
 * @group
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TransportContent implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate {
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'TransportContent';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'transport_header'  => '\SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\TransportHeader',
        'transport_details' => '\SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\TransportDetailOutput',
        'transport_result'  => '\SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\TransportResult'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $swaggerFormats = [
        'transport_header'  => null,
        'transport_details' => null,
        'transport_result'  => null
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
        'transport_header'  => 'TransportHeader',
        'transport_details' => 'TransportDetails',
        'transport_result'  => 'TransportResult'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transport_header'  => 'setTransportHeader',
        'transport_details' => 'setTransportDetails',
        'transport_result'  => 'setTransportResult'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transport_header'  => 'getTransportHeader',
        'transport_details' => 'getTransportDetails',
        'transport_result'  => 'getTransportResult'
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
        $this->container['transport_header'] = $data['transport_header'] ?? null;
        $this->container['transport_details'] = $data['transport_details'] ?? null;
        $this->container['transport_result'] = $data['transport_result'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() {
        $invalidProperties = [];
        if ($this->container['transport_header'] === null) {
            $invalidProperties[] = "'transport_header' can't be null";
        }
        if ($this->container['transport_details'] === null) {
            $invalidProperties[] = "'transport_details' can't be null";
        }
        if ($this->container['transport_result'] === null) {
            $invalidProperties[] = "'transport_result' can't be null";
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
     * Gets transport_header
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\TransportHeader
     */
    public function getTransportHeader() {
        return $this->container['transport_header'];
    }

    /**
     * Sets transport_header
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\TransportHeader $transport_header transport_header
     *
     * @return self
     */
    public function setTransportHeader($transport_header) {
        $this->container['transport_header'] = $transport_header;

        return $this;
    }

    /**
     * Gets transport_details
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\TransportDetailOutput
     */
    public function getTransportDetails() {
        return $this->container['transport_details'];
    }

    /**
     * Sets transport_details
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\TransportDetailOutput $transport_details transport_details
     *
     * @return self
     */
    public function setTransportDetails($transport_details) {
        $this->container['transport_details'] = $transport_details;

        return $this;
    }

    /**
     * Gets transport_result
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\TransportResult
     */
    public function getTransportResult() {
        return $this->container['transport_result'];
    }

    /**
     * Sets transport_result
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\TransportResult $transport_result transport_result
     *
     * @return self
     */
    public function setTransportResult($transport_result) {
        $this->container['transport_result'] = $transport_result;

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
     * @return SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\TransportContent
     */
    public function __set($propertyName, $propertyValue) {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


