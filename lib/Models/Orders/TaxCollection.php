<?php

namespace SellerLegend\AmazonSellingPartnerAPI\Models\Orders;

use \ArrayAccess;
use \SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;
use \SellerLegend\AmazonSellingPartnerAPI\Models\ModelInterface;

/**
 * TaxCollection Class Doc Comment
 *
 * @category Class
 * @description Information about withheld taxes.
 * @package  SellerLegend\AmazonSellingPartnerAPI
 * @group
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TaxCollection implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate {

    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'TaxCollection';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'model'             => 'string',
        'responsible_party' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $swaggerFormats = [
        'model'             => null,
        'responsible_party' => null
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
        'model'             => 'Model',
        'responsible_party' => 'ResponsibleParty'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'model'             => 'setModel',
        'responsible_party' => 'setResponsibleParty'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'model'             => 'getModel',
        'responsible_party' => 'getResponsibleParty'
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

    const MODEL_MARKETPLACE_FACILITATOR = 'MarketplaceFacilitator';
    const MODEL_LOW_VALUE_GOODS = 'LowValueGoods';


    const RESPONSIBLE_PARTY_SERVICES_INC = 'Amazon Services, Inc.';
    const RESPONSIBLE_PARTY_COMMERCIAL_SERVICES_PTY_LTD = 'Amazon Commercial Services Pty Ltd';


    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getModelAllowableValues() {
        return [
            self::MODEL_MARKETPLACE_FACILITATOR,
            self::MODEL_LOW_VALUE_GOODS,
        ];
    }


    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResponsiblePartyAllowableValues() {
        return [
            self::RESPONSIBLE_PARTY_SERVICES_INC,
            self::RESPONSIBLE_PARTY_COMMERCIAL_SERVICES_PTY_LTD,
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
        $this->container['model'] = $data['model'] ?? null;
        $this->container['responsible_party'] = $data['responsible_party'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() {
        $invalidProperties = [];
        $allowedValues = $this->getModelAllowableValues();
        if (!is_null($this->container['model']) && !in_array($this->container['model'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'model', must be one of '%s'",
                $this->container['model'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getResponsiblePartyAllowableValues();
        if (!is_null($this->container['responsible_party']) && !in_array($this->container['responsible_party'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'responsible_party', must be one of '%s'",
                $this->container['responsible_party'],
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
     * Gets model
     *
     * @return string|null
     */
    public function getModel() {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string|null $model The tax collection model applied to the item.
     *
     * @return self
     */
    public function setModel($model) {
        $allowedValues = $this->getModelAllowableValues();
        if (!is_null($model) && !in_array($model, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'model', must be one of '%s'",
                    $model,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets responsible_party
     *
     * @return string|null
     */
    public function getResponsibleParty() {
        return $this->container['responsible_party'];
    }

    /**
     * Sets responsible_party
     *
     * @param string|null $responsible_party The party responsible for withholding the taxes and remitting them to the taxing authority.
     *
     * @return self
     */
    public function setResponsibleParty($responsible_party) {
        $allowedValues = $this->getResponsiblePartyAllowableValues();
        if (!is_null($responsible_party) && !in_array($responsible_party, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'responsible_party', must be one of '%s'",
                    $responsible_party,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['responsible_party'] = $responsible_party;

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
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\TaxCollection
     */
    public function __set($propertyName, $propertyValue) {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


