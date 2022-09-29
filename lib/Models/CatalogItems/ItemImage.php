<?php
/**
 * ItemImage
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellerLegend\AmazonSellingPartnerAPI
 */

namespace SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems;

use ArrayAccess;
use IteratorAggregate;
use JsonSerializable;
use SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;
use SellerLegend\AmazonSellingPartnerAPI\Models\ModelInterface;
use Traversable;

/**
 * ItemImage Class Doc Comment
 *
 * @category Class
 * @description Image for an item in the Amazon catalog.
 * @package  SellerLegend\AmazonSellingPartnerAPI
 * @group
 * @implements ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ItemImage implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate {
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ItemImage';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'variant' => 'string',
        'link'    => 'string',
        'height'  => 'int',
        'width'   => 'int'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $swaggerFormats = [
        'variant' => null,
        'link'    => null,
        'height'  => null,
        'width'   => null
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
        'variant' => 'variant',
        'link'    => 'link',
        'height'  => 'height',
        'width'   => 'width'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'variant' => 'setVariant',
        'link'    => 'setLink',
        'height'  => 'setHeight',
        'width'   => 'setWidth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'variant' => 'getVariant',
        'link'    => 'getLink',
        'height'  => 'getHeight',
        'width'   => 'getWidth'
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

    const VARIANT_MAIN = 'MAIN';
    const VARIANT_PT01 = 'PT01';
    const VARIANT_PT02 = 'PT02';
    const VARIANT_PT03 = 'PT03';
    const VARIANT_PT04 = 'PT04';
    const VARIANT_PT05 = 'PT05';
    const VARIANT_PT06 = 'PT06';
    const VARIANT_PT07 = 'PT07';
    const VARIANT_PT08 = 'PT08';
    const VARIANT_SWCH = 'SWCH';


    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVariantAllowableValues() {
        return [
            self::VARIANT_MAIN,
            self::VARIANT_PT01,
            self::VARIANT_PT02,
            self::VARIANT_PT03,
            self::VARIANT_PT04,
            self::VARIANT_PT05,
            self::VARIANT_PT06,
            self::VARIANT_PT07,
            self::VARIANT_PT08,
            self::VARIANT_SWCH,
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
        $this->container['variant'] = $data['variant'] ?? null;
        $this->container['link'] = $data['link'] ?? null;
        $this->container['height'] = $data['height'] ?? null;
        $this->container['width'] = $data['width'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() {
        $invalidProperties = [];
        if ($this->container['variant'] === null) {
            $invalidProperties[] = "'variant' can't be null";
        }
        $allowedValues = $this->getVariantAllowableValues();
        if (!is_null($this->container['variant']) && !in_array(strtoupper($this->container['variant']), $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'variant', must be one of '%s'",
                $this->container['variant'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['link'] === null) {
            $invalidProperties[] = "'link' can't be null";
        }
        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
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
     * Gets variant
     *
     * @return string
     */
    public function getVariant() {
        return strtoupper($this->container['variant']);
    }

    /**
     * Sets variant
     *
     * @param string $variant Variant of the image, such as `MAIN` or `PT01`.
     *
     * @return self
     */
    public function setVariant($variant) {
        $allowedValues = $this->getVariantAllowableValues();
        if (!in_array(strtoupper($variant), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'variant', must be one of '%s'",
                    $variant,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['variant'] = strtoupper($variant);

        return $this;
    }

    /**
     * Gets link
     *
     * @return string
     */
    public function getLink() {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param string $link Link, or URL, for the image.
     *
     * @return self
     */
    public function setLink($link) {
        $this->container['link'] = $link;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int
     */
    public function getHeight() {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int $height Height of the image in pixels.
     *
     * @return self
     */
    public function setHeight($height) {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int
     */
    public function getWidth() {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int $width Width of the image in pixels.
     *
     * @return self
     */
    public function setWidth($width) {
        $this->container['width'] = $width;

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
     * @return ItemImage
     */
    public function __set($propertyName, $propertyValue) {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


