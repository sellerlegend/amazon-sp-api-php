<?php
/**
 * ItemRelationship
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
 * ItemRelationship Class Doc Comment
 *
 * @category Class
 * @description Relationship details for an Amazon catalog item.
 * @package  SellerLegend\AmazonSellingPartnerAPI
 * @group
 * @implements ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ItemRelationship implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate {
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ItemRelationship';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'child_asins'     => 'string[]',
        'parent_asins'    => 'string[]',
        'variation_theme' => '\SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemVariationTheme',
        'type'            => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $swaggerFormats = [
        'child_asins'     => null,
        'parent_asins'    => null,
        'variation_theme' => null,
        'type'            => null
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
        'child_asins'     => 'childAsins',
        'parent_asins'    => 'parentAsins',
        'variation_theme' => 'variationTheme',
        'type'            => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'child_asins'     => 'setChildAsins',
        'parent_asins'    => 'setParentAsins',
        'variation_theme' => 'setVariationTheme',
        'type'            => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'child_asins'     => 'getChildAsins',
        'parent_asins'    => 'getParentAsins',
        'variation_theme' => 'getVariationTheme',
        'type'            => 'getType'
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

    const TYPE_VARIATION = 'VARIATION';
    const TYPE_PACKAGE_HIERARCHY = 'PACKAGE_HIERARCHY';


    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues() {
        return [
            self::TYPE_VARIATION,
            self::TYPE_PACKAGE_HIERARCHY,
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
        $this->container['child_asins'] = $data['child_asins'] ?? null;
        $this->container['parent_asins'] = $data['parent_asins'] ?? null;
        $this->container['variation_theme'] = $data['variation_theme'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
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
     * Gets child_asins
     *
     * @return string[]|null
     */
    public function getChildAsins() {
        return $this->container['child_asins'];
    }

    /**
     * Sets child_asins
     *
     * @param string[]|null $child_asins Identifiers (ASINs) of the related items that are children of this item.
     *
     * @return self
     */
    public function setChildAsins($child_asins) {
        $this->container['child_asins'] = $child_asins;

        return $this;
    }

    /**
     * Gets parent_asins
     *
     * @return string[]|null
     */
    public function getParentAsins() {
        return $this->container['parent_asins'];
    }

    /**
     * Sets parent_asins
     *
     * @param string[]|null $parent_asins Identifiers (ASINs) of the related items that are parents of this item.
     *
     * @return self
     */
    public function setParentAsins($parent_asins) {
        $this->container['parent_asins'] = $parent_asins;

        return $this;
    }

    /**
     * Gets variation_theme
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemVariationTheme|null
     */
    public function getVariationTheme() {
        return $this->container['variation_theme'];
    }

    /**
     * Sets variation_theme
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemVariationTheme|null $variation_theme variation_theme
     *
     * @return self
     */
    public function setVariationTheme($variation_theme) {
        $this->container['variation_theme'] = $variation_theme;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType() {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of relationship.
     *
     * @return self
     */
    public function setType($type) {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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
     * @return ItemRelationship
     */
    public function __set($propertyName, $propertyValue) {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


