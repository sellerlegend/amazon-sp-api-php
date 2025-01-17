<?php
/**
 * DebtRecoveryEvent
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
 * DebtRecoveryEvent Class Doc Comment
 *
 * @category Class
 * @description A debt payment or debt adjustment.
 * @package  SellingPartnerApi
 * @group
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DebtRecoveryEvent implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate {
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'DebtRecoveryEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'debt_recovery_type'      => 'string',
        'recovery_amount'         => '\SellerLegend\AmazonSellingPartnerAPI\Models\Finances\Currency',
        'over_payment_credit'     => '\SellerLegend\AmazonSellingPartnerAPI\Models\Finances\Currency',
        'debt_recovery_item_list' => '\SellerLegend\AmazonSellingPartnerAPI\Models\Finances\DebtRecoveryItem[]',
        'charge_instrument_list'  => '\SellerLegend\AmazonSellingPartnerAPI\Models\Finances\ChargeInstrument[]'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $swaggerFormats = [
        'debt_recovery_type'      => null,
        'recovery_amount'         => null,
        'over_payment_credit'     => null,
        'debt_recovery_item_list' => null,
        'charge_instrument_list'  => null
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
        'debt_recovery_type'      => 'DebtRecoveryType',
        'recovery_amount'         => 'RecoveryAmount',
        'over_payment_credit'     => 'OverPaymentCredit',
        'debt_recovery_item_list' => 'DebtRecoveryItemList',
        'charge_instrument_list'  => 'ChargeInstrumentList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'debt_recovery_type'      => 'setDebtRecoveryType',
        'recovery_amount'         => 'setRecoveryAmount',
        'over_payment_credit'     => 'setOverPaymentCredit',
        'debt_recovery_item_list' => 'setDebtRecoveryItemList',
        'charge_instrument_list'  => 'setChargeInstrumentList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'debt_recovery_type'      => 'getDebtRecoveryType',
        'recovery_amount'         => 'getRecoveryAmount',
        'over_payment_credit'     => 'getOverPaymentCredit',
        'debt_recovery_item_list' => 'getDebtRecoveryItemList',
        'charge_instrument_list'  => 'getChargeInstrumentList'
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
        $this->container['debt_recovery_type'] = $data['debt_recovery_type'] ?? null;
        $this->container['recovery_amount'] = $data['recovery_amount'] ?? null;
        $this->container['over_payment_credit'] = $data['over_payment_credit'] ?? null;
        $this->container['debt_recovery_item_list'] = $data['debt_recovery_item_list'] ?? null;
        $this->container['charge_instrument_list'] = $data['charge_instrument_list'] ?? null;
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
     * Gets debt_recovery_type
     *
     * @return string|null
     */
    public function getDebtRecoveryType() {
        return $this->container['debt_recovery_type'];
    }

    /**
     * Sets debt_recovery_type
     *
     * @param string|null $debt_recovery_type The debt recovery type. Possible values: * DebtPayment * DebtPaymentFailure *DebtAdjustment
     *
     * @return self
     */
    public function setDebtRecoveryType($debt_recovery_type) {
        $this->container['debt_recovery_type'] = $debt_recovery_type;

        return $this;
    }

    /**
     * Gets recovery_amount
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Finances\Currency|null
     */
    public function getRecoveryAmount() {
        return $this->container['recovery_amount'];
    }

    /**
     * Sets recovery_amount
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Finances\Currency|null $recovery_amount recovery_amount
     *
     * @return self
     */
    public function setRecoveryAmount($recovery_amount) {
        $this->container['recovery_amount'] = $recovery_amount;

        return $this;
    }

    /**
     * Gets over_payment_credit
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Finances\Currency|null
     */
    public function getOverPaymentCredit() {
        return $this->container['over_payment_credit'];
    }

    /**
     * Sets over_payment_credit
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Finances\Currency|null $over_payment_credit over_payment_credit
     *
     * @return self
     */
    public function setOverPaymentCredit($over_payment_credit) {
        $this->container['over_payment_credit'] = $over_payment_credit;

        return $this;
    }

    /**
     * Gets debt_recovery_item_list
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Finances\DebtRecoveryItem[]|null
     */
    public function getDebtRecoveryItemList() {
        return $this->container['debt_recovery_item_list'];
    }

    /**
     * Sets debt_recovery_item_list
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Finances\DebtRecoveryItem[]|null $debt_recovery_item_list A list of debt recovery item information.
     *
     * @return self
     */
    public function setDebtRecoveryItemList($debt_recovery_item_list) {
        $this->container['debt_recovery_item_list'] = $debt_recovery_item_list;

        return $this;
    }

    /**
     * Gets charge_instrument_list
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Finances\ChargeInstrument[]|null
     */
    public function getChargeInstrumentList() {
        return $this->container['charge_instrument_list'];
    }

    /**
     * Sets charge_instrument_list
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Finances\ChargeInstrument[]|null $charge_instrument_list A list of payment instruments.
     *
     * @return self
     */
    public function setChargeInstrumentList($charge_instrument_list) {
        $this->container['charge_instrument_list'] = $charge_instrument_list;

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
     * @return SellerLegend\AmazonSellingPartnerAPI\Models\Finances\DebtRecoveryEvent
     */
    public function __set($propertyName, $propertyValue) {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


