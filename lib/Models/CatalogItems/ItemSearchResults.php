<?php
/**
 * ItemSearchResults
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
 * ItemSearchResults Class Doc Comment
 *
 * @category Class
 * @description Items in the Amazon catalog and search related metadata.
 * @package  SellerLegend\AmazonSellingPartnerAPI
 * @group
 * @implements ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ItemSearchResults implements ModelInterface, ArrayAccess, JsonSerializable, IteratorAggregate {
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ItemSearchResults';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'number_of_results' => 'int',
        'pagination'        => '\SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\Pagination',
        'refinements'       => '\SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\Refinements',
        'items'             => '\SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\Item[]'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $swaggerFormats = [
        'number_of_results' => null,
        'pagination'        => null,
        'refinements'       => null,
        'items'             => null
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
        'headers'           => 'headers',
        'number_of_results' => 'numberOfResults',
        'pagination'        => 'pagination',
        'refinements'       => 'refinements',
        'items'             => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'headers'           => 'setHeaders',
        'number_of_results' => 'setNumberOfResults',
        'pagination'        => 'setPagination',
        'refinements'       => 'setRefinements',
        'items'             => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'headers'           => 'getHeaders',
        'number_of_results' => 'getNumberOfResults',
        'pagination'        => 'getPagination',
        'refinements'       => 'getRefinements',
        'items'             => 'getItems'
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
        $this->container['number_of_results'] = $data['number_of_results'] ?? null;
        $this->container['pagination'] = $data['pagination'] ?? null;
        $this->container['refinements'] = $data['refinements'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() {
        $invalidProperties = [];
        if ($this->container['number_of_results'] === null) {
            $invalidProperties[] = "'number_of_results' can't be null";
        }
        if ($this->container['pagination'] === null) {
            $invalidProperties[] = "'pagination' can't be null";
        }
        if ($this->container['refinements'] === null) {
            $invalidProperties[] = "'refinements' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
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
     * Gets number_of_results
     *
     * @return int
     */
    public function getNumberOfResults() {
        return $this->container['number_of_results'];
    }

    /**
     * Sets number_of_results
     *
     * @param int $number_of_results For `identifiers`-based searches, the total number of Amazon catalog items found. For `keywords`-based searches, the estimated total number of Amazon catalog items matched by the search query (only results up to the page count limit will be returned per request regardless of the number found). Note: The maximum number of items (ASINs) that can be returned and paged through is 1000.
     *
     * @return self
     */
    public function setNumberOfResults($number_of_results) {
        $this->container['number_of_results'] = $number_of_results;

        return $this;
    }

    /**
     * Gets pagination
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\Pagination
     */
    public function getPagination() {
        return $this->container['pagination'];
    }

    /**
     * Sets pagination
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\Pagination $pagination pagination
     *
     * @return self
     */
    public function setPagination($pagination) {
        $this->container['pagination'] = $pagination;

        return $this;
    }

    /**
     * Gets refinements
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\Refinements
     */
    public function getRefinements() {
        return $this->container['refinements'];
    }

    /**
     * Sets refinements
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\Refinements $refinements refinements
     *
     * @return self
     */
    public function setRefinements($refinements) {
        $this->container['refinements'] = $refinements;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\Item[]
     */
    public function getItems() {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\Item[] $items A list of items from the Amazon catalog.
     *
     * @return self
     */
    public function setItems($items) {
        $this->container['items'] = $items;

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
     * @return ItemSearchResults
     */
    public function __set($propertyName, $propertyValue) {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


