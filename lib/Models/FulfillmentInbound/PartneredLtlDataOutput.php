<?php
/**
 * PartneredLtlDataOutput
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
 * PartneredLtlDataOutput Class Doc Comment
 *
 * @category Class
 * @description Information returned by Amazon about a Less Than Truckload/Full Truckload (LTL/FTL) shipment by an Amazon-partnered carrier.
 * @package  SellingPartnerApi
 * @group
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PartneredLtlDataOutput implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate {
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'PartneredLtlDataOutput';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'contact'                     => '\SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Contact',
        'box_count'                   => 'int',
        'seller_freight_class'        => 'string',
        'freight_ready_date'          => 'string',
        'pallet_list'                 => '\SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Pallet[]',
        'total_weight'                => '\SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Weight',
        'seller_declared_value'       => '\SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Amount',
        'amazon_calculated_value'     => '\SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Amount',
        'preview_pickup_date'         => 'string',
        'preview_delivery_date'       => 'string',
        'preview_freight_class'       => 'string',
        'amazon_reference_id'         => 'string',
        'is_bill_of_lading_available' => 'bool',
        'partnered_estimate'          => '\SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PartneredEstimate',
        'carrier_name'                => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $swaggerFormats = [
        'contact'                     => null,
        'box_count'                   => 'int64',
        'seller_freight_class'        => null,
        'freight_ready_date'          => null,
        'pallet_list'                 => null,
        'total_weight'                => null,
        'seller_declared_value'       => null,
        'amazon_calculated_value'     => null,
        'preview_pickup_date'         => null,
        'preview_delivery_date'       => null,
        'preview_freight_class'       => null,
        'amazon_reference_id'         => null,
        'is_bill_of_lading_available' => null,
        'partnered_estimate'          => null,
        'carrier_name'                => null
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
        'contact'                     => 'Contact',
        'box_count'                   => 'BoxCount',
        'seller_freight_class'        => 'SellerFreightClass',
        'freight_ready_date'          => 'FreightReadyDate',
        'pallet_list'                 => 'PalletList',
        'total_weight'                => 'TotalWeight',
        'seller_declared_value'       => 'SellerDeclaredValue',
        'amazon_calculated_value'     => 'AmazonCalculatedValue',
        'preview_pickup_date'         => 'PreviewPickupDate',
        'preview_delivery_date'       => 'PreviewDeliveryDate',
        'preview_freight_class'       => 'PreviewFreightClass',
        'amazon_reference_id'         => 'AmazonReferenceId',
        'is_bill_of_lading_available' => 'IsBillOfLadingAvailable',
        'partnered_estimate'          => 'PartneredEstimate',
        'carrier_name'                => 'CarrierName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contact'                     => 'setContact',
        'box_count'                   => 'setBoxCount',
        'seller_freight_class'        => 'setSellerFreightClass',
        'freight_ready_date'          => 'setFreightReadyDate',
        'pallet_list'                 => 'setPalletList',
        'total_weight'                => 'setTotalWeight',
        'seller_declared_value'       => 'setSellerDeclaredValue',
        'amazon_calculated_value'     => 'setAmazonCalculatedValue',
        'preview_pickup_date'         => 'setPreviewPickupDate',
        'preview_delivery_date'       => 'setPreviewDeliveryDate',
        'preview_freight_class'       => 'setPreviewFreightClass',
        'amazon_reference_id'         => 'setAmazonReferenceId',
        'is_bill_of_lading_available' => 'setIsBillOfLadingAvailable',
        'partnered_estimate'          => 'setPartneredEstimate',
        'carrier_name'                => 'setCarrierName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contact'                     => 'getContact',
        'box_count'                   => 'getBoxCount',
        'seller_freight_class'        => 'getSellerFreightClass',
        'freight_ready_date'          => 'getFreightReadyDate',
        'pallet_list'                 => 'getPalletList',
        'total_weight'                => 'getTotalWeight',
        'seller_declared_value'       => 'getSellerDeclaredValue',
        'amazon_calculated_value'     => 'getAmazonCalculatedValue',
        'preview_pickup_date'         => 'getPreviewPickupDate',
        'preview_delivery_date'       => 'getPreviewDeliveryDate',
        'preview_freight_class'       => 'getPreviewFreightClass',
        'amazon_reference_id'         => 'getAmazonReferenceId',
        'is_bill_of_lading_available' => 'getIsBillOfLadingAvailable',
        'partnered_estimate'          => 'getPartneredEstimate',
        'carrier_name'                => 'getCarrierName'
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
        $this->container['contact'] = $data['contact'] ?? null;
        $this->container['box_count'] = $data['box_count'] ?? null;
        $this->container['seller_freight_class'] = $data['seller_freight_class'] ?? null;
        $this->container['freight_ready_date'] = $data['freight_ready_date'] ?? null;
        $this->container['pallet_list'] = $data['pallet_list'] ?? null;
        $this->container['total_weight'] = $data['total_weight'] ?? null;
        $this->container['seller_declared_value'] = $data['seller_declared_value'] ?? null;
        $this->container['amazon_calculated_value'] = $data['amazon_calculated_value'] ?? null;
        $this->container['preview_pickup_date'] = $data['preview_pickup_date'] ?? null;
        $this->container['preview_delivery_date'] = $data['preview_delivery_date'] ?? null;
        $this->container['preview_freight_class'] = $data['preview_freight_class'] ?? null;
        $this->container['amazon_reference_id'] = $data['amazon_reference_id'] ?? null;
        $this->container['is_bill_of_lading_available'] = $data['is_bill_of_lading_available'] ?? null;
        $this->container['partnered_estimate'] = $data['partnered_estimate'] ?? null;
        $this->container['carrier_name'] = $data['carrier_name'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() {
        $invalidProperties = [];
        if ($this->container['contact'] === null) {
            $invalidProperties[] = "'contact' can't be null";
        }
        if ($this->container['box_count'] === null) {
            $invalidProperties[] = "'box_count' can't be null";
        }
        if ($this->container['freight_ready_date'] === null) {
            $invalidProperties[] = "'freight_ready_date' can't be null";
        }
        if ($this->container['pallet_list'] === null) {
            $invalidProperties[] = "'pallet_list' can't be null";
        }
        if ($this->container['total_weight'] === null) {
            $invalidProperties[] = "'total_weight' can't be null";
        }
        if ($this->container['preview_pickup_date'] === null) {
            $invalidProperties[] = "'preview_pickup_date' can't be null";
        }
        if ($this->container['preview_delivery_date'] === null) {
            $invalidProperties[] = "'preview_delivery_date' can't be null";
        }
        if ($this->container['preview_freight_class'] === null) {
            $invalidProperties[] = "'preview_freight_class' can't be null";
        }
        if ($this->container['amazon_reference_id'] === null) {
            $invalidProperties[] = "'amazon_reference_id' can't be null";
        }
        if ($this->container['is_bill_of_lading_available'] === null) {
            $invalidProperties[] = "'is_bill_of_lading_available' can't be null";
        }
        if ($this->container['carrier_name'] === null) {
            $invalidProperties[] = "'carrier_name' can't be null";
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
     * Gets contact
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Contact
     */
    public function getContact() {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Contact $contact contact
     *
     * @return self
     */
    public function setContact($contact) {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets box_count
     *
     * @return int
     */
    public function getBoxCount() {
        return $this->container['box_count'];
    }

    /**
     * Sets box_count
     *
     * @param int $box_count box_count
     *
     * @return self
     */
    public function setBoxCount($box_count) {
        $this->container['box_count'] = $box_count;

        return $this;
    }

    /**
     * Gets seller_freight_class
     *
     * @return string|null
     */
    public function getSellerFreightClass() {
        return $this->container['seller_freight_class'];
    }

    /**
     * Sets seller_freight_class
     *
     * @param string|null $seller_freight_class The freight class of the shipment. For information about determining the freight class, contact the carrier.
     *
     * @return self
     */
    public function setSellerFreightClass($seller_freight_class) {
        $this->container['seller_freight_class'] = $seller_freight_class;

        return $this;
    }

    /**
     * Gets freight_ready_date
     *
     * @return string
     */
    public function getFreightReadyDate() {
        return $this->container['freight_ready_date'];
    }

    /**
     * Sets freight_ready_date
     *
     * @param string $freight_ready_date A date string in ISO 8601 format.
     *
     * @return self
     */
    public function setFreightReadyDate($freight_ready_date) {
        $this->container['freight_ready_date'] = $freight_ready_date;

        return $this;
    }

    /**
     * Gets pallet_list
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Pallet[]
     */
    public function getPalletList() {
        return $this->container['pallet_list'];
    }

    /**
     * Sets pallet_list
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Pallet[] $pallet_list A list of pallet information.
     *
     * @return self
     */
    public function setPalletList($pallet_list) {
        $this->container['pallet_list'] = $pallet_list;

        return $this;
    }

    /**
     * Gets total_weight
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Weight
     */
    public function getTotalWeight() {
        return $this->container['total_weight'];
    }

    /**
     * Sets total_weight
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Weight $total_weight total_weight
     *
     * @return self
     */
    public function setTotalWeight($total_weight) {
        $this->container['total_weight'] = $total_weight;

        return $this;
    }

    /**
     * Gets seller_declared_value
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Amount|null
     */
    public function getSellerDeclaredValue() {
        return $this->container['seller_declared_value'];
    }

    /**
     * Sets seller_declared_value
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Amount|null $seller_declared_value seller_declared_value
     *
     * @return self
     */
    public function setSellerDeclaredValue($seller_declared_value) {
        $this->container['seller_declared_value'] = $seller_declared_value;

        return $this;
    }

    /**
     * Gets amazon_calculated_value
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Amount|null
     */
    public function getAmazonCalculatedValue() {
        return $this->container['amazon_calculated_value'];
    }

    /**
     * Sets amazon_calculated_value
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Amount|null $amazon_calculated_value amazon_calculated_value
     *
     * @return self
     */
    public function setAmazonCalculatedValue($amazon_calculated_value) {
        $this->container['amazon_calculated_value'] = $amazon_calculated_value;

        return $this;
    }

    /**
     * Gets preview_pickup_date
     *
     * @return string
     */
    public function getPreviewPickupDate() {
        return $this->container['preview_pickup_date'];
    }

    /**
     * Sets preview_pickup_date
     *
     * @param string $preview_pickup_date A date string in ISO 8601 format.
     *
     * @return self
     */
    public function setPreviewPickupDate($preview_pickup_date) {
        $this->container['preview_pickup_date'] = $preview_pickup_date;

        return $this;
    }

    /**
     * Gets preview_delivery_date
     *
     * @return string
     */
    public function getPreviewDeliveryDate() {
        return $this->container['preview_delivery_date'];
    }

    /**
     * Sets preview_delivery_date
     *
     * @param string $preview_delivery_date A date string in ISO 8601 format.
     *
     * @return self
     */
    public function setPreviewDeliveryDate($preview_delivery_date) {
        $this->container['preview_delivery_date'] = $preview_delivery_date;

        return $this;
    }

    /**
     * Gets preview_freight_class
     *
     * @return string
     */
    public function getPreviewFreightClass() {
        return $this->container['preview_freight_class'];
    }

    /**
     * Sets preview_freight_class
     *
     * @param string $preview_freight_class The freight class of the shipment. For information about determining the freight class, contact the carrier.
     *
     * @return self
     */
    public function setPreviewFreightClass($preview_freight_class) {
        $this->container['preview_freight_class'] = $preview_freight_class;

        return $this;
    }

    /**
     * Gets amazon_reference_id
     *
     * @return string
     */
    public function getAmazonReferenceId() {
        return $this->container['amazon_reference_id'];
    }

    /**
     * Sets amazon_reference_id
     *
     * @param string $amazon_reference_id A unique identifier created by Amazon that identifies this Amazon-partnered, Less Than Truckload/Full Truckload (LTL/FTL) shipment.
     *
     * @return self
     */
    public function setAmazonReferenceId($amazon_reference_id) {
        $this->container['amazon_reference_id'] = $amazon_reference_id;

        return $this;
    }

    /**
     * Gets is_bill_of_lading_available
     *
     * @return bool
     */
    public function getIsBillOfLadingAvailable() {
        return $this->container['is_bill_of_lading_available'];
    }

    /**
     * Sets is_bill_of_lading_available
     *
     * @param bool $is_bill_of_lading_available Indicates whether the bill of lading for the shipment is available.
     *
     * @return self
     */
    public function setIsBillOfLadingAvailable($is_bill_of_lading_available) {
        $this->container['is_bill_of_lading_available'] = $is_bill_of_lading_available;

        return $this;
    }

    /**
     * Gets partnered_estimate
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PartneredEstimate|null
     */
    public function getPartneredEstimate() {
        return $this->container['partnered_estimate'];
    }

    /**
     * Sets partnered_estimate
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PartneredEstimate|null $partnered_estimate partnered_estimate
     *
     * @return self
     */
    public function setPartneredEstimate($partnered_estimate) {
        $this->container['partnered_estimate'] = $partnered_estimate;

        return $this;
    }

    /**
     * Gets carrier_name
     *
     * @return string
     */
    public function getCarrierName() {
        return $this->container['carrier_name'];
    }

    /**
     * Sets carrier_name
     *
     * @param string $carrier_name The carrier for the inbound shipment.
     *
     * @return self
     */
    public function setCarrierName($carrier_name) {
        $this->container['carrier_name'] = $carrier_name;

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
     * @return SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PartneredLtlDataOutput
     */
    public function __set($propertyName, $propertyValue) {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


