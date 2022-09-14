<?php
/**
 * Item
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
 * Item Class Doc Comment
 *
 * @category Class
 * @description An item in the Amazon catalog.
 * @package  SellerLegend\AmazonSellingPartnerAPI
 * @group
 * @implements ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Item implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate {
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Item';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'asin'           => 'string',
        'attributes'     => 'object',
        'dimensions'     => '\SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemDimensionsByMarketplace[]',
        'identifiers'    => '\SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemIdentifiersByMarketplace[]',
        'images'         => '\SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemImagesByMarketplace[]',
        'product_types'  => '\SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemProductTypeByMarketplace[]',
        'relationships'  => '\SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemRelationshipsByMarketplace[]',
        'sales_ranks'    => '\SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemSalesRanksByMarketplace[]',
        'summaries'      => '\SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemSummaryByMarketplace[]',
        'vendor_details' => '\SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemVendorDetailsByMarketplace[]'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $swaggerFormats = [
        'asin'           => null,
        'attributes'     => null,
        'dimensions'     => null,
        'identifiers'    => null,
        'images'         => null,
        'product_types'  => null,
        'relationships'  => null,
        'sales_ranks'    => null,
        'summaries'      => null,
        'vendor_details' => null
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
        'headers'        => 'headers',
        'asin'           => 'asin',
        'attributes'     => 'attributes',
        'dimensions'     => 'dimensions',
        'identifiers'    => 'identifiers',
        'images'         => 'images',
        'product_types'  => 'productTypes',
        'relationships'  => 'relationships',
        'sales_ranks'    => 'salesRanks',
        'summaries'      => 'summaries',
        'vendor_details' => 'vendorDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'headers'        => 'setHeaders',
        'asin'           => 'setAsin',
        'attributes'     => 'setAttributes',
        'dimensions'     => 'setDimensions',
        'identifiers'    => 'setIdentifiers',
        'images'         => 'setImages',
        'product_types'  => 'setProductTypes',
        'relationships'  => 'setRelationships',
        'sales_ranks'    => 'setSalesRanks',
        'summaries'      => 'setSummaries',
        'vendor_details' => 'setVendorDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'headers'        => 'getHeaders',
        'asin'           => 'getAsin',
        'attributes'     => 'getAttributes',
        'dimensions'     => 'getDimensions',
        'identifiers'    => 'getIdentifiers',
        'images'         => 'getImages',
        'product_types'  => 'getProductTypes',
        'relationships'  => 'getRelationships',
        'sales_ranks'    => 'getSalesRanks',
        'summaries'      => 'getSummaries',
        'vendor_details' => 'getVendorDetails'
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
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['attributes'] = $data['attributes'] ?? null;
        $this->container['dimensions'] = $data['dimensions'] ?? null;
        $this->container['identifiers'] = $data['identifiers'] ?? null;
        $this->container['images'] = $data['images'] ?? null;
        $this->container['product_types'] = $data['product_types'] ?? null;
        $this->container['relationships'] = $data['relationships'] ?? null;
        $this->container['sales_ranks'] = $data['sales_ranks'] ?? null;
        $this->container['summaries'] = $data['summaries'] ?? null;
        $this->container['vendor_details'] = $data['vendor_details'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() {
        $invalidProperties = [];
        if ($this->container['asin'] === null) {
            $invalidProperties[] = "'asin' can't be null";
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
     * Gets API response headers
     *
     * @return array[string]
     */
    public function getHeaders() {
        return $this->container['headers'];
    }

    /**
     * Sets API response headers (only relevant to response models)
     *
     * @param array[string => string] $headers Associative array of response headers.
     *
     * @return self
     */
    public function setHeaders($headers) {
        $this->container['headers'] = $headers;
        return $this;
    }

    /**
     * Gets asin
     *
     * @return string
     */
    public function getAsin() {
        return $this->container['asin'];
    }

    /**
     * Sets asin
     *
     * @param string $asin Amazon Standard Identification Number (ASIN) is the unique identifier for an item in the Amazon catalog.
     *
     * @return self
     */
    public function setAsin($asin) {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return object|null
     */
    public function getAttributes() {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param object|null $attributes A JSON object that contains structured item attribute data keyed by attribute name. Catalog item attributes conform to the related product type definitions available in the Selling Partner API for Product Type Definitions.
     *
     * @return self
     */
    public function setAttributes($attributes) {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets dimensions
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemDimensionsByMarketplace[]|null
     */
    public function getDimensions() {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemDimensionsByMarketplace[]|null $dimensions Array of dimensions associated with the item in the Amazon catalog by Amazon marketplace.
     *
     * @return self
     */
    public function setDimensions($dimensions) {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets identifiers
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemIdentifiersByMarketplace[]|null
     */
    public function getIdentifiers() {
        return $this->container['identifiers'];
    }

    /**
     * Sets identifiers
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemIdentifiersByMarketplace[]|null $identifiers Identifiers associated with the item in the Amazon catalog, such as UPC and EAN identifiers.
     *
     * @return self
     */
    public function setIdentifiers($identifiers) {
        $this->container['identifiers'] = $identifiers;

        return $this;
    }

    /**
     * Gets images
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemImagesByMarketplace[]|null
     */
    public function getImages() {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemImagesByMarketplace[]|null $images Images for an item in the Amazon catalog.
     *
     * @return self
     */
    public function setImages($images) {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets product_types
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemProductTypeByMarketplace[]|null
     */
    public function getProductTypes() {
        return $this->container['product_types'];
    }

    /**
     * Sets product_types
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemProductTypeByMarketplace[]|null $product_types Product types associated with the Amazon catalog item.
     *
     * @return self
     */
    public function setProductTypes($product_types) {
        $this->container['product_types'] = $product_types;

        return $this;
    }

    /**
     * Gets relationships
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemRelationshipsByMarketplace[]|null
     */
    public function getRelationships() {
        return $this->container['relationships'];
    }

    /**
     * Sets relationships
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemRelationshipsByMarketplace[]|null $relationships Relationships by marketplace for an Amazon catalog item (for example, variations).
     *
     * @return self
     */
    public function setRelationships($relationships) {
        $this->container['relationships'] = $relationships;

        return $this;
    }

    /**
     * Gets sales_ranks
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemSalesRanksByMarketplace[]|null
     */
    public function getSalesRanks() {
        return $this->container['sales_ranks'];
    }

    /**
     * Sets sales_ranks
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemSalesRanksByMarketplace[]|null $sales_ranks Sales ranks of an Amazon catalog item.
     *
     * @return self
     */
    public function setSalesRanks($sales_ranks) {
        $this->container['sales_ranks'] = $sales_ranks;

        return $this;
    }

    /**
     * Gets summaries
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemSummaryByMarketplace[]|null
     */
    public function getSummaries() {
        return $this->container['summaries'];
    }

    /**
     * Sets summaries
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemSummaryByMarketplace[]|null $summaries Summary details of an Amazon catalog item.
     *
     * @return self
     */
    public function setSummaries($summaries) {
        $this->container['summaries'] = $summaries;

        return $this;
    }

    /**
     * Gets vendor_details
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemVendorDetailsByMarketplace[]|null
     */
    public function getVendorDetails() {
        return $this->container['vendor_details'];
    }

    /**
     * Sets vendor_details
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemVendorDetailsByMarketplace[]|null $vendor_details Vendor details associated with an Amazon catalog item. Vendor details are available to vendors only.
     *
     * @return self
     */
    public function setVendorDetails($vendor_details) {
        $this->container['vendor_details'] = $vendor_details;

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
     * @return Item
     */
    public function __set($propertyName, $propertyValue) {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


