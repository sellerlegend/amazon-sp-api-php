<?php
/**
 * GetOffersHttpStatusLine
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellerLegend\AmazonSellingPartnerAPI
 */

namespace SellerLegend\AmazonSellingPartnerAPI\Models\ProductPricing;

use ArrayAccess;
use IteratorAggregate;
use JsonSerializable;
use SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;
use SellerLegend\AmazonSellingPartnerAPI\Models\ModelInterface;
use Traversable;

/**
 * GetOffersHttpStatusLine Class Doc Comment
 *
 * @category Class
 * @description The HTTP status line associated with the response.  For more information, consult [RFC 2616](https://www.w3.org/Protocols/rfc2616/rfc2616-sec6.html).
 * @package  SellerLegend\AmazonSellingPartnerAPI
 * @group
 * @implements ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetOffersHttpStatusLine implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate {
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'GetOffersHttpStatusLine';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'status_code'   => 'int',
        'reason_phrase' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $swaggerFormats = [
        'status_code'   => null,
        'reason_phrase' => null
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
        'status_code'   => 'statusCode',
        'reason_phrase' => 'reasonPhrase'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status_code'   => 'setStatusCode',
        'reason_phrase' => 'setReasonPhrase'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status_code'   => 'getStatusCode',
        'reason_phrase' => 'getReasonPhrase'
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
        $this->container['status_code'] = $data['status_code'] ?? null;
        $this->container['reason_phrase'] = $data['reason_phrase'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() {
        $invalidProperties = [];
        if (!is_null($this->container['status_code']) && ($this->container['status_code'] > 599)) {
            $invalidProperties[] = "invalid value for 'status_code', must be smaller than or equal to 599.";
        }

        if (!is_null($this->container['status_code']) && ($this->container['status_code'] < 100)) {
            $invalidProperties[] = "invalid value for 'status_code', must be bigger than or equal to 100.";
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
     * Gets status_code
     *
     * @return int|null
     */
    public function getStatusCode() {
        return $this->container['status_code'];
    }

    /**
     * Sets status_code
     *
     * @param int|null $status_code The HTTP response Status Code.
     *
     * @return self
     */
    public function setStatusCode($status_code) {

        if (!is_null($status_code) && ($status_code > 599)) {
            throw new \InvalidArgumentException('invalid value for $status_code when calling GetOffersHttpStatusLine., must be smaller than or equal to 599.');
        }
        if (!is_null($status_code) && ($status_code < 100)) {
            throw new \InvalidArgumentException('invalid value for $status_code when calling GetOffersHttpStatusLine., must be bigger than or equal to 100.');
        }

        $this->container['status_code'] = $status_code;

        return $this;
    }

    /**
     * Gets reason_phrase
     *
     * @return string|null
     */
    public function getReasonPhrase() {
        return $this->container['reason_phrase'];
    }

    /**
     * Sets reason_phrase
     *
     * @param string|null $reason_phrase The HTTP response Reason-Phase.
     *
     * @return self
     */
    public function setReasonPhrase($reason_phrase) {
        $this->container['reason_phrase'] = $reason_phrase;

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
     * Enable iterating over all the model's attributes in $key => $value format
     *
     * @return Traversable
     */
    public function getIterator(): Traversable {
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
     * @return GetOffersHttpStatusLine
     */
    public function __set($propertyName, $propertyValue) {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


