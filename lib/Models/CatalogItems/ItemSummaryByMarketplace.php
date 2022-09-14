<?php
/**
 * ItemSummaryByMarketplace
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
 * ItemSummaryByMarketplace Class Doc Comment
 *
 * @category Class
 * @description Summary details of an Amazon catalog item for the indicated Amazon marketplace.
 * @package  SellerLegend\AmazonSellingPartnerAPI
 * @group
 * @implements ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ItemSummaryByMarketplace implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate {
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ItemSummaryByMarketplace';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'marketplace_id'        => 'string',
        'brand'                 => 'string',
        'browse_classification' => '\SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemBrowseClassification',
        'color'                 => 'string',
        'item_classification'   => 'string',
        'item_name'             => 'string',
        'manufacturer'          => 'string',
        'model_number'          => 'string',
        'package_quantity'      => 'int',
        'part_number'           => 'string',
        'size'                  => 'string',
        'style'                 => 'string',
        'website_display_group' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $swaggerFormats = [
        'marketplace_id'        => null,
        'brand'                 => null,
        'browse_classification' => null,
        'color'                 => null,
        'item_classification'   => null,
        'item_name'             => null,
        'manufacturer'          => null,
        'model_number'          => null,
        'package_quantity'      => null,
        'part_number'           => null,
        'size'                  => null,
        'style'                 => null,
        'website_display_group' => null
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
        'marketplace_id'        => 'marketplaceId',
        'brand'                 => 'brand',
        'browse_classification' => 'browseClassification',
        'color'                 => 'color',
        'item_classification'   => 'itemClassification',
        'item_name'             => 'itemName',
        'manufacturer'          => 'manufacturer',
        'model_number'          => 'modelNumber',
        'package_quantity'      => 'packageQuantity',
        'part_number'           => 'partNumber',
        'size'                  => 'size',
        'style'                 => 'style',
        'website_display_group' => 'websiteDisplayGroup'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplace_id'        => 'setMarketplaceId',
        'brand'                 => 'setBrand',
        'browse_classification' => 'setBrowseClassification',
        'color'                 => 'setColor',
        'item_classification'   => 'setItemClassification',
        'item_name'             => 'setItemName',
        'manufacturer'          => 'setManufacturer',
        'model_number'          => 'setModelNumber',
        'package_quantity'      => 'setPackageQuantity',
        'part_number'           => 'setPartNumber',
        'size'                  => 'setSize',
        'style'                 => 'setStyle',
        'website_display_group' => 'setWebsiteDisplayGroup'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace_id'        => 'getMarketplaceId',
        'brand'                 => 'getBrand',
        'browse_classification' => 'getBrowseClassification',
        'color'                 => 'getColor',
        'item_classification'   => 'getItemClassification',
        'item_name'             => 'getItemName',
        'manufacturer'          => 'getManufacturer',
        'model_number'          => 'getModelNumber',
        'package_quantity'      => 'getPackageQuantity',
        'part_number'           => 'getPartNumber',
        'size'                  => 'getSize',
        'style'                 => 'getStyle',
        'website_display_group' => 'getWebsiteDisplayGroup'
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

    const ITEM_CLASSIFICATION_BASE_PRODUCT = 'BASE_PRODUCT';
    const ITEM_CLASSIFICATION_OTHER = 'OTHER';
    const ITEM_CLASSIFICATION_PRODUCT_BUNDLE = 'PRODUCT_BUNDLE';
    const ITEM_CLASSIFICATION_VARIATION_PARENT = 'VARIATION_PARENT';


    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getItemClassificationAllowableValues() {
        return [
            self::ITEM_CLASSIFICATION_BASE_PRODUCT,
            self::ITEM_CLASSIFICATION_OTHER,
            self::ITEM_CLASSIFICATION_PRODUCT_BUNDLE,
            self::ITEM_CLASSIFICATION_VARIATION_PARENT,
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
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['brand'] = $data['brand'] ?? null;
        $this->container['browse_classification'] = $data['browse_classification'] ?? null;
        $this->container['color'] = $data['color'] ?? null;
        $this->container['item_classification'] = $data['item_classification'] ?? null;
        $this->container['item_name'] = $data['item_name'] ?? null;
        $this->container['manufacturer'] = $data['manufacturer'] ?? null;
        $this->container['model_number'] = $data['model_number'] ?? null;
        $this->container['package_quantity'] = $data['package_quantity'] ?? null;
        $this->container['part_number'] = $data['part_number'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
        $this->container['style'] = $data['style'] ?? null;
        $this->container['website_display_group'] = $data['website_display_group'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() {
        $invalidProperties = [];
        if ($this->container['marketplace_id'] === null) {
            $invalidProperties[] = "'marketplace_id' can't be null";
        }
        $allowedValues = $this->getItemClassificationAllowableValues();
        if (!is_null($this->container['item_classification']) && !in_array($this->container['item_classification'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'item_classification', must be one of '%s'",
                $this->container['item_classification'],
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
     * Gets marketplace_id
     *
     * @return string
     */
    public function getMarketplaceId() {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string $marketplace_id Amazon marketplace identifier.
     *
     * @return self
     */
    public function setMarketplaceId($marketplace_id) {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string|null
     */
    public function getBrand() {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string|null $brand Name of the brand associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setBrand($brand) {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets browse_classification
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemBrowseClassification|null
     */
    public function getBrowseClassification() {
        return $this->container['browse_classification'];
    }

    /**
     * Sets browse_classification
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemBrowseClassification|null $browse_classification browse_classification
     *
     * @return self
     */
    public function setBrowseClassification($browse_classification) {
        $this->container['browse_classification'] = $browse_classification;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string|null
     */
    public function getColor() {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string|null $color Name of the color associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setColor($color) {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets item_classification
     *
     * @return string|null
     */
    public function getItemClassification() {
        return $this->container['item_classification'];
    }

    /**
     * Sets item_classification
     *
     * @param string|null $item_classification Classification type associated with the Amazon catalog item.
     *
     * @return self
     */
    public function setItemClassification($item_classification) {
        $allowedValues = $this->getItemClassificationAllowableValues();
        if (!is_null($item_classification) && !in_array($item_classification, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'item_classification', must be one of '%s'",
                    $item_classification,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['item_classification'] = $item_classification;

        return $this;
    }

    /**
     * Gets item_name
     *
     * @return string|null
     */
    public function getItemName() {
        return $this->container['item_name'];
    }

    /**
     * Sets item_name
     *
     * @param string|null $item_name Name, or title, associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setItemName($item_name) {
        $this->container['item_name'] = $item_name;

        return $this;
    }

    /**
     * Gets manufacturer
     *
     * @return string|null
     */
    public function getManufacturer() {
        return $this->container['manufacturer'];
    }

    /**
     * Sets manufacturer
     *
     * @param string|null $manufacturer Name of the manufacturer associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setManufacturer($manufacturer) {
        $this->container['manufacturer'] = $manufacturer;

        return $this;
    }

    /**
     * Gets model_number
     *
     * @return string|null
     */
    public function getModelNumber() {
        return $this->container['model_number'];
    }

    /**
     * Sets model_number
     *
     * @param string|null $model_number Model number associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setModelNumber($model_number) {
        $this->container['model_number'] = $model_number;

        return $this;
    }

    /**
     * Gets package_quantity
     *
     * @return int|null
     */
    public function getPackageQuantity() {
        return $this->container['package_quantity'];
    }

    /**
     * Sets package_quantity
     *
     * @param int|null $package_quantity Quantity of an Amazon catalog item in one package.
     *
     * @return self
     */
    public function setPackageQuantity($package_quantity) {
        $this->container['package_quantity'] = $package_quantity;

        return $this;
    }

    /**
     * Gets part_number
     *
     * @return string|null
     */
    public function getPartNumber() {
        return $this->container['part_number'];
    }

    /**
     * Sets part_number
     *
     * @param string|null $part_number Part number associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setPartNumber($part_number) {
        $this->container['part_number'] = $part_number;

        return $this;
    }

    /**
     * Gets size
     *
     * @return string|null
     */
    public function getSize() {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param string|null $size Name of the size associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setSize($size) {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets style
     *
     * @return string|null
     */
    public function getStyle() {
        return $this->container['style'];
    }

    /**
     * Sets style
     *
     * @param string|null $style Name of the style associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setStyle($style) {
        $this->container['style'] = $style;

        return $this;
    }

    /**
     * Gets website_display_group
     *
     * @return string|null
     */
    public function getWebsiteDisplayGroup() {
        return $this->container['website_display_group'];
    }

    /**
     * Sets website_display_group
     *
     * @param string|null $website_display_group Name of the website display group associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setWebsiteDisplayGroup($website_display_group) {
        $this->container['website_display_group'] = $website_display_group;

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
     * @return ItemSummaryByMarketplace
     */
    public function __set($propertyName, $propertyValue) {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


