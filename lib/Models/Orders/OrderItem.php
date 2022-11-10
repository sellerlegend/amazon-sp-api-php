<?php

namespace SellerLegend\AmazonSellingPartnerAPI\Models\Orders;

use \ArrayAccess;
use \SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;
use \SellerLegend\AmazonSellingPartnerAPI\Models\ModelInterface;

/**
 * OrderItem Class Doc Comment
 *
 * @category Class
 * @description A single order item.
 * @package  SellerLegend\AmazonSellingPartnerAPI
 * @group
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OrderItem implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate {

    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'OrderItem';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'asin'                          => 'string',
        'seller_sku'                    => 'string',
        'order_item_id'                 => 'string',
        'title'                         => 'string',
        'quantity_ordered'              => 'int',
        'quantity_shipped'              => 'int',
        'product_info'                  => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\ProductInfoDetail',
        'points_granted'                => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\PointsGrantedDetail',
        'item_price'                    => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money',
        'shipping_price'                => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money',
        'item_tax'                      => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money',
        'shipping_tax'                  => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money',
        'shipping_discount'             => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money',
        'shipping_discount_tax'         => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money',
        'promotion_discount'            => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money',
        'promotion_discount_tax'        => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money',
        'promotion_ids'                 => 'string[]',
        'cod_fee'                       => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money',
        'cod_fee_discount'              => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money',
        'is_gift'                       => 'bool',
        'condition_note'                => 'string',
        'condition_id'                  => 'string',
        'condition_subtype_id'          => 'string',
        'scheduled_delivery_start_date' => 'string',
        'scheduled_delivery_end_date'   => 'string',
        'price_designation'             => 'string',
        'tax_collection'                => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\TaxCollection',
        'serial_number_required'        => 'bool',
        'is_transparency'               => 'bool',
        'ioss_number'                   => 'string',
        'store_chain_store_id'          => 'string',
        'deemed_reseller_category'      => 'string',
        'buyer_info'                    => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\ItemBuyerInfo',
        'buyer_requested_cancel'        => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\BuyerRequestedCancel'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $swaggerFormats = [
        'asin'                          => null,
        'seller_sku'                    => null,
        'order_item_id'                 => null,
        'title'                         => null,
        'quantity_ordered'              => null,
        'quantity_shipped'              => null,
        'product_info'                  => null,
        'points_granted'                => null,
        'item_price'                    => null,
        'shipping_price'                => null,
        'item_tax'                      => null,
        'shipping_tax'                  => null,
        'shipping_discount'             => null,
        'shipping_discount_tax'         => null,
        'promotion_discount'            => null,
        'promotion_discount_tax'        => null,
        'promotion_ids'                 => null,
        'cod_fee'                       => null,
        'cod_fee_discount'              => null,
        'is_gift'                       => null,
        'condition_note'                => null,
        'condition_id'                  => null,
        'condition_subtype_id'          => null,
        'scheduled_delivery_start_date' => null,
        'scheduled_delivery_end_date'   => null,
        'price_designation'             => null,
        'tax_collection'                => null,
        'serial_number_required'        => null,
        'is_transparency'               => null,
        'ioss_number'                   => null,
        'store_chain_store_id'          => null,
        'deemed_reseller_category'      => null,
        'buyer_info'                    => null,
        'buyer_requested_cancel'        => null
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
        'asin'                          => 'ASIN',
        'seller_sku'                    => 'SellerSKU',
        'order_item_id'                 => 'OrderItemId',
        'title'                         => 'Title',
        'quantity_ordered'              => 'QuantityOrdered',
        'quantity_shipped'              => 'QuantityShipped',
        'product_info'                  => 'ProductInfo',
        'points_granted'                => 'PointsGranted',
        'item_price'                    => 'ItemPrice',
        'shipping_price'                => 'ShippingPrice',
        'item_tax'                      => 'ItemTax',
        'shipping_tax'                  => 'ShippingTax',
        'shipping_discount'             => 'ShippingDiscount',
        'shipping_discount_tax'         => 'ShippingDiscountTax',
        'promotion_discount'            => 'PromotionDiscount',
        'promotion_discount_tax'        => 'PromotionDiscountTax',
        'promotion_ids'                 => 'PromotionIds',
        'cod_fee'                       => 'CODFee',
        'cod_fee_discount'              => 'CODFeeDiscount',
        'is_gift'                       => 'IsGift',
        'condition_note'                => 'ConditionNote',
        'condition_id'                  => 'ConditionId',
        'condition_subtype_id'          => 'ConditionSubtypeId',
        'scheduled_delivery_start_date' => 'ScheduledDeliveryStartDate',
        'scheduled_delivery_end_date'   => 'ScheduledDeliveryEndDate',
        'price_designation'             => 'PriceDesignation',
        'tax_collection'                => 'TaxCollection',
        'serial_number_required'        => 'SerialNumberRequired',
        'is_transparency'               => 'IsTransparency',
        'ioss_number'                   => 'IossNumber',
        'store_chain_store_id'          => 'StoreChainStoreId',
        'deemed_reseller_category'      => 'DeemedResellerCategory',
        'buyer_info'                    => 'BuyerInfo',
        'buyer_requested_cancel'        => 'BuyerRequestedCancel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asin'                          => 'setAsin',
        'seller_sku'                    => 'setSellerSku',
        'order_item_id'                 => 'setOrderItemId',
        'title'                         => 'setTitle',
        'quantity_ordered'              => 'setQuantityOrdered',
        'quantity_shipped'              => 'setQuantityShipped',
        'product_info'                  => 'setProductInfo',
        'points_granted'                => 'setPointsGranted',
        'item_price'                    => 'setItemPrice',
        'shipping_price'                => 'setShippingPrice',
        'item_tax'                      => 'setItemTax',
        'shipping_tax'                  => 'setShippingTax',
        'shipping_discount'             => 'setShippingDiscount',
        'shipping_discount_tax'         => 'setShippingDiscountTax',
        'promotion_discount'            => 'setPromotionDiscount',
        'promotion_discount_tax'        => 'setPromotionDiscountTax',
        'promotion_ids'                 => 'setPromotionIds',
        'cod_fee'                       => 'setCodFee',
        'cod_fee_discount'              => 'setCodFeeDiscount',
        'is_gift'                       => 'setIsGift',
        'condition_note'                => 'setConditionNote',
        'condition_id'                  => 'setConditionId',
        'condition_subtype_id'          => 'setConditionSubtypeId',
        'scheduled_delivery_start_date' => 'setScheduledDeliveryStartDate',
        'scheduled_delivery_end_date'   => 'setScheduledDeliveryEndDate',
        'price_designation'             => 'setPriceDesignation',
        'tax_collection'                => 'setTaxCollection',
        'serial_number_required'        => 'setSerialNumberRequired',
        'is_transparency'               => 'setIsTransparency',
        'ioss_number'                   => 'setIossNumber',
        'store_chain_store_id'          => 'setStoreChainStoreId',
        'deemed_reseller_category'      => 'setDeemedResellerCategory',
        'buyer_info'                    => 'setBuyerInfo',
        'buyer_requested_cancel'        => 'setBuyerRequestedCancel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asin'                          => 'getAsin',
        'seller_sku'                    => 'getSellerSku',
        'order_item_id'                 => 'getOrderItemId',
        'title'                         => 'getTitle',
        'quantity_ordered'              => 'getQuantityOrdered',
        'quantity_shipped'              => 'getQuantityShipped',
        'product_info'                  => 'getProductInfo',
        'points_granted'                => 'getPointsGranted',
        'item_price'                    => 'getItemPrice',
        'shipping_price'                => 'getShippingPrice',
        'item_tax'                      => 'getItemTax',
        'shipping_tax'                  => 'getShippingTax',
        'shipping_discount'             => 'getShippingDiscount',
        'shipping_discount_tax'         => 'getShippingDiscountTax',
        'promotion_discount'            => 'getPromotionDiscount',
        'promotion_discount_tax'        => 'getPromotionDiscountTax',
        'promotion_ids'                 => 'getPromotionIds',
        'cod_fee'                       => 'getCodFee',
        'cod_fee_discount'              => 'getCodFeeDiscount',
        'is_gift'                       => 'getIsGift',
        'condition_note'                => 'getConditionNote',
        'condition_id'                  => 'getConditionId',
        'condition_subtype_id'          => 'getConditionSubtypeId',
        'scheduled_delivery_start_date' => 'getScheduledDeliveryStartDate',
        'scheduled_delivery_end_date'   => 'getScheduledDeliveryEndDate',
        'price_designation'             => 'getPriceDesignation',
        'tax_collection'                => 'getTaxCollection',
        'serial_number_required'        => 'getSerialNumberRequired',
        'is_transparency'               => 'getIsTransparency',
        'ioss_number'                   => 'getIossNumber',
        'store_chain_store_id'          => 'getStoreChainStoreId',
        'deemed_reseller_category'      => 'getDeemedResellerCategory',
        'buyer_info'                    => 'getBuyerInfo',
        'buyer_requested_cancel'        => 'getBuyerRequestedCancel'
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

    const DEEMED_RESELLER_CATEGORY_IOSS = 'IOSS';
    const DEEMED_RESELLER_CATEGORY_UOSS = 'UOSS';
    const DEEMED_RESELLER_CATEGORY_GB_VOEC = 'GB_VOEC';
    const DEEMED_RESELLER_CATEGORY_NO_VOEC = 'NO_VOEC';
    const DEEMED_RESELLER_CATEGORY_CA_MPF = 'CA_MPF';


    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeemedResellerCategoryAllowableValues() {
        return [
            self::DEEMED_RESELLER_CATEGORY_IOSS,
            self::DEEMED_RESELLER_CATEGORY_UOSS,
            self::DEEMED_RESELLER_CATEGORY_GB_VOEC,
            self::DEEMED_RESELLER_CATEGORY_NO_VOEC,
            self::DEEMED_RESELLER_CATEGORY_CA_MPF,
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
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['seller_sku'] = $data['seller_sku'] ?? null;
        $this->container['order_item_id'] = $data['order_item_id'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['quantity_ordered'] = $data['quantity_ordered'] ?? null;
        $this->container['quantity_shipped'] = $data['quantity_shipped'] ?? null;
        $this->container['product_info'] = $data['product_info'] ?? null;
        $this->container['points_granted'] = $data['points_granted'] ?? null;
        $this->container['item_price'] = $data['item_price'] ?? null;
        $this->container['shipping_price'] = $data['shipping_price'] ?? null;
        $this->container['item_tax'] = $data['item_tax'] ?? null;
        $this->container['shipping_tax'] = $data['shipping_tax'] ?? null;
        $this->container['shipping_discount'] = $data['shipping_discount'] ?? null;
        $this->container['shipping_discount_tax'] = $data['shipping_discount_tax'] ?? null;
        $this->container['promotion_discount'] = $data['promotion_discount'] ?? null;
        $this->container['promotion_discount_tax'] = $data['promotion_discount_tax'] ?? null;
        $this->container['promotion_ids'] = $data['promotion_ids'] ?? null;
        $this->container['cod_fee'] = $data['cod_fee'] ?? null;
        $this->container['cod_fee_discount'] = $data['cod_fee_discount'] ?? null;
        $this->container['is_gift'] = $data['is_gift'] ?? null;
        $this->container['condition_note'] = $data['condition_note'] ?? null;
        $this->container['condition_id'] = $data['condition_id'] ?? null;
        $this->container['condition_subtype_id'] = $data['condition_subtype_id'] ?? null;
        $this->container['scheduled_delivery_start_date'] = $data['scheduled_delivery_start_date'] ?? null;
        $this->container['scheduled_delivery_end_date'] = $data['scheduled_delivery_end_date'] ?? null;
        $this->container['price_designation'] = $data['price_designation'] ?? null;
        $this->container['tax_collection'] = $data['tax_collection'] ?? null;
        $this->container['serial_number_required'] = $data['serial_number_required'] ?? null;
        $this->container['is_transparency'] = $data['is_transparency'] ?? null;
        $this->container['ioss_number'] = $data['ioss_number'] ?? null;
        $this->container['store_chain_store_id'] = $data['store_chain_store_id'] ?? null;
        $this->container['deemed_reseller_category'] = $data['deemed_reseller_category'] ?? null;
        $this->container['buyer_info'] = $data['buyer_info'] ?? null;
        $this->container['buyer_requested_cancel'] = $data['buyer_requested_cancel'] ?? null;
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
        if ($this->container['order_item_id'] === null) {
            $invalidProperties[] = "'order_item_id' can't be null";
        }
        if ($this->container['quantity_ordered'] === null) {
            $invalidProperties[] = "'quantity_ordered' can't be null";
        }
        $allowedValues = $this->getDeemedResellerCategoryAllowableValues();
        if (!is_null($this->container['deemed_reseller_category']) && !in_array($this->container['deemed_reseller_category'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'deemed_reseller_category', must be one of '%s'",
                $this->container['deemed_reseller_category'],
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
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item.
     *
     * @return self
     */
    public function setAsin($asin) {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets seller_sku
     *
     * @return string|null
     */
    public function getSellerSku() {
        return $this->container['seller_sku'];
    }

    /**
     * Sets seller_sku
     *
     * @param string|null $seller_sku The seller stock keeping unit (SKU) of the item.
     *
     * @return self
     */
    public function setSellerSku($seller_sku) {
        $this->container['seller_sku'] = $seller_sku;

        return $this;
    }

    /**
     * Gets order_item_id
     *
     * @return string
     */
    public function getOrderItemId() {
        return $this->container['order_item_id'];
    }

    /**
     * Sets order_item_id
     *
     * @param string $order_item_id An Amazon-defined order item identifier.
     *
     * @return self
     */
    public function setOrderItemId($order_item_id) {
        $this->container['order_item_id'] = $order_item_id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle() {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title The name of the item.
     *
     * @return self
     */
    public function setTitle($title) {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets quantity_ordered
     *
     * @return int
     */
    public function getQuantityOrdered() {
        return $this->container['quantity_ordered'];
    }

    /**
     * Sets quantity_ordered
     *
     * @param int $quantity_ordered The number of items in the order.
     *
     * @return self
     */
    public function setQuantityOrdered($quantity_ordered) {
        $this->container['quantity_ordered'] = $quantity_ordered;

        return $this;
    }

    /**
     * Gets quantity_shipped
     *
     * @return int|null
     */
    public function getQuantityShipped() {
        return $this->container['quantity_shipped'];
    }

    /**
     * Sets quantity_shipped
     *
     * @param int|null $quantity_shipped The number of items shipped.
     *
     * @return self
     */
    public function setQuantityShipped($quantity_shipped) {
        $this->container['quantity_shipped'] = $quantity_shipped;

        return $this;
    }

    /**
     * Gets product_info
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\ProductInfoDetail|null
     */
    public function getProductInfo() {
        return $this->container['product_info'];
    }

    /**
     * Sets product_info
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\ProductInfoDetail|null $product_info product_info
     *
     * @return self
     */
    public function setProductInfo($product_info) {
        $this->container['product_info'] = $product_info;

        return $this;
    }

    /**
     * Gets points_granted
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\PointsGrantedDetail|null
     */
    public function getPointsGranted() {
        return $this->container['points_granted'];
    }

    /**
     * Sets points_granted
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\PointsGrantedDetail|null $points_granted points_granted
     *
     * @return self
     */
    public function setPointsGranted($points_granted) {
        $this->container['points_granted'] = $points_granted;

        return $this;
    }

    /**
     * Gets item_price
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money|null
     */
    public function getItemPrice() {
        return $this->container['item_price'];
    }

    /**
     * Sets item_price
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money|null $item_price item_price
     *
     * @return self
     */
    public function setItemPrice($item_price) {
        $this->container['item_price'] = $item_price;

        return $this;
    }

    /**
     * Gets shipping_price
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money|null
     */
    public function getShippingPrice() {
        return $this->container['shipping_price'];
    }

    /**
     * Sets shipping_price
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money|null $shipping_price shipping_price
     *
     * @return self
     */
    public function setShippingPrice($shipping_price) {
        $this->container['shipping_price'] = $shipping_price;

        return $this;
    }

    /**
     * Gets item_tax
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money|null
     */
    public function getItemTax() {
        return $this->container['item_tax'];
    }

    /**
     * Sets item_tax
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money|null $item_tax item_tax
     *
     * @return self
     */
    public function setItemTax($item_tax) {
        $this->container['item_tax'] = $item_tax;

        return $this;
    }

    /**
     * Gets shipping_tax
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money|null
     */
    public function getShippingTax() {
        return $this->container['shipping_tax'];
    }

    /**
     * Sets shipping_tax
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money|null $shipping_tax shipping_tax
     *
     * @return self
     */
    public function setShippingTax($shipping_tax) {
        $this->container['shipping_tax'] = $shipping_tax;

        return $this;
    }

    /**
     * Gets shipping_discount
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money|null
     */
    public function getShippingDiscount() {
        return $this->container['shipping_discount'];
    }

    /**
     * Sets shipping_discount
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money|null $shipping_discount shipping_discount
     *
     * @return self
     */
    public function setShippingDiscount($shipping_discount) {
        $this->container['shipping_discount'] = $shipping_discount;

        return $this;
    }

    /**
     * Gets shipping_discount_tax
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money|null
     */
    public function getShippingDiscountTax() {
        return $this->container['shipping_discount_tax'];
    }

    /**
     * Sets shipping_discount_tax
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money|null $shipping_discount_tax shipping_discount_tax
     *
     * @return self
     */
    public function setShippingDiscountTax($shipping_discount_tax) {
        $this->container['shipping_discount_tax'] = $shipping_discount_tax;

        return $this;
    }

    /**
     * Gets promotion_discount
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money|null
     */
    public function getPromotionDiscount() {
        return $this->container['promotion_discount'];
    }

    /**
     * Sets promotion_discount
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money|null $promotion_discount promotion_discount
     *
     * @return self
     */
    public function setPromotionDiscount($promotion_discount) {
        $this->container['promotion_discount'] = $promotion_discount;

        return $this;
    }

    /**
     * Gets promotion_discount_tax
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money|null
     */
    public function getPromotionDiscountTax() {
        return $this->container['promotion_discount_tax'];
    }

    /**
     * Sets promotion_discount_tax
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money|null $promotion_discount_tax promotion_discount_tax
     *
     * @return self
     */
    public function setPromotionDiscountTax($promotion_discount_tax) {
        $this->container['promotion_discount_tax'] = $promotion_discount_tax;

        return $this;
    }

    /**
     * Gets promotion_ids
     *
     * @return string[]|null
     */
    public function getPromotionIds() {
        return $this->container['promotion_ids'];
    }

    /**
     * Sets promotion_ids
     *
     * @param string[]|null $promotion_ids A list of promotion identifiers provided by the seller when the promotions were created.
     *
     * @return self
     */
    public function setPromotionIds($promotion_ids) {
        $this->container['promotion_ids'] = $promotion_ids;

        return $this;
    }

    /**
     * Gets cod_fee
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money|null
     */
    public function getCodFee() {
        return $this->container['cod_fee'];
    }

    /**
     * Sets cod_fee
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money|null $cod_fee cod_fee
     *
     * @return self
     */
    public function setCodFee($cod_fee) {
        $this->container['cod_fee'] = $cod_fee;

        return $this;
    }

    /**
     * Gets cod_fee_discount
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money|null
     */
    public function getCodFeeDiscount() {
        return $this->container['cod_fee_discount'];
    }

    /**
     * Sets cod_fee_discount
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money|null $cod_fee_discount cod_fee_discount
     *
     * @return self
     */
    public function setCodFeeDiscount($cod_fee_discount) {
        $this->container['cod_fee_discount'] = $cod_fee_discount;

        return $this;
    }

    /**
     * Gets is_gift
     *
     * @return bool|null
     */
    public function getIsGift() {
        return $this->container['is_gift'];
    }

    /**
     * Sets is_gift
     *
     * @param bool|null $is_gift When true, the item is a gift.
     *
     * @return self
     */
    public function setIsGift($is_gift) {
        $this->container['is_gift'] = $is_gift;

        return $this;
    }

    /**
     * Gets condition_note
     *
     * @return string|null
     */
    public function getConditionNote() {
        return $this->container['condition_note'];
    }

    /**
     * Sets condition_note
     *
     * @param string|null $condition_note The condition of the item as described by the seller.
     *
     * @return self
     */
    public function setConditionNote($condition_note) {
        $this->container['condition_note'] = $condition_note;

        return $this;
    }

    /**
     * Gets condition_id
     *
     * @return string|null
     */
    public function getConditionId() {
        return $this->container['condition_id'];
    }

    /**
     * Sets condition_id
     *
     * @param string|null $condition_id The condition of the item. Possible values: New, Used, Collectible, Refurbished, Preorder, Club.
     *
     * @return self
     */
    public function setConditionId($condition_id) {
        $this->container['condition_id'] = $condition_id;

        return $this;
    }

    /**
     * Gets condition_subtype_id
     *
     * @return string|null
     */
    public function getConditionSubtypeId() {
        return $this->container['condition_subtype_id'];
    }

    /**
     * Sets condition_subtype_id
     *
     * @param string|null $condition_subtype_id The subcondition of the item. Possible values: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM, Warranty, Refurbished Warranty, Refurbished, Open Box, Any, Other.
     *
     * @return self
     */
    public function setConditionSubtypeId($condition_subtype_id) {
        $this->container['condition_subtype_id'] = $condition_subtype_id;

        return $this;
    }

    /**
     * Gets scheduled_delivery_start_date
     *
     * @return string|null
     */
    public function getScheduledDeliveryStartDate() {
        return $this->container['scheduled_delivery_start_date'];
    }

    /**
     * Sets scheduled_delivery_start_date
     *
     * @param string|null $scheduled_delivery_start_date The start date of the scheduled delivery window in the time zone of the order destination. In ISO 8601 date time format.
     *
     * @return self
     */
    public function setScheduledDeliveryStartDate($scheduled_delivery_start_date) {
        $this->container['scheduled_delivery_start_date'] = $scheduled_delivery_start_date;

        return $this;
    }

    /**
     * Gets scheduled_delivery_end_date
     *
     * @return string|null
     */
    public function getScheduledDeliveryEndDate() {
        return $this->container['scheduled_delivery_end_date'];
    }

    /**
     * Sets scheduled_delivery_end_date
     *
     * @param string|null $scheduled_delivery_end_date The end date of the scheduled delivery window in the time zone of the order destination. In ISO 8601 date time format.
     *
     * @return self
     */
    public function setScheduledDeliveryEndDate($scheduled_delivery_end_date) {
        $this->container['scheduled_delivery_end_date'] = $scheduled_delivery_end_date;

        return $this;
    }

    /**
     * Gets price_designation
     *
     * @return string|null
     */
    public function getPriceDesignation() {
        return $this->container['price_designation'];
    }

    /**
     * Sets price_designation
     *
     * @param string|null $price_designation Indicates that the selling price is a special price that is available only for Amazon Business orders. For more information about the Amazon Business Seller Program, see the [Amazon Business website](https://www.amazon.com/b2b/info/amazon-business).  Possible values: BusinessPrice - A special price that is available only for Amazon Business orders.
     *
     * @return self
     */
    public function setPriceDesignation($price_designation) {
        $this->container['price_designation'] = $price_designation;

        return $this;
    }

    /**
     * Gets tax_collection
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\TaxCollection|null
     */
    public function getTaxCollection() {
        return $this->container['tax_collection'];
    }

    /**
     * Sets tax_collection
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\TaxCollection|null $tax_collection tax_collection
     *
     * @return self
     */
    public function setTaxCollection($tax_collection) {
        $this->container['tax_collection'] = $tax_collection;

        return $this;
    }

    /**
     * Gets serial_number_required
     *
     * @return bool|null
     */
    public function getSerialNumberRequired() {
        return $this->container['serial_number_required'];
    }

    /**
     * Sets serial_number_required
     *
     * @param bool|null $serial_number_required When true, the product type for this item has a serial number. Returned only for Amazon Easy Ship orders.
     *
     * @return self
     */
    public function setSerialNumberRequired($serial_number_required) {
        $this->container['serial_number_required'] = $serial_number_required;

        return $this;
    }

    /**
     * Gets is_transparency
     *
     * @return bool|null
     */
    public function getIsTransparency() {
        return $this->container['is_transparency'];
    }

    /**
     * Sets is_transparency
     *
     * @param bool|null $is_transparency When true, transparency codes are required.
     *
     * @return self
     */
    public function setIsTransparency($is_transparency) {
        $this->container['is_transparency'] = $is_transparency;

        return $this;
    }

    /**
     * Gets ioss_number
     *
     * @return string|null
     */
    public function getIossNumber() {
        return $this->container['ioss_number'];
    }

    /**
     * Sets ioss_number
     *
     * @param string|null $ioss_number The IOSS number for the marketplace. Sellers shipping to the European Union (EU) from outside of the EU must provide this IOSS number to their carrier when Amazon has collected the VAT on the sale.
     *
     * @return self
     */
    public function setIossNumber($ioss_number) {
        $this->container['ioss_number'] = $ioss_number;

        return $this;
    }

    /**
     * Gets store_chain_store_id
     *
     * @return string|null
     */
    public function getStoreChainStoreId() {
        return $this->container['store_chain_store_id'];
    }

    /**
     * Sets store_chain_store_id
     *
     * @param string|null $store_chain_store_id The store chain store identifier. Linked to a specific store in a store chain.
     *
     * @return self
     */
    public function setStoreChainStoreId($store_chain_store_id) {
        $this->container['store_chain_store_id'] = $store_chain_store_id;

        return $this;
    }

    /**
     * Gets deemed_reseller_category
     *
     * @return string|null
     */
    public function getDeemedResellerCategory() {
        return $this->container['deemed_reseller_category'];
    }

    /**
     * Sets deemed_reseller_category
     *
     * @param string|null $deemed_reseller_category The category of deemed reseller. This applies to selling partners that are not based in the EU and is used to help them meet the VAT Deemed Reseller tax laws in the EU and UK.
     *
     * @return self
     */
    public function setDeemedResellerCategory($deemed_reseller_category) {
        $allowedValues = $this->getDeemedResellerCategoryAllowableValues();
        if (!is_null($deemed_reseller_category) && !in_array($deemed_reseller_category, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'deemed_reseller_category', must be one of '%s'",
                    $deemed_reseller_category,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['deemed_reseller_category'] = $deemed_reseller_category;

        return $this;
    }

    /**
     * Gets buyer_info
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\ItemBuyerInfo|null
     */
    public function getBuyerInfo() {
        return $this->container['buyer_info'];
    }

    /**
     * Sets buyer_info
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\ItemBuyerInfo|null $buyer_info buyer_info
     *
     * @return self
     */
    public function setBuyerInfo($buyer_info) {
        $this->container['buyer_info'] = $buyer_info;

        return $this;
    }

    /**
     * Gets buyer_requested_cancel
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\BuyerRequestedCancel|null
     */
    public function getBuyerRequestedCancel() {
        return $this->container['buyer_requested_cancel'];
    }

    /**
     * Sets buyer_requested_cancel
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\BuyerRequestedCancel|null $buyer_requested_cancel buyer_requested_cancel
     *
     * @return self
     */
    public function setBuyerRequestedCancel($buyer_requested_cancel) {
        $this->container['buyer_requested_cancel'] = $buyer_requested_cancel;

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
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\OrderItem
     */
    public function __set($propertyName, $propertyValue) {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


