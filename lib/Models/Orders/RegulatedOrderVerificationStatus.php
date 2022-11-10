<?php

namespace SellerLegend\AmazonSellingPartnerAPI\Models\Orders;

use \ArrayAccess;
use \SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;
use \SellerLegend\AmazonSellingPartnerAPI\Models\ModelInterface;

/**
 * RegulatedOrderVerificationStatus Class Doc Comment
 *
 * @category Class
 * @description The verification status of the order along with associated approval or rejection metadata.
 * @package  SellerLegend\AmazonSellingPartnerAPI
 * @group
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RegulatedOrderVerificationStatus implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate {

    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'RegulatedOrderVerificationStatus';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'status'                   => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\VerificationStatus',
        'requires_merchant_action' => 'bool',
        'valid_rejection_reasons'  => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\RejectionReason[]',
        'rejection_reason'         => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\RejectionReason',
        'review_date'              => 'string',
        'external_reviewer_id'     => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $swaggerFormats = [
        'status'                   => null,
        'requires_merchant_action' => null,
        'valid_rejection_reasons'  => null,
        'rejection_reason'         => null,
        'review_date'              => null,
        'external_reviewer_id'     => null
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
        'status'                   => 'Status',
        'requires_merchant_action' => 'RequiresMerchantAction',
        'valid_rejection_reasons'  => 'ValidRejectionReasons',
        'rejection_reason'         => 'RejectionReason',
        'review_date'              => 'ReviewDate',
        'external_reviewer_id'     => 'ExternalReviewerId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status'                   => 'setStatus',
        'requires_merchant_action' => 'setRequiresMerchantAction',
        'valid_rejection_reasons'  => 'setValidRejectionReasons',
        'rejection_reason'         => 'setRejectionReason',
        'review_date'              => 'setReviewDate',
        'external_reviewer_id'     => 'setExternalReviewerId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status'                   => 'getStatus',
        'requires_merchant_action' => 'getRequiresMerchantAction',
        'valid_rejection_reasons'  => 'getValidRejectionReasons',
        'rejection_reason'         => 'getRejectionReason',
        'review_date'              => 'getReviewDate',
        'external_reviewer_id'     => 'getExternalReviewerId'
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
        $this->container['status'] = $data['status'] ?? null;
        $this->container['requires_merchant_action'] = $data['requires_merchant_action'] ?? null;
        $this->container['valid_rejection_reasons'] = $data['valid_rejection_reasons'] ?? null;
        $this->container['rejection_reason'] = $data['rejection_reason'] ?? null;
        $this->container['review_date'] = $data['review_date'] ?? null;
        $this->container['external_reviewer_id'] = $data['external_reviewer_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() {
        $invalidProperties = [];
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['requires_merchant_action'] === null) {
            $invalidProperties[] = "'requires_merchant_action' can't be null";
        }
        if ($this->container['valid_rejection_reasons'] === null) {
            $invalidProperties[] = "'valid_rejection_reasons' can't be null";
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
     * Gets status
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\VerificationStatus
     */
    public function getStatus() {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\VerificationStatus $status status
     *
     * @return self
     */
    public function setStatus($status) {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets requires_merchant_action
     *
     * @return bool
     */
    public function getRequiresMerchantAction() {
        return $this->container['requires_merchant_action'];
    }

    /**
     * Sets requires_merchant_action
     *
     * @param bool $requires_merchant_action When true, the regulated information provided in the order requires a review by the merchant.
     *
     * @return self
     */
    public function setRequiresMerchantAction($requires_merchant_action) {
        $this->container['requires_merchant_action'] = $requires_merchant_action;

        return $this;
    }

    /**
     * Gets valid_rejection_reasons
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\RejectionReason[]
     */
    public function getValidRejectionReasons() {
        return $this->container['valid_rejection_reasons'];
    }

    /**
     * Sets valid_rejection_reasons
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\RejectionReason[] $valid_rejection_reasons A list of valid rejection reasons that may be used to reject the order's regulated information.
     *
     * @return self
     */
    public function setValidRejectionReasons($valid_rejection_reasons) {
        $this->container['valid_rejection_reasons'] = $valid_rejection_reasons;

        return $this;
    }

    /**
     * Gets rejection_reason
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\RejectionReason|null
     */
    public function getRejectionReason() {
        return $this->container['rejection_reason'];
    }

    /**
     * Sets rejection_reason
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\RejectionReason|null $rejection_reason rejection_reason
     *
     * @return self
     */
    public function setRejectionReason($rejection_reason) {
        $this->container['rejection_reason'] = $rejection_reason;

        return $this;
    }

    /**
     * Gets review_date
     *
     * @return string|null
     */
    public function getReviewDate() {
        return $this->container['review_date'];
    }

    /**
     * Sets review_date
     *
     * @param string|null $review_date The date the order was reviewed. In ISO 8601 date time format.
     *
     * @return self
     */
    public function setReviewDate($review_date) {
        $this->container['review_date'] = $review_date;

        return $this;
    }

    /**
     * Gets external_reviewer_id
     *
     * @return string|null
     */
    public function getExternalReviewerId() {
        return $this->container['external_reviewer_id'];
    }

    /**
     * Sets external_reviewer_id
     *
     * @param string|null $external_reviewer_id The identifier for the order's regulated information reviewer.
     *
     * @return self
     */
    public function setExternalReviewerId($external_reviewer_id) {
        $this->container['external_reviewer_id'] = $external_reviewer_id;

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
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\RegulatedOrderVerificationStatus
     */
    public function __set($propertyName, $propertyValue) {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


