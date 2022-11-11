<?php

namespace SellerLegend\AmazonSellingPartnerAPI\Models\Orders;

use \ArrayAccess;
use \SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;
use \SellerLegend\AmazonSellingPartnerAPI\Models\ModelInterface;

/**
 * Address Class Doc Comment
 *
 * @category Class
 * @description The shipping address for the order.
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
        'name'            => 'string',
        'address_line1'   => 'string',
        'address_line2'   => 'string',
        'address_line3'   => 'string',
        'city'            => 'string',
        'county'          => 'string',
        'district'        => 'string',
        'state_or_region' => 'string',
        'municipality'    => 'string',
        'postal_code'     => 'string',
        'country_code'    => 'string',
        'phone'           => 'string',
        'address_type'    => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $swaggerFormats = [
        'name'            => null,
        'address_line1'   => null,
        'address_line2'   => null,
        'address_line3'   => null,
        'city'            => null,
        'county'          => null,
        'district'        => null,
        'state_or_region' => null,
        'municipality'    => null,
        'postal_code'     => null,
        'country_code'    => null,
        'phone'           => null,
        'address_type'    => null
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
        'name'            => 'Name',
        'address_line1'   => 'AddressLine1',
        'address_line2'   => 'AddressLine2',
        'address_line3'   => 'AddressLine3',
        'city'            => 'City',
        'county'          => 'County',
        'district'        => 'District',
        'state_or_region' => 'StateOrRegion',
        'municipality'    => 'Municipality',
        'postal_code'     => 'PostalCode',
        'country_code'    => 'CountryCode',
        'phone'           => 'Phone',
        'address_type'    => 'AddressType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name'            => 'setName',
        'address_line1'   => 'setAddressLine1',
        'address_line2'   => 'setAddressLine2',
        'address_line3'   => 'setAddressLine3',
        'city'            => 'setCity',
        'county'          => 'setCounty',
        'district'        => 'setDistrict',
        'state_or_region' => 'setStateOrRegion',
        'municipality'    => 'setMunicipality',
        'postal_code'     => 'setPostalCode',
        'country_code'    => 'setCountryCode',
        'phone'           => 'setPhone',
        'address_type'    => 'setAddressType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name'            => 'getName',
        'address_line1'   => 'getAddressLine1',
        'address_line2'   => 'getAddressLine2',
        'address_line3'   => 'getAddressLine3',
        'city'            => 'getCity',
        'county'          => 'getCounty',
        'district'        => 'getDistrict',
        'state_or_region' => 'getStateOrRegion',
        'municipality'    => 'getMunicipality',
        'postal_code'     => 'getPostalCode',
        'country_code'    => 'getCountryCode',
        'phone'           => 'getPhone',
        'address_type'    => 'getAddressType'
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

    const ADDRESS_TYPE_RESIDENTIAL = 'Residential';
    const ADDRESS_TYPE_COMMERCIAL = 'Commercial';


    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAddressTypeAllowableValues() {
        return [
            self::ADDRESS_TYPE_RESIDENTIAL,
            self::ADDRESS_TYPE_COMMERCIAL,
        ];
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
        $this->container['address_line3'] = $data['address_line3'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['county'] = $data['county'] ?? null;
        $this->container['district'] = $data['district'] ?? null;
        $this->container['state_or_region'] = $data['state_or_region'] ?? null;
        $this->container['municipality'] = $data['municipality'] ?? null;
        $this->container['postal_code'] = $data['postal_code'] ?? null;
        $this->container['country_code'] = $data['country_code'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['address_type'] = $data['address_type'] ?? null;
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
        $allowedValues = $this->getAddressTypeAllowableValues();
        if (!is_null($this->container['address_type']) && !in_array($this->container['address_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'address_type', must be one of '%s'",
                $this->container['address_type'],
                implode("', '", $allowedValues)
            );
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
     * @param string $name The name.
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
     * @return string|null
     */
    public function getAddressLine1() {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1
     *
     * @param string|null $address_line1 The street address.
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
     * Gets address_line3
     *
     * @return string|null
     */
    public function getAddressLine3() {
        return $this->container['address_line3'];
    }

    /**
     * Sets address_line3
     *
     * @param string|null $address_line3 Additional street address information, if required.
     *
     * @return self
     */
    public function setAddressLine3($address_line3) {
        $this->container['address_line3'] = $address_line3;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity() {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city The city
     *
     * @return self
     */
    public function setCity($city) {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets county
     *
     * @return string|null
     */
    public function getCounty() {
        return $this->container['county'];
    }

    /**
     * Sets county
     *
     * @param string|null $county The county.
     *
     * @return self
     */
    public function setCounty($county) {
        $this->container['county'] = $county;

        return $this;
    }

    /**
     * Gets district
     *
     * @return string|null
     */
    public function getDistrict() {
        return $this->container['district'];
    }

    /**
     * Sets district
     *
     * @param string|null $district The district.
     *
     * @return self
     */
    public function setDistrict($district) {
        $this->container['district'] = $district;

        return $this;
    }

    /**
     * Gets state_or_region
     *
     * @return string|null
     */
    public function getStateOrRegion() {
        return $this->container['state_or_region'];
    }

    /**
     * Sets state_or_region
     *
     * @param string|null $state_or_region The state or region.
     *
     * @return self
     */
    public function setStateOrRegion($state_or_region) {
        $this->container['state_or_region'] = $state_or_region;

        return $this;
    }

    /**
     * Gets municipality
     *
     * @return string|null
     */
    public function getMunicipality() {
        return $this->container['municipality'];
    }

    /**
     * Sets municipality
     *
     * @param string|null $municipality The municipality.
     *
     * @return self
     */
    public function setMunicipality($municipality) {
        $this->container['municipality'] = $municipality;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode() {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code The postal code.
     *
     * @return self
     */
    public function setPostalCode($postal_code) {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string|null
     */
    public function getCountryCode() {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string|null $country_code The country code. A two-character country code, in ISO 3166-1 alpha-2 format.
     *
     * @return self
     */
    public function setCountryCode($country_code) {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone() {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone The phone number. Not returned for Fulfillment by Amazon (FBA) orders.
     *
     * @return self
     */
    public function setPhone($phone) {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets address_type
     *
     * @return string|null
     */
    public function getAddressType() {
        return $this->container['address_type'];
    }

    /**
     * Sets address_type
     *
     * @param string|null $address_type The address type of the shipping address.
     *
     * @return self
     */
    public function setAddressType($address_type) {
        $allowedValues = $this->getAddressTypeAllowableValues();
        if (!is_null($address_type) && !in_array($address_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'address_type', must be one of '%s'",
                    $address_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['address_type'] = $address_type;

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
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Address
     */
    public function __set($propertyName, $propertyValue) {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


