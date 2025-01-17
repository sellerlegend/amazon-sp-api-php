<?php
/**
 * ItemVendorDetailsByMarketplace
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
 * ItemVendorDetailsByMarketplace Class Doc Comment
 *
 * @category Class
 * @description Vendor details associated with an Amazon catalog item for the indicated Amazon marketplace.
 * @package  SellerLegend\AmazonSellingPartnerAPI
 * @group
 * @implements ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ItemVendorDetailsByMarketplace implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate {
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ItemVendorDetailsByMarketplace';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'marketplace_id'           => 'string',
        'brand_code'               => 'string',
        'manufacturer_code'        => 'string',
        'manufacturer_code_parent' => 'string',
        'product_category'         => '\SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemVendorDetailsCategory',
        'product_group'            => 'string',
        'product_subcategory'      => '\SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemVendorDetailsCategory',
        'replenishment_category'   => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $swaggerFormats = [
        'marketplace_id'           => null,
        'brand_code'               => null,
        'manufacturer_code'        => null,
        'manufacturer_code_parent' => null,
        'product_category'         => null,
        'product_group'            => null,
        'product_subcategory'      => null,
        'replenishment_category'   => null
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
        'marketplace_id'           => 'marketplaceId',
        'brand_code'               => 'brandCode',
        'manufacturer_code'        => 'manufacturerCode',
        'manufacturer_code_parent' => 'manufacturerCodeParent',
        'product_category'         => 'productCategory',
        'product_group'            => 'productGroup',
        'product_subcategory'      => 'productSubcategory',
        'replenishment_category'   => 'replenishmentCategory'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplace_id'           => 'setMarketplaceId',
        'brand_code'               => 'setBrandCode',
        'manufacturer_code'        => 'setManufacturerCode',
        'manufacturer_code_parent' => 'setManufacturerCodeParent',
        'product_category'         => 'setProductCategory',
        'product_group'            => 'setProductGroup',
        'product_subcategory'      => 'setProductSubcategory',
        'replenishment_category'   => 'setReplenishmentCategory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace_id'           => 'getMarketplaceId',
        'brand_code'               => 'getBrandCode',
        'manufacturer_code'        => 'getManufacturerCode',
        'manufacturer_code_parent' => 'getManufacturerCodeParent',
        'product_category'         => 'getProductCategory',
        'product_group'            => 'getProductGroup',
        'product_subcategory'      => 'getProductSubcategory',
        'replenishment_category'   => 'getReplenishmentCategory'
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

    const REPLENISHMENT_CATEGORY_ALLOCATED = 'ALLOCATED';
    const REPLENISHMENT_CATEGORY_BASIC_REPLENISHMENT = 'BASIC_REPLENISHMENT';
    const REPLENISHMENT_CATEGORY_IN_SEASON = 'IN_SEASON';
    const REPLENISHMENT_CATEGORY_LIMITED_REPLENISHMENT = 'LIMITED_REPLENISHMENT';
    const REPLENISHMENT_CATEGORY_MANUFACTURER_OUT_OF_STOCK = 'MANUFACTURER_OUT_OF_STOCK';
    const REPLENISHMENT_CATEGORY_NEW_PRODUCT = 'NEW_PRODUCT';
    const REPLENISHMENT_CATEGORY_NON_REPLENISHABLE = 'NON_REPLENISHABLE';
    const REPLENISHMENT_CATEGORY_NON_STOCKUPABLE = 'NON_STOCKUPABLE';
    const REPLENISHMENT_CATEGORY_OBSOLETE = 'OBSOLETE';
    const REPLENISHMENT_CATEGORY_PLANNED_REPLENISHMENT = 'PLANNED_REPLENISHMENT';


    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReplenishmentCategoryAllowableValues() {
        return [
            self::REPLENISHMENT_CATEGORY_ALLOCATED,
            self::REPLENISHMENT_CATEGORY_BASIC_REPLENISHMENT,
            self::REPLENISHMENT_CATEGORY_IN_SEASON,
            self::REPLENISHMENT_CATEGORY_LIMITED_REPLENISHMENT,
            self::REPLENISHMENT_CATEGORY_MANUFACTURER_OUT_OF_STOCK,
            self::REPLENISHMENT_CATEGORY_NEW_PRODUCT,
            self::REPLENISHMENT_CATEGORY_NON_REPLENISHABLE,
            self::REPLENISHMENT_CATEGORY_NON_STOCKUPABLE,
            self::REPLENISHMENT_CATEGORY_OBSOLETE,
            self::REPLENISHMENT_CATEGORY_PLANNED_REPLENISHMENT,
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
        $this->container['brand_code'] = $data['brand_code'] ?? null;
        $this->container['manufacturer_code'] = $data['manufacturer_code'] ?? null;
        $this->container['manufacturer_code_parent'] = $data['manufacturer_code_parent'] ?? null;
        $this->container['product_category'] = $data['product_category'] ?? null;
        $this->container['product_group'] = $data['product_group'] ?? null;
        $this->container['product_subcategory'] = $data['product_subcategory'] ?? null;
        $this->container['replenishment_category'] = $data['replenishment_category'] ?? null;
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
        $allowedValues = $this->getReplenishmentCategoryAllowableValues();
        if (!is_null($this->container['replenishment_category']) && !in_array($this->container['replenishment_category'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'replenishment_category', must be one of '%s'",
                $this->container['replenishment_category'],
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
     * Gets brand_code
     *
     * @return string|null
     */
    public function getBrandCode() {
        return $this->container['brand_code'];
    }

    /**
     * Sets brand_code
     *
     * @param string|null $brand_code Brand code associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setBrandCode($brand_code) {
        $this->container['brand_code'] = $brand_code;

        return $this;
    }

    /**
     * Gets manufacturer_code
     *
     * @return string|null
     */
    public function getManufacturerCode() {
        return $this->container['manufacturer_code'];
    }

    /**
     * Sets manufacturer_code
     *
     * @param string|null $manufacturer_code Manufacturer code associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setManufacturerCode($manufacturer_code) {
        $this->container['manufacturer_code'] = $manufacturer_code;

        return $this;
    }

    /**
     * Gets manufacturer_code_parent
     *
     * @return string|null
     */
    public function getManufacturerCodeParent() {
        return $this->container['manufacturer_code_parent'];
    }

    /**
     * Sets manufacturer_code_parent
     *
     * @param string|null $manufacturer_code_parent Parent vendor code of the manufacturer code.
     *
     * @return self
     */
    public function setManufacturerCodeParent($manufacturer_code_parent) {
        $this->container['manufacturer_code_parent'] = $manufacturer_code_parent;

        return $this;
    }

    /**
     * Gets product_category
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemVendorDetailsCategory|null
     */
    public function getProductCategory() {
        return $this->container['product_category'];
    }

    /**
     * Sets product_category
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemVendorDetailsCategory|null $product_category product_category
     *
     * @return self
     */
    public function setProductCategory($product_category) {
        $this->container['product_category'] = $product_category;

        return $this;
    }

    /**
     * Gets product_group
     *
     * @return string|null
     */
    public function getProductGroup() {
        return $this->container['product_group'];
    }

    /**
     * Sets product_group
     *
     * @param string|null $product_group Product group associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setProductGroup($product_group) {
        $this->container['product_group'] = $product_group;

        return $this;
    }

    /**
     * Gets product_subcategory
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemVendorDetailsCategory|null
     */
    public function getProductSubcategory() {
        return $this->container['product_subcategory'];
    }

    /**
     * Sets product_subcategory
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemVendorDetailsCategory|null $product_subcategory product_subcategory
     *
     * @return self
     */
    public function setProductSubcategory($product_subcategory) {
        $this->container['product_subcategory'] = $product_subcategory;

        return $this;
    }

    /**
     * Gets replenishment_category
     *
     * @return string|null
     */
    public function getReplenishmentCategory() {
        return $this->container['replenishment_category'];
    }

    /**
     * Sets replenishment_category
     *
     * @param string|null $replenishment_category Replenishment category associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setReplenishmentCategory($replenishment_category) {
        $allowedValues = $this->getReplenishmentCategoryAllowableValues();
        if (!is_null($replenishment_category) && !in_array($replenishment_category, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'replenishment_category', must be one of '%s'",
                    $replenishment_category,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['replenishment_category'] = $replenishment_category;

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
     * @return ItemVendorDetailsByMarketplace
     */
    public function __set($propertyName, $propertyValue) {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


