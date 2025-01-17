<?php
/**
 * PartneredLtlDataInput
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
 * PartneredLtlDataInput Class Doc Comment
 *
 * @category Class
 * @description Information that is required by an Amazon-partnered carrier to ship a Less Than Truckload/Full Truckload (LTL/FTL) inbound shipment.
 * @package  SellingPartnerApi
 * @group
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PartneredLtlDataInput implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate {
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'PartneredLtlDataInput';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'contact'               => '\SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Contact',
        'box_count'             => 'int',
        'seller_freight_class'  => 'string',
        'freight_ready_date'    => 'string',
        'pallet_list'           => '\SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Pallet[]',
        'total_weight'          => '\SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Weight',
        'seller_declared_value' => '\SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Amount'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $swaggerFormats = [
        'contact'               => null,
        'box_count'             => 'int64',
        'seller_freight_class'  => null,
        'freight_ready_date'    => null,
        'pallet_list'           => null,
        'total_weight'          => null,
        'seller_declared_value' => null
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
        'contact'               => 'Contact',
        'box_count'             => 'BoxCount',
        'seller_freight_class'  => 'SellerFreightClass',
        'freight_ready_date'    => 'FreightReadyDate',
        'pallet_list'           => 'PalletList',
        'total_weight'          => 'TotalWeight',
        'seller_declared_value' => 'SellerDeclaredValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contact'               => 'setContact',
        'box_count'             => 'setBoxCount',
        'seller_freight_class'  => 'setSellerFreightClass',
        'freight_ready_date'    => 'setFreightReadyDate',
        'pallet_list'           => 'setPalletList',
        'total_weight'          => 'setTotalWeight',
        'seller_declared_value' => 'setSellerDeclaredValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contact'               => 'getContact',
        'box_count'             => 'getBoxCount',
        'seller_freight_class'  => 'getSellerFreightClass',
        'freight_ready_date'    => 'getFreightReadyDate',
        'pallet_list'           => 'getPalletList',
        'total_weight'          => 'getTotalWeight',
        'seller_declared_value' => 'getSellerDeclaredValue'
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
        $this->container['contact'] = $data['contact'] ?? null;
        $this->container['box_count'] = $data['box_count'] ?? null;
        $this->container['seller_freight_class'] = $data['seller_freight_class'] ?? null;
        $this->container['freight_ready_date'] = $data['freight_ready_date'] ?? null;
        $this->container['pallet_list'] = $data['pallet_list'] ?? null;
        $this->container['total_weight'] = $data['total_weight'] ?? null;
        $this->container['seller_declared_value'] = $data['seller_declared_value'] ?? null;
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
     * Gets contact
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Contact|null
     */
    public function getContact() {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Contact|null $contact contact
     *
     * @return self
     */
    public function setContact($contact) {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets box_count
     *
     * @return int|null
     */
    public function getBoxCount() {
        return $this->container['box_count'];
    }

    /**
     * Sets box_count
     *
     * @param int|null $box_count box_count
     *
     * @return self
     */
    public function setBoxCount($box_count) {
        $this->container['box_count'] = $box_count;

        return $this;
    }

    /**
     * Gets seller_freight_class
     *
     * @return string|null
     */
    public function getSellerFreightClass() {
        return $this->container['seller_freight_class'];
    }

    /**
     * Sets seller_freight_class
     *
     * @param string|null $seller_freight_class The freight class of the shipment. For information about determining the freight class, contact the carrier.
     *
     * @return self
     */
    public function setSellerFreightClass($seller_freight_class) {
        $this->container['seller_freight_class'] = $seller_freight_class;

        return $this;
    }

    /**
     * Gets freight_ready_date
     *
     * @return string|null
     */
    public function getFreightReadyDate() {
        return $this->container['freight_ready_date'];
    }

    /**
     * Sets freight_ready_date
     *
     * @param string|null $freight_ready_date A date string in ISO 8601 format.
     *
     * @return self
     */
    public function setFreightReadyDate($freight_ready_date) {
        $this->container['freight_ready_date'] = $freight_ready_date;

        return $this;
    }

    /**
     * Gets pallet_list
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Pallet[]|null
     */
    public function getPalletList() {
        return $this->container['pallet_list'];
    }

    /**
     * Sets pallet_list
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Pallet[]|null $pallet_list A list of pallet information.
     *
     * @return self
     */
    public function setPalletList($pallet_list) {
        $this->container['pallet_list'] = $pallet_list;

        return $this;
    }

    /**
     * Gets total_weight
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Weight|null
     */
    public function getTotalWeight() {
        return $this->container['total_weight'];
    }

    /**
     * Sets total_weight
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Weight|null $total_weight total_weight
     *
     * @return self
     */
    public function setTotalWeight($total_weight) {
        $this->container['total_weight'] = $total_weight;

        return $this;
    }

    /**
     * Gets seller_declared_value
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Amount|null
     */
    public function getSellerDeclaredValue() {
        return $this->container['seller_declared_value'];
    }

    /**
     * Sets seller_declared_value
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Amount|null $seller_declared_value seller_declared_value
     *
     * @return self
     */
    public function setSellerDeclaredValue($seller_declared_value) {
        $this->container['seller_declared_value'] = $seller_declared_value;

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
     * @return SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PartneredLtlDataInput
     */
    public function __set($propertyName, $propertyValue) {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


