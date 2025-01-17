<?php
/**
 * FBALiquidationEvent
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
 *
 * The version of the OpenAPI document: v0
 *
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

namespace SellerLegend\AmazonSellingPartnerAPI\Models\Finances;

use \ArrayAccess;
use \SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;
use \SellerLegend\AmazonSellingPartnerAPI\Models\ModelInterface;

/**
 * FBALiquidationEvent Class Doc Comment
 *
 * @category Class
 * @description A payment event for Fulfillment by Amazon (FBA) inventory liquidation. This event is used only in the US marketplace.
 * @package  SellingPartnerApi
 * @group
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FBALiquidationEvent implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate {
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'FBALiquidationEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'posted_date'                 => 'string',
        'original_removal_order_id'   => 'string',
        'liquidation_proceeds_amount' => '\SellerLegend\AmazonSellingPartnerAPI\Models\Finances\Currency',
        'liquidation_fee_amount'      => '\SellerLegend\AmazonSellingPartnerAPI\Models\Finances\Currency'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $swaggerFormats = [
        'posted_date'                 => null,
        'original_removal_order_id'   => null,
        'liquidation_proceeds_amount' => null,
        'liquidation_fee_amount'      => null
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
        'posted_date'                 => 'PostedDate',
        'original_removal_order_id'   => 'OriginalRemovalOrderId',
        'liquidation_proceeds_amount' => 'LiquidationProceedsAmount',
        'liquidation_fee_amount'      => 'LiquidationFeeAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'posted_date'                 => 'setPostedDate',
        'original_removal_order_id'   => 'setOriginalRemovalOrderId',
        'liquidation_proceeds_amount' => 'setLiquidationProceedsAmount',
        'liquidation_fee_amount'      => 'setLiquidationFeeAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'posted_date'                 => 'getPostedDate',
        'original_removal_order_id'   => 'getOriginalRemovalOrderId',
        'liquidation_proceeds_amount' => 'getLiquidationProceedsAmount',
        'liquidation_fee_amount'      => 'getLiquidationFeeAmount'
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
        $this->container['posted_date'] = $data['posted_date'] ?? null;
        $this->container['original_removal_order_id'] = $data['original_removal_order_id'] ?? null;
        $this->container['liquidation_proceeds_amount'] = $data['liquidation_proceeds_amount'] ?? null;
        $this->container['liquidation_fee_amount'] = $data['liquidation_fee_amount'] ?? null;
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
     * Gets posted_date
     *
     * @return string|null
     */
    public function getPostedDate() {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date
     *
     * @param string|null $posted_date A date string in ISO 8601 format.
     *
     * @return self
     */
    public function setPostedDate($posted_date) {
        $this->container['posted_date'] = $posted_date;

        return $this;
    }

    /**
     * Gets original_removal_order_id
     *
     * @return string|null
     */
    public function getOriginalRemovalOrderId() {
        return $this->container['original_removal_order_id'];
    }

    /**
     * Sets original_removal_order_id
     *
     * @param string|null $original_removal_order_id The identifier for the original removal order.
     *
     * @return self
     */
    public function setOriginalRemovalOrderId($original_removal_order_id) {
        $this->container['original_removal_order_id'] = $original_removal_order_id;

        return $this;
    }

    /**
     * Gets liquidation_proceeds_amount
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Finances\Currency|null
     */
    public function getLiquidationProceedsAmount() {
        return $this->container['liquidation_proceeds_amount'];
    }

    /**
     * Sets liquidation_proceeds_amount
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Finances\Currency|null $liquidation_proceeds_amount liquidation_proceeds_amount
     *
     * @return self
     */
    public function setLiquidationProceedsAmount($liquidation_proceeds_amount) {
        $this->container['liquidation_proceeds_amount'] = $liquidation_proceeds_amount;

        return $this;
    }

    /**
     * Gets liquidation_fee_amount
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Finances\Currency|null
     */
    public function getLiquidationFeeAmount() {
        return $this->container['liquidation_fee_amount'];
    }

    /**
     * Sets liquidation_fee_amount
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Finances\Currency|null $liquidation_fee_amount liquidation_fee_amount
     *
     * @return self
     */
    public function setLiquidationFeeAmount($liquidation_fee_amount) {
        $this->container['liquidation_fee_amount'] = $liquidation_fee_amount;

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
     * @return SellerLegend\AmazonSellingPartnerAPI\Models\Finances\FBALiquidationEvent
     */
    public function __set($propertyName, $propertyValue) {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


