<?php
/**
 * ASINPrepInstructions
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

namespace SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound;

use \ArrayAccess;
use \SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;
use \SellerLegend\AmazonSellingPartnerAPI\Models\ModelInterface;

/**
 * ASINPrepInstructions Class Doc Comment
 *
 * @category Class
 * @description Item preparation instructions to help with item sourcing decisions.
 * @package  SellingPartnerApi
 * @group
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ASINPrepInstructions implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate {
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ASINPrepInstructions';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'asin'                  => 'string',
        'barcode_instruction'   => '\SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\BarcodeInstruction',
        'prep_guidance'         => '\SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PrepGuidance',
        'prep_instruction_list' => '\SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PrepInstruction[]'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $swaggerFormats = [
        'asin'                  => null,
        'barcode_instruction'   => null,
        'prep_guidance'         => null,
        'prep_instruction_list' => null
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
        'asin'                  => 'ASIN',
        'barcode_instruction'   => 'BarcodeInstruction',
        'prep_guidance'         => 'PrepGuidance',
        'prep_instruction_list' => 'PrepInstructionList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asin'                  => 'setAsin',
        'barcode_instruction'   => 'setBarcodeInstruction',
        'prep_guidance'         => 'setPrepGuidance',
        'prep_instruction_list' => 'setPrepInstructionList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asin'                  => 'getAsin',
        'barcode_instruction'   => 'getBarcodeInstruction',
        'prep_guidance'         => 'getPrepGuidance',
        'prep_instruction_list' => 'getPrepInstructionList'
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
        $this->container['barcode_instruction'] = $data['barcode_instruction'] ?? null;
        $this->container['prep_guidance'] = $data['prep_guidance'] ?? null;
        $this->container['prep_instruction_list'] = $data['prep_instruction_list'] ?? null;
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
     * Gets asin
     *
     * @return string|null
     */
    public function getAsin() {
        return $this->container['asin'];
    }

    /**
     * Sets asin
     *
     * @param string|null $asin The Amazon Standard Identification Number (ASIN) of the item.
     *
     * @return self
     */
    public function setAsin($asin) {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets barcode_instruction
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\BarcodeInstruction|null
     */
    public function getBarcodeInstruction() {
        return $this->container['barcode_instruction'];
    }

    /**
     * Sets barcode_instruction
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\BarcodeInstruction|null $barcode_instruction barcode_instruction
     *
     * @return self
     */
    public function setBarcodeInstruction($barcode_instruction) {
        $this->container['barcode_instruction'] = $barcode_instruction;

        return $this;
    }

    /**
     * Gets prep_guidance
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PrepGuidance|null
     */
    public function getPrepGuidance() {
        return $this->container['prep_guidance'];
    }

    /**
     * Sets prep_guidance
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PrepGuidance|null $prep_guidance prep_guidance
     *
     * @return self
     */
    public function setPrepGuidance($prep_guidance) {
        $this->container['prep_guidance'] = $prep_guidance;

        return $this;
    }

    /**
     * Gets prep_instruction_list
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PrepInstruction[]|null
     */
    public function getPrepInstructionList() {
        return $this->container['prep_instruction_list'];
    }

    /**
     * Sets prep_instruction_list
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PrepInstruction[]|null $prep_instruction_list A list of preparation instructions to help with item sourcing decisions.
     *
     * @return self
     */
    public function setPrepInstructionList($prep_instruction_list) {
        $this->container['prep_instruction_list'] = $prep_instruction_list;

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
     * @return SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ASINPrepInstructions
     */
    public function __set($propertyName, $propertyValue) {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


