<?php
/**
 * GetPreorderInfoResult
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
 * GetPreorderInfoResult Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @group
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetPreorderInfoResult implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate {
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'GetPreorderInfoResult';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'shipment_contains_preorderable_items' => 'bool',
        'shipment_confirmed_for_preorder'      => 'bool',
        'need_by_date'                         => 'string',
        'confirmed_fulfillable_date'           => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $swaggerFormats = [
        'shipment_contains_preorderable_items' => null,
        'shipment_confirmed_for_preorder'      => null,
        'need_by_date'                         => null,
        'confirmed_fulfillable_date'           => null
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
        'shipment_contains_preorderable_items' => 'ShipmentContainsPreorderableItems',
        'shipment_confirmed_for_preorder'      => 'ShipmentConfirmedForPreorder',
        'need_by_date'                         => 'NeedByDate',
        'confirmed_fulfillable_date'           => 'ConfirmedFulfillableDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment_contains_preorderable_items' => 'setShipmentContainsPreorderableItems',
        'shipment_confirmed_for_preorder'      => 'setShipmentConfirmedForPreorder',
        'need_by_date'                         => 'setNeedByDate',
        'confirmed_fulfillable_date'           => 'setConfirmedFulfillableDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_contains_preorderable_items' => 'getShipmentContainsPreorderableItems',
        'shipment_confirmed_for_preorder'      => 'getShipmentConfirmedForPreorder',
        'need_by_date'                         => 'getNeedByDate',
        'confirmed_fulfillable_date'           => 'getConfirmedFulfillableDate'
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
        $this->container['shipment_contains_preorderable_items'] = $data['shipment_contains_preorderable_items'] ?? null;
        $this->container['shipment_confirmed_for_preorder'] = $data['shipment_confirmed_for_preorder'] ?? null;
        $this->container['need_by_date'] = $data['need_by_date'] ?? null;
        $this->container['confirmed_fulfillable_date'] = $data['confirmed_fulfillable_date'] ?? null;
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
     * Gets shipment_contains_preorderable_items
     *
     * @return bool|null
     */
    public function getShipmentContainsPreorderableItems() {
        return $this->container['shipment_contains_preorderable_items'];
    }

    /**
     * Sets shipment_contains_preorderable_items
     *
     * @param bool|null $shipment_contains_preorderable_items Indicates whether the shipment contains items that have been enabled for pre-order. For more information about enabling items for pre-order, see the Seller Central Help.
     *
     * @return self
     */
    public function setShipmentContainsPreorderableItems($shipment_contains_preorderable_items) {
        $this->container['shipment_contains_preorderable_items'] = $shipment_contains_preorderable_items;

        return $this;
    }

    /**
     * Gets shipment_confirmed_for_preorder
     *
     * @return bool|null
     */
    public function getShipmentConfirmedForPreorder() {
        return $this->container['shipment_confirmed_for_preorder'];
    }

    /**
     * Sets shipment_confirmed_for_preorder
     *
     * @param bool|null $shipment_confirmed_for_preorder Indicates whether this shipment has been confirmed for pre-order.
     *
     * @return self
     */
    public function setShipmentConfirmedForPreorder($shipment_confirmed_for_preorder) {
        $this->container['shipment_confirmed_for_preorder'] = $shipment_confirmed_for_preorder;

        return $this;
    }

    /**
     * Gets need_by_date
     *
     * @return string|null
     */
    public function getNeedByDate() {
        return $this->container['need_by_date'];
    }

    /**
     * Sets need_by_date
     *
     * @param string|null $need_by_date A date string in ISO 8601 format.
     *
     * @return self
     */
    public function setNeedByDate($need_by_date) {
        $this->container['need_by_date'] = $need_by_date;

        return $this;
    }

    /**
     * Gets confirmed_fulfillable_date
     *
     * @return string|null
     */
    public function getConfirmedFulfillableDate() {
        return $this->container['confirmed_fulfillable_date'];
    }

    /**
     * Sets confirmed_fulfillable_date
     *
     * @param string|null $confirmed_fulfillable_date A date string in ISO 8601 format.
     *
     * @return self
     */
    public function setConfirmedFulfillableDate($confirmed_fulfillable_date) {
        $this->container['confirmed_fulfillable_date'] = $confirmed_fulfillable_date;

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
     * @return SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\GetPreorderInfoResult
     */
    public function __set($propertyName, $propertyValue) {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


