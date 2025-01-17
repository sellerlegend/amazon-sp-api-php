<?php
/**
 * Address
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellerLegend\AmazonSellingPartnerAPI
 */

namespace SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound;

use \ArrayAccess;
use \SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;
use \SellerLegend\AmazonSellingPartnerAPI\Models\ModelInterface;

/**
 * Address Class Doc Comment
 *
 * @category Class
 * @package  SellerLegend\AmazonSellingPartnerAPI
 * @group
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Address implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate {
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Address';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'name'                   => 'string',
        'address_line1'          => 'string',
        'address_line2'          => 'string',
        'district_or_county'     => 'string',
        'city'                   => 'string',
        'state_or_province_code' => 'string',
        'country_code'           => 'string',
        'postal_code'            => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $swaggerFormats = [
        'name'                   => null,
        'address_line1'          => null,
        'address_line2'          => null,
        'district_or_county'     => null,
        'city'                   => null,
        'state_or_province_code' => null,
        'country_code'           => null,
        'postal_code'            => null
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
        'name'                   => 'Name',
        'address_line1'          => 'AddressLine1',
        'address_line2'          => 'AddressLine2',
        'district_or_county'     => 'DistrictOrCounty',
        'city'                   => 'City',
        'state_or_province_code' => 'StateOrProvinceCode',
        'country_code'           => 'CountryCode',
        'postal_code'            => 'PostalCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name'                   => 'setName',
        'address_line1'          => 'setAddressLine1',
        'address_line2'          => 'setAddressLine2',
        'district_or_county'     => 'setDistrictOrCounty',
        'city'                   => 'setCity',
        'state_or_province_code' => 'setStateOrProvinceCode',
        'country_code'           => 'setCountryCode',
        'postal_code'            => 'setPostalCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name'                   => 'getName',
        'address_line1'          => 'getAddressLine1',
        'address_line2'          => 'getAddressLine2',
        'district_or_county'     => 'getDistrictOrCounty',
        'city'                   => 'getCity',
        'state_or_province_code' => 'getStateOrProvinceCode',
        'country_code'           => 'getCountryCode',
        'postal_code'            => 'getPostalCode'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['address_line1'] = $data['address_line1'] ?? null;
        $this->container['address_line2'] = $data['address_line2'] ?? null;
        $this->container['district_or_county'] = $data['district_or_county'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['state_or_province_code'] = $data['state_or_province_code'] ?? null;
        $this->container['country_code'] = $data['country_code'] ?? null;
        $this->container['postal_code'] = $data['postal_code'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['address_line1'] === null) {
            $invalidProperties[] = "'address_line1' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['state_or_province_code'] === null) {
            $invalidProperties[] = "'state_or_province_code' can't be null";
        }
        if ($this->container['country_code'] === null) {
            $invalidProperties[] = "'country_code' can't be null";
        }
        if ($this->container['postal_code'] === null) {
            $invalidProperties[] = "'postal_code' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName() {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the individual or business.
     *
     * @return self
     */
    public function setName($name) {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets address_line1
     *
     * @return string
     */
    public function getAddressLine1() {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1
     *
     * @param string $address_line1 The street address information.
     *
     * @return self
     */
    public function setAddressLine1($address_line1) {
        $this->container['address_line1'] = $address_line1;

        return $this;
    }

    /**
     * Gets address_line2
     *
     * @return string|null
     */
    public function getAddressLine2() {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2
     *
     * @param string|null $address_line2 Additional street address information, if required.
     *
     * @return self
     */
    public function setAddressLine2($address_line2) {
        $this->container['address_line2'] = $address_line2;

        return $this;
    }

    /**
     * Gets district_or_county
     *
     * @return string|null
     */
    public function getDistrictOrCounty() {
        return $this->container['district_or_county'];
    }

    /**
     * Sets district_or_county
     *
     * @param string|null $district_or_county The district or county.
     *
     * @return self
     */
    public function setDistrictOrCounty($district_or_county) {
        $this->container['district_or_county'] = $district_or_county;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity() {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city The city.
     *
     * @return self
     */
    public function setCity($city) {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state_or_province_code
     *
     * @return string
     */
    public function getStateOrProvinceCode() {
        return $this->container['state_or_province_code'];
    }

    /**
     * Sets state_or_province_code
     *
     * @param string $state_or_province_code The state or province code. If state or province codes are used in your marketplace, it is recommended that you include one with your request. This helps Amazon to select the most appropriate Amazon fulfillment center for your inbound shipment plan.
     *
     * @return self
     */
    public function setStateOrProvinceCode($state_or_province_code) {
        $this->container['state_or_province_code'] = $state_or_province_code;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode() {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code The country code in two-character ISO 3166-1 alpha-2 format.
     *
     * @return self
     */
    public function setCountryCode($country_code) {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode() {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code The postal code. If postal codes are used in your marketplace, we recommended that you include one with your request. This helps Amazon select the most appropriate Amazon fulfillment center for the inbound shipment plan.
     *
     * @return self
     */
    public function setPostalCode($postal_code) {
        $this->container['postal_code'] = $postal_code;

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
     * @return SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Address
     */
    public function __set($propertyName, $propertyValue) {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}