<?php

namespace SellerLegend\AmazonSellingPartnerAPI\Models\Orders;

use \ArrayAccess;
use \SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;
use \SellerLegend\AmazonSellingPartnerAPI\Models\ModelInterface;

/**
 * RegulatedInformationField Class Doc Comment
 *
 * @category Class
 * @description A field collected from the regulatory form.
 * @package  SellerLegend\AmazonSellingPartnerAPI
 * @group
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RegulatedInformationField implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate {

    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'RegulatedInformationField';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'field_id'    => 'string',
        'field_label' => 'string',
        'field_type'  => 'string',
        'field_value' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $swaggerFormats = [
        'field_id'    => null,
        'field_label' => null,
        'field_type'  => null,
        'field_value' => null
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
        'field_id'    => 'FieldId',
        'field_label' => 'FieldLabel',
        'field_type'  => 'FieldType',
        'field_value' => 'FieldValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'field_id'    => 'setFieldId',
        'field_label' => 'setFieldLabel',
        'field_type'  => 'setFieldType',
        'field_value' => 'setFieldValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'field_id'    => 'getFieldId',
        'field_label' => 'getFieldLabel',
        'field_type'  => 'getFieldType',
        'field_value' => 'getFieldValue'
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

    const FIELD_TYPE_TEXT = 'Text';
    const FIELD_TYPE_FILE_ATTACHMENT = 'FileAttachment';


    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFieldTypeAllowableValues() {
        return [
            self::FIELD_TYPE_TEXT,
            self::FIELD_TYPE_FILE_ATTACHMENT,
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
        $this->container['field_id'] = $data['field_id'] ?? null;
        $this->container['field_label'] = $data['field_label'] ?? null;
        $this->container['field_type'] = $data['field_type'] ?? null;
        $this->container['field_value'] = $data['field_value'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() {
        $invalidProperties = [];
        if ($this->container['field_id'] === null) {
            $invalidProperties[] = "'field_id' can't be null";
        }
        if ($this->container['field_label'] === null) {
            $invalidProperties[] = "'field_label' can't be null";
        }
        if ($this->container['field_type'] === null) {
            $invalidProperties[] = "'field_type' can't be null";
        }
        $allowedValues = $this->getFieldTypeAllowableValues();
        if (!is_null($this->container['field_type']) && !in_array($this->container['field_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'field_type', must be one of '%s'",
                $this->container['field_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['field_value'] === null) {
            $invalidProperties[] = "'field_value' can't be null";
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
     * Gets field_id
     *
     * @return string
     */
    public function getFieldId() {
        return $this->container['field_id'];
    }

    /**
     * Sets field_id
     *
     * @param string $field_id The unique identifier for the field.
     *
     * @return self
     */
    public function setFieldId($field_id) {
        $this->container['field_id'] = $field_id;

        return $this;
    }

    /**
     * Gets field_label
     *
     * @return string
     */
    public function getFieldLabel() {
        return $this->container['field_label'];
    }

    /**
     * Sets field_label
     *
     * @param string $field_label The name for the field.
     *
     * @return self
     */
    public function setFieldLabel($field_label) {
        $this->container['field_label'] = $field_label;

        return $this;
    }

    /**
     * Gets field_type
     *
     * @return string
     */
    public function getFieldType() {
        return $this->container['field_type'];
    }

    /**
     * Sets field_type
     *
     * @param string $field_type The type of field.
     *
     * @return self
     */
    public function setFieldType($field_type) {
        $allowedValues = $this->getFieldTypeAllowableValues();
        if (!in_array($field_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'field_type', must be one of '%s'",
                    $field_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['field_type'] = $field_type;

        return $this;
    }

    /**
     * Gets field_value
     *
     * @return string
     */
    public function getFieldValue() {
        return $this->container['field_value'];
    }

    /**
     * Sets field_value
     *
     * @param string $field_value The content of the field as collected in regulatory form. Note that FileAttachment type fields will contain a URL to download the attachment here.
     *
     * @return self
     */
    public function setFieldValue($field_value) {
        $this->container['field_value'] = $field_value;

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
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\RegulatedInformationField
     */
    public function __set($propertyName, $propertyValue) {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


