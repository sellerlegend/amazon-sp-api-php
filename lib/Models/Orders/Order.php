<?php

namespace SellerLegend\AmazonSellingPartnerAPI\Models\Orders;

use \ArrayAccess;
use \SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;
use \SellerLegend\AmazonSellingPartnerAPI\Models\ModelInterface;

/**
 * Order Class Doc Comment
 *
 * @category Class
 * @description Order information.
 * @package  SellerLegend\AmazonSellingPartnerAPI
 * @group
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Order implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate {

    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Order';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'amazon_order_id'                    => 'string',
        'seller_order_id'                    => 'string',
        'purchase_date'                      => 'string',
        'last_update_date'                   => 'string',
        'order_status'                       => 'string',
        'fulfillment_channel'                => 'string',
        'sales_channel'                      => 'string',
        'order_channel'                      => 'string',
        'ship_service_level'                 => 'string',
        'order_total'                        => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money',
        'number_of_items_shipped'            => 'int',
        'number_of_items_unshipped'          => 'int',
        'payment_execution_detail'           => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\PaymentExecutionDetailItem[]',
        'payment_method'                     => 'string',
        'payment_method_details'             => 'string[]',
        'marketplace_id'                     => 'string',
        'shipment_service_level_category'    => 'string',
        'easy_ship_shipment_status'          => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\EasyShipShipmentStatus',
        'cba_displayable_shipping_label'     => 'string',
        'order_type'                         => 'string',
        'earliest_ship_date'                 => 'string',
        'latest_ship_date'                   => 'string',
        'earliest_delivery_date'             => 'string',
        'latest_delivery_date'               => 'string',
        'is_business_order'                  => 'bool',
        'is_prime'                           => 'bool',
        'is_premium_order'                   => 'bool',
        'is_global_express_enabled'          => 'bool',
        'replaced_order_id'                  => 'string',
        'is_replacement_order'               => 'bool',
        'promise_response_due_date'          => 'string',
        'is_estimated_ship_date_set'         => 'bool',
        'is_sold_by_ab'                      => 'bool',
        'is_iba'                             => 'bool',
        'default_ship_from_location_address' => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Address',
        'buyer_invoice_preference'           => 'string',
        'buyer_tax_information'              => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\BuyerTaxInformation',
        'fulfillment_instruction'            => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\FulfillmentInstruction',
        'is_ispu'                            => 'bool',
        'is_access_point_order'              => 'bool',
        'marketplace_tax_info'               => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\MarketplaceTaxInfo',
        'seller_display_name'                => 'string',
        'shipping_address'                   => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Address',
        'buyer_info'                         => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\BuyerInfo',
        'automated_shipping_settings'        => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\AutomatedShippingSettings',
        'has_regulated_items'                => 'bool',
        'electronic_invoice_status'          => '\SellerLegend\AmazonSellingPartnerAPI\Models\Orders\ElectronicInvoiceStatus'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $swaggerFormats = [
        'amazon_order_id'                    => null,
        'seller_order_id'                    => null,
        'purchase_date'                      => null,
        'last_update_date'                   => null,
        'order_status'                       => null,
        'fulfillment_channel'                => null,
        'sales_channel'                      => null,
        'order_channel'                      => null,
        'ship_service_level'                 => null,
        'order_total'                        => null,
        'number_of_items_shipped'            => null,
        'number_of_items_unshipped'          => null,
        'payment_execution_detail'           => null,
        'payment_method'                     => null,
        'payment_method_details'             => null,
        'marketplace_id'                     => null,
        'shipment_service_level_category'    => null,
        'easy_ship_shipment_status'          => null,
        'cba_displayable_shipping_label'     => null,
        'order_type'                         => null,
        'earliest_ship_date'                 => null,
        'latest_ship_date'                   => null,
        'earliest_delivery_date'             => null,
        'latest_delivery_date'               => null,
        'is_business_order'                  => null,
        'is_prime'                           => null,
        'is_premium_order'                   => null,
        'is_global_express_enabled'          => null,
        'replaced_order_id'                  => null,
        'is_replacement_order'               => null,
        'promise_response_due_date'          => null,
        'is_estimated_ship_date_set'         => null,
        'is_sold_by_ab'                      => null,
        'is_iba'                             => null,
        'default_ship_from_location_address' => null,
        'buyer_invoice_preference'           => null,
        'buyer_tax_information'              => null,
        'fulfillment_instruction'            => null,
        'is_ispu'                            => null,
        'is_access_point_order'              => null,
        'marketplace_tax_info'               => null,
        'seller_display_name'                => null,
        'shipping_address'                   => null,
        'buyer_info'                         => null,
        'automated_shipping_settings'        => null,
        'has_regulated_items'                => null,
        'electronic_invoice_status'          => null
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
        'amazon_order_id'                    => 'AmazonOrderId',
        'seller_order_id'                    => 'SellerOrderId',
        'purchase_date'                      => 'PurchaseDate',
        'last_update_date'                   => 'LastUpdateDate',
        'order_status'                       => 'OrderStatus',
        'fulfillment_channel'                => 'FulfillmentChannel',
        'sales_channel'                      => 'SalesChannel',
        'order_channel'                      => 'OrderChannel',
        'ship_service_level'                 => 'ShipServiceLevel',
        'order_total'                        => 'OrderTotal',
        'number_of_items_shipped'            => 'NumberOfItemsShipped',
        'number_of_items_unshipped'          => 'NumberOfItemsUnshipped',
        'payment_execution_detail'           => 'PaymentExecutionDetail',
        'payment_method'                     => 'PaymentMethod',
        'payment_method_details'             => 'PaymentMethodDetails',
        'marketplace_id'                     => 'MarketplaceId',
        'shipment_service_level_category'    => 'ShipmentServiceLevelCategory',
        'easy_ship_shipment_status'          => 'EasyShipShipmentStatus',
        'cba_displayable_shipping_label'     => 'CbaDisplayableShippingLabel',
        'order_type'                         => 'OrderType',
        'earliest_ship_date'                 => 'EarliestShipDate',
        'latest_ship_date'                   => 'LatestShipDate',
        'earliest_delivery_date'             => 'EarliestDeliveryDate',
        'latest_delivery_date'               => 'LatestDeliveryDate',
        'is_business_order'                  => 'IsBusinessOrder',
        'is_prime'                           => 'IsPrime',
        'is_premium_order'                   => 'IsPremiumOrder',
        'is_global_express_enabled'          => 'IsGlobalExpressEnabled',
        'replaced_order_id'                  => 'ReplacedOrderId',
        'is_replacement_order'               => 'IsReplacementOrder',
        'promise_response_due_date'          => 'PromiseResponseDueDate',
        'is_estimated_ship_date_set'         => 'IsEstimatedShipDateSet',
        'is_sold_by_ab'                      => 'IsSoldByAB',
        'is_iba'                             => 'IsIBA',
        'default_ship_from_location_address' => 'DefaultShipFromLocationAddress',
        'buyer_invoice_preference'           => 'BuyerInvoicePreference',
        'buyer_tax_information'              => 'BuyerTaxInformation',
        'fulfillment_instruction'            => 'FulfillmentInstruction',
        'is_ispu'                            => 'IsISPU',
        'is_access_point_order'              => 'IsAccessPointOrder',
        'marketplace_tax_info'               => 'MarketplaceTaxInfo',
        'seller_display_name'                => 'SellerDisplayName',
        'shipping_address'                   => 'ShippingAddress',
        'buyer_info'                         => 'BuyerInfo',
        'automated_shipping_settings'        => 'AutomatedShippingSettings',
        'has_regulated_items'                => 'HasRegulatedItems',
        'electronic_invoice_status'          => 'ElectronicInvoiceStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amazon_order_id'                    => 'setAmazonOrderId',
        'seller_order_id'                    => 'setSellerOrderId',
        'purchase_date'                      => 'setPurchaseDate',
        'last_update_date'                   => 'setLastUpdateDate',
        'order_status'                       => 'setOrderStatus',
        'fulfillment_channel'                => 'setFulfillmentChannel',
        'sales_channel'                      => 'setSalesChannel',
        'order_channel'                      => 'setOrderChannel',
        'ship_service_level'                 => 'setShipServiceLevel',
        'order_total'                        => 'setOrderTotal',
        'number_of_items_shipped'            => 'setNumberOfItemsShipped',
        'number_of_items_unshipped'          => 'setNumberOfItemsUnshipped',
        'payment_execution_detail'           => 'setPaymentExecutionDetail',
        'payment_method'                     => 'setPaymentMethod',
        'payment_method_details'             => 'setPaymentMethodDetails',
        'marketplace_id'                     => 'setMarketplaceId',
        'shipment_service_level_category'    => 'setShipmentServiceLevelCategory',
        'easy_ship_shipment_status'          => 'setEasyShipShipmentStatus',
        'cba_displayable_shipping_label'     => 'setCbaDisplayableShippingLabel',
        'order_type'                         => 'setOrderType',
        'earliest_ship_date'                 => 'setEarliestShipDate',
        'latest_ship_date'                   => 'setLatestShipDate',
        'earliest_delivery_date'             => 'setEarliestDeliveryDate',
        'latest_delivery_date'               => 'setLatestDeliveryDate',
        'is_business_order'                  => 'setIsBusinessOrder',
        'is_prime'                           => 'setIsPrime',
        'is_premium_order'                   => 'setIsPremiumOrder',
        'is_global_express_enabled'          => 'setIsGlobalExpressEnabled',
        'replaced_order_id'                  => 'setReplacedOrderId',
        'is_replacement_order'               => 'setIsReplacementOrder',
        'promise_response_due_date'          => 'setPromiseResponseDueDate',
        'is_estimated_ship_date_set'         => 'setIsEstimatedShipDateSet',
        'is_sold_by_ab'                      => 'setIsSoldByAb',
        'is_iba'                             => 'setIsIba',
        'default_ship_from_location_address' => 'setDefaultShipFromLocationAddress',
        'buyer_invoice_preference'           => 'setBuyerInvoicePreference',
        'buyer_tax_information'              => 'setBuyerTaxInformation',
        'fulfillment_instruction'            => 'setFulfillmentInstruction',
        'is_ispu'                            => 'setIsIspu',
        'is_access_point_order'              => 'setIsAccessPointOrder',
        'marketplace_tax_info'               => 'setMarketplaceTaxInfo',
        'seller_display_name'                => 'setSellerDisplayName',
        'shipping_address'                   => 'setShippingAddress',
        'buyer_info'                         => 'setBuyerInfo',
        'automated_shipping_settings'        => 'setAutomatedShippingSettings',
        'has_regulated_items'                => 'setHasRegulatedItems',
        'electronic_invoice_status'          => 'setElectronicInvoiceStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amazon_order_id'                    => 'getAmazonOrderId',
        'seller_order_id'                    => 'getSellerOrderId',
        'purchase_date'                      => 'getPurchaseDate',
        'last_update_date'                   => 'getLastUpdateDate',
        'order_status'                       => 'getOrderStatus',
        'fulfillment_channel'                => 'getFulfillmentChannel',
        'sales_channel'                      => 'getSalesChannel',
        'order_channel'                      => 'getOrderChannel',
        'ship_service_level'                 => 'getShipServiceLevel',
        'order_total'                        => 'getOrderTotal',
        'number_of_items_shipped'            => 'getNumberOfItemsShipped',
        'number_of_items_unshipped'          => 'getNumberOfItemsUnshipped',
        'payment_execution_detail'           => 'getPaymentExecutionDetail',
        'payment_method'                     => 'getPaymentMethod',
        'payment_method_details'             => 'getPaymentMethodDetails',
        'marketplace_id'                     => 'getMarketplaceId',
        'shipment_service_level_category'    => 'getShipmentServiceLevelCategory',
        'easy_ship_shipment_status'          => 'getEasyShipShipmentStatus',
        'cba_displayable_shipping_label'     => 'getCbaDisplayableShippingLabel',
        'order_type'                         => 'getOrderType',
        'earliest_ship_date'                 => 'getEarliestShipDate',
        'latest_ship_date'                   => 'getLatestShipDate',
        'earliest_delivery_date'             => 'getEarliestDeliveryDate',
        'latest_delivery_date'               => 'getLatestDeliveryDate',
        'is_business_order'                  => 'getIsBusinessOrder',
        'is_prime'                           => 'getIsPrime',
        'is_premium_order'                   => 'getIsPremiumOrder',
        'is_global_express_enabled'          => 'getIsGlobalExpressEnabled',
        'replaced_order_id'                  => 'getReplacedOrderId',
        'is_replacement_order'               => 'getIsReplacementOrder',
        'promise_response_due_date'          => 'getPromiseResponseDueDate',
        'is_estimated_ship_date_set'         => 'getIsEstimatedShipDateSet',
        'is_sold_by_ab'                      => 'getIsSoldByAb',
        'is_iba'                             => 'getIsIba',
        'default_ship_from_location_address' => 'getDefaultShipFromLocationAddress',
        'buyer_invoice_preference'           => 'getBuyerInvoicePreference',
        'buyer_tax_information'              => 'getBuyerTaxInformation',
        'fulfillment_instruction'            => 'getFulfillmentInstruction',
        'is_ispu'                            => 'getIsIspu',
        'is_access_point_order'              => 'getIsAccessPointOrder',
        'marketplace_tax_info'               => 'getMarketplaceTaxInfo',
        'seller_display_name'                => 'getSellerDisplayName',
        'shipping_address'                   => 'getShippingAddress',
        'buyer_info'                         => 'getBuyerInfo',
        'automated_shipping_settings'        => 'getAutomatedShippingSettings',
        'has_regulated_items'                => 'getHasRegulatedItems',
        'electronic_invoice_status'          => 'getElectronicInvoiceStatus'
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

    const ORDER_STATUS_PENDING = 'Pending';
    const ORDER_STATUS_UNSHIPPED = 'Unshipped';
    const ORDER_STATUS_PARTIALLY_SHIPPED = 'PartiallyShipped';
    const ORDER_STATUS_SHIPPED = 'Shipped';
    const ORDER_STATUS_CANCELED = 'Canceled';
    const ORDER_STATUS_UNFULFILLABLE = 'Unfulfillable';
    const ORDER_STATUS_INVOICE_UNCONFIRMED = 'InvoiceUnconfirmed';
    const ORDER_STATUS_PENDING_AVAILABILITY = 'PendingAvailability';


    const FULFILLMENT_CHANNEL_MFN = 'MFN';
    const FULFILLMENT_CHANNEL_AFN = 'AFN';


    const PAYMENT_METHOD_COD = 'COD';
    const PAYMENT_METHOD_CVS = 'CVS';
    const PAYMENT_METHOD_OTHER = 'Other';


    const ORDER_TYPE_STANDARD_ORDER = 'StandardOrder';
    const ORDER_TYPE_LONG_LEAD_TIME_ORDER = 'LongLeadTimeOrder';
    const ORDER_TYPE_PREORDER = 'Preorder';
    const ORDER_TYPE_BACK_ORDER = 'BackOrder';
    const ORDER_TYPE_SOURCING_ON_DEMAND_ORDER = 'SourcingOnDemandOrder';


    const BUYER_INVOICE_PREFERENCE_INDIVIDUAL = 'INDIVIDUAL';
    const BUYER_INVOICE_PREFERENCE_BUSINESS = 'BUSINESS';


    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrderStatusAllowableValues() {
        return [
            self::ORDER_STATUS_PENDING,
            self::ORDER_STATUS_UNSHIPPED,
            self::ORDER_STATUS_PARTIALLY_SHIPPED,
            self::ORDER_STATUS_SHIPPED,
            self::ORDER_STATUS_CANCELED,
            self::ORDER_STATUS_UNFULFILLABLE,
            self::ORDER_STATUS_INVOICE_UNCONFIRMED,
            self::ORDER_STATUS_PENDING_AVAILABILITY,
        ];
    }


    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFulfillmentChannelAllowableValues() {
        return [
            self::FULFILLMENT_CHANNEL_MFN,
            self::FULFILLMENT_CHANNEL_AFN,
        ];
    }


    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentMethodAllowableValues() {
        return [
            self::PAYMENT_METHOD_COD,
            self::PAYMENT_METHOD_CVS,
            self::PAYMENT_METHOD_OTHER,
        ];
    }


    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrderTypeAllowableValues() {
        return [
            self::ORDER_TYPE_STANDARD_ORDER,
            self::ORDER_TYPE_LONG_LEAD_TIME_ORDER,
            self::ORDER_TYPE_PREORDER,
            self::ORDER_TYPE_BACK_ORDER,
            self::ORDER_TYPE_SOURCING_ON_DEMAND_ORDER,
        ];
    }


    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBuyerInvoicePreferenceAllowableValues() {
        return [
            self::BUYER_INVOICE_PREFERENCE_INDIVIDUAL,
            self::BUYER_INVOICE_PREFERENCE_BUSINESS,
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
        $this->container['amazon_order_id'] = $data['amazon_order_id'] ?? null;
        $this->container['seller_order_id'] = $data['seller_order_id'] ?? null;
        $this->container['purchase_date'] = $data['purchase_date'] ?? null;
        $this->container['last_update_date'] = $data['last_update_date'] ?? null;
        $this->container['order_status'] = $data['order_status'] ?? null;
        $this->container['fulfillment_channel'] = $data['fulfillment_channel'] ?? null;
        $this->container['sales_channel'] = $data['sales_channel'] ?? null;
        $this->container['order_channel'] = $data['order_channel'] ?? null;
        $this->container['ship_service_level'] = $data['ship_service_level'] ?? null;
        $this->container['order_total'] = $data['order_total'] ?? null;
        $this->container['number_of_items_shipped'] = $data['number_of_items_shipped'] ?? null;
        $this->container['number_of_items_unshipped'] = $data['number_of_items_unshipped'] ?? null;
        $this->container['payment_execution_detail'] = $data['payment_execution_detail'] ?? null;
        $this->container['payment_method'] = $data['payment_method'] ?? null;
        $this->container['payment_method_details'] = $data['payment_method_details'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['shipment_service_level_category'] = $data['shipment_service_level_category'] ?? null;
        $this->container['easy_ship_shipment_status'] = $data['easy_ship_shipment_status'] ?? null;
        $this->container['cba_displayable_shipping_label'] = $data['cba_displayable_shipping_label'] ?? null;
        $this->container['order_type'] = $data['order_type'] ?? null;
        $this->container['earliest_ship_date'] = $data['earliest_ship_date'] ?? null;
        $this->container['latest_ship_date'] = $data['latest_ship_date'] ?? null;
        $this->container['earliest_delivery_date'] = $data['earliest_delivery_date'] ?? null;
        $this->container['latest_delivery_date'] = $data['latest_delivery_date'] ?? null;
        $this->container['is_business_order'] = $data['is_business_order'] ?? null;
        $this->container['is_prime'] = $data['is_prime'] ?? null;
        $this->container['is_premium_order'] = $data['is_premium_order'] ?? null;
        $this->container['is_global_express_enabled'] = $data['is_global_express_enabled'] ?? null;
        $this->container['replaced_order_id'] = $data['replaced_order_id'] ?? null;
        $this->container['is_replacement_order'] = $data['is_replacement_order'] ?? null;
        $this->container['promise_response_due_date'] = $data['promise_response_due_date'] ?? null;
        $this->container['is_estimated_ship_date_set'] = $data['is_estimated_ship_date_set'] ?? null;
        $this->container['is_sold_by_ab'] = $data['is_sold_by_ab'] ?? null;
        $this->container['is_iba'] = $data['is_iba'] ?? null;
        $this->container['default_ship_from_location_address'] = $data['default_ship_from_location_address'] ?? null;
        $this->container['buyer_invoice_preference'] = $data['buyer_invoice_preference'] ?? null;
        $this->container['buyer_tax_information'] = $data['buyer_tax_information'] ?? null;
        $this->container['fulfillment_instruction'] = $data['fulfillment_instruction'] ?? null;
        $this->container['is_ispu'] = $data['is_ispu'] ?? null;
        $this->container['is_access_point_order'] = $data['is_access_point_order'] ?? null;
        $this->container['marketplace_tax_info'] = $data['marketplace_tax_info'] ?? null;
        $this->container['seller_display_name'] = $data['seller_display_name'] ?? null;
        $this->container['shipping_address'] = $data['shipping_address'] ?? null;
        $this->container['buyer_info'] = $data['buyer_info'] ?? null;
        $this->container['automated_shipping_settings'] = $data['automated_shipping_settings'] ?? null;
        $this->container['has_regulated_items'] = $data['has_regulated_items'] ?? null;
        $this->container['electronic_invoice_status'] = $data['electronic_invoice_status'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() {
        $invalidProperties = [];
        if ($this->container['amazon_order_id'] === null) {
            $invalidProperties[] = "'amazon_order_id' can't be null";
        }
        if ($this->container['purchase_date'] === null) {
            $invalidProperties[] = "'purchase_date' can't be null";
        }
        if ($this->container['last_update_date'] === null) {
            $invalidProperties[] = "'last_update_date' can't be null";
        }
        if ($this->container['order_status'] === null) {
            $invalidProperties[] = "'order_status' can't be null";
        }
        $allowedValues = $this->getOrderStatusAllowableValues();
        if (!is_null($this->container['order_status']) && !in_array($this->container['order_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'order_status', must be one of '%s'",
                $this->container['order_status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFulfillmentChannelAllowableValues();
        if (!is_null($this->container['fulfillment_channel']) && !in_array($this->container['fulfillment_channel'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'fulfillment_channel', must be one of '%s'",
                $this->container['fulfillment_channel'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPaymentMethodAllowableValues();
        if (!is_null($this->container['payment_method']) && !in_array($this->container['payment_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'payment_method', must be one of '%s'",
                $this->container['payment_method'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOrderTypeAllowableValues();
        if (!is_null($this->container['order_type']) && !in_array($this->container['order_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'order_type', must be one of '%s'",
                $this->container['order_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBuyerInvoicePreferenceAllowableValues();
        if (!is_null($this->container['buyer_invoice_preference']) && !in_array($this->container['buyer_invoice_preference'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'buyer_invoice_preference', must be one of '%s'",
                $this->container['buyer_invoice_preference'],
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
     * Gets amazon_order_id
     *
     * @return string
     */
    public function getAmazonOrderId() {
        return $this->container['amazon_order_id'];
    }

    /**
     * Sets amazon_order_id
     *
     * @param string $amazon_order_id An Amazon-defined order identifier, in 3-7-7 format.
     *
     * @return self
     */
    public function setAmazonOrderId($amazon_order_id) {
        $this->container['amazon_order_id'] = $amazon_order_id;

        return $this;
    }

    /**
     * Gets seller_order_id
     *
     * @return string|null
     */
    public function getSellerOrderId() {
        return $this->container['seller_order_id'];
    }

    /**
     * Sets seller_order_id
     *
     * @param string|null $seller_order_id A seller-defined order identifier.
     *
     * @return self
     */
    public function setSellerOrderId($seller_order_id) {
        $this->container['seller_order_id'] = $seller_order_id;

        return $this;
    }

    /**
     * Gets purchase_date
     *
     * @return string
     */
    public function getPurchaseDate() {
        return $this->container['purchase_date'];
    }

    /**
     * Sets purchase_date
     *
     * @param string $purchase_date The date when the order was created.
     *
     * @return self
     */
    public function setPurchaseDate($purchase_date) {
        $this->container['purchase_date'] = $purchase_date;

        return $this;
    }

    /**
     * Gets last_update_date
     *
     * @return string
     */
    public function getLastUpdateDate() {
        return $this->container['last_update_date'];
    }

    /**
     * Sets last_update_date
     *
     * @param string $last_update_date The date when the order was last updated. __Note__: LastUpdateDate is returned with an incorrect date for orders that were last updated before 2009-04-01.
     *
     * @return self
     */
    public function setLastUpdateDate($last_update_date) {
        $this->container['last_update_date'] = $last_update_date;

        return $this;
    }

    /**
     * Gets order_status
     *
     * @return string
     */
    public function getOrderStatus() {
        return $this->container['order_status'];
    }

    /**
     * Sets order_status
     *
     * @param string $order_status The current order status.
     *
     * @return self
     */
    public function setOrderStatus($order_status) {
        $allowedValues = $this->getOrderStatusAllowableValues();
        if (!in_array($order_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'order_status', must be one of '%s'",
                    $order_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['order_status'] = $order_status;

        return $this;
    }

    /**
     * Gets fulfillment_channel
     *
     * @return string|null
     */
    public function getFulfillmentChannel() {
        return $this->container['fulfillment_channel'];
    }

    /**
     * Sets fulfillment_channel
     *
     * @param string|null $fulfillment_channel Whether the order was fulfilled by Amazon (AFN) or by the seller (MFN).
     *
     * @return self
     */
    public function setFulfillmentChannel($fulfillment_channel) {
        $allowedValues = $this->getFulfillmentChannelAllowableValues();
        if (!is_null($fulfillment_channel) && !in_array($fulfillment_channel, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'fulfillment_channel', must be one of '%s'",
                    $fulfillment_channel,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fulfillment_channel'] = $fulfillment_channel;

        return $this;
    }

    /**
     * Gets sales_channel
     *
     * @return string|null
     */
    public function getSalesChannel() {
        return $this->container['sales_channel'];
    }

    /**
     * Sets sales_channel
     *
     * @param string|null $sales_channel The sales channel of the first item in the order.
     *
     * @return self
     */
    public function setSalesChannel($sales_channel) {
        $this->container['sales_channel'] = $sales_channel;

        return $this;
    }

    /**
     * Gets order_channel
     *
     * @return string|null
     */
    public function getOrderChannel() {
        return $this->container['order_channel'];
    }

    /**
     * Sets order_channel
     *
     * @param string|null $order_channel The order channel of the first item in the order.
     *
     * @return self
     */
    public function setOrderChannel($order_channel) {
        $this->container['order_channel'] = $order_channel;

        return $this;
    }

    /**
     * Gets ship_service_level
     *
     * @return string|null
     */
    public function getShipServiceLevel() {
        return $this->container['ship_service_level'];
    }

    /**
     * Sets ship_service_level
     *
     * @param string|null $ship_service_level The shipment service level of the order.
     *
     * @return self
     */
    public function setShipServiceLevel($ship_service_level) {
        $this->container['ship_service_level'] = $ship_service_level;

        return $this;
    }

    /**
     * Gets order_total
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money|null
     */
    public function getOrderTotal() {
        return $this->container['order_total'];
    }

    /**
     * Sets order_total
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Money|null $order_total order_total
     *
     * @return self
     */
    public function setOrderTotal($order_total) {
        $this->container['order_total'] = $order_total;

        return $this;
    }

    /**
     * Gets number_of_items_shipped
     *
     * @return int|null
     */
    public function getNumberOfItemsShipped() {
        return $this->container['number_of_items_shipped'];
    }

    /**
     * Sets number_of_items_shipped
     *
     * @param int|null $number_of_items_shipped The number of items shipped.
     *
     * @return self
     */
    public function setNumberOfItemsShipped($number_of_items_shipped) {
        $this->container['number_of_items_shipped'] = $number_of_items_shipped;

        return $this;
    }

    /**
     * Gets number_of_items_unshipped
     *
     * @return int|null
     */
    public function getNumberOfItemsUnshipped() {
        return $this->container['number_of_items_unshipped'];
    }

    /**
     * Sets number_of_items_unshipped
     *
     * @param int|null $number_of_items_unshipped The number of items unshipped.
     *
     * @return self
     */
    public function setNumberOfItemsUnshipped($number_of_items_unshipped) {
        $this->container['number_of_items_unshipped'] = $number_of_items_unshipped;

        return $this;
    }

    /**
     * Gets payment_execution_detail
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\PaymentExecutionDetailItem[]|null
     */
    public function getPaymentExecutionDetail() {
        return $this->container['payment_execution_detail'];
    }

    /**
     * Sets payment_execution_detail
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\PaymentExecutionDetailItem[]|null $payment_execution_detail A list of payment execution detail items.
     *
     * @return self
     */
    public function setPaymentExecutionDetail($payment_execution_detail) {
        $this->container['payment_execution_detail'] = $payment_execution_detail;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return string|null
     */
    public function getPaymentMethod() {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param string|null $payment_method The payment method for the order. This property is limited to Cash On Delivery (COD) and Convenience Store (CVS) payment methods. Unless you need the specific COD payment information provided by the PaymentExecutionDetailItem object, we recommend using the PaymentMethodDetails property to get payment method information.
     *
     * @return self
     */
    public function setPaymentMethod($payment_method) {
        $allowedValues = $this->getPaymentMethodAllowableValues();
        if (!is_null($payment_method) && !in_array($payment_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'payment_method', must be one of '%s'",
                    $payment_method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets payment_method_details
     *
     * @return string[]|null
     */
    public function getPaymentMethodDetails() {
        return $this->container['payment_method_details'];
    }

    /**
     * Sets payment_method_details
     *
     * @param string[]|null $payment_method_details A list of payment method detail items.
     *
     * @return self
     */
    public function setPaymentMethodDetails($payment_method_details) {
        $this->container['payment_method_details'] = $payment_method_details;

        return $this;
    }

    /**
     * Gets marketplace_id
     *
     * @return string|null
     */
    public function getMarketplaceId() {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string|null $marketplace_id The identifier for the marketplace where the order was placed.
     *
     * @return self
     */
    public function setMarketplaceId($marketplace_id) {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets shipment_service_level_category
     *
     * @return string|null
     */
    public function getShipmentServiceLevelCategory() {
        return $this->container['shipment_service_level_category'];
    }

    /**
     * Sets shipment_service_level_category
     *
     * @param string|null $shipment_service_level_category The shipment service level category of the order. Possible values: Expedited, FreeEconomy, NextDay, SameDay, SecondDay, Scheduled, Standard.
     *
     * @return self
     */
    public function setShipmentServiceLevelCategory($shipment_service_level_category) {
        $this->container['shipment_service_level_category'] = $shipment_service_level_category;

        return $this;
    }

    /**
     * Gets easy_ship_shipment_status
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\EasyShipShipmentStatus|null
     */
    public function getEasyShipShipmentStatus() {
        return $this->container['easy_ship_shipment_status'];
    }

    /**
     * Sets easy_ship_shipment_status
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\EasyShipShipmentStatus|null $easy_ship_shipment_status easy_ship_shipment_status
     *
     * @return self
     */
    public function setEasyShipShipmentStatus($easy_ship_shipment_status) {
        $this->container['easy_ship_shipment_status'] = $easy_ship_shipment_status;

        return $this;
    }

    /**
     * Gets cba_displayable_shipping_label
     *
     * @return string|null
     */
    public function getCbaDisplayableShippingLabel() {
        return $this->container['cba_displayable_shipping_label'];
    }

    /**
     * Sets cba_displayable_shipping_label
     *
     * @param string|null $cba_displayable_shipping_label Custom ship label for Checkout by Amazon (CBA).
     *
     * @return self
     */
    public function setCbaDisplayableShippingLabel($cba_displayable_shipping_label) {
        $this->container['cba_displayable_shipping_label'] = $cba_displayable_shipping_label;

        return $this;
    }

    /**
     * Gets order_type
     *
     * @return string|null
     */
    public function getOrderType() {
        return $this->container['order_type'];
    }

    /**
     * Sets order_type
     *
     * @param string|null $order_type The type of the order.
     *
     * @return self
     */
    public function setOrderType($order_type) {
        $allowedValues = $this->getOrderTypeAllowableValues();
        if (!is_null($order_type) && !in_array($order_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'order_type', must be one of '%s'",
                    $order_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['order_type'] = $order_type;

        return $this;
    }

    /**
     * Gets earliest_ship_date
     *
     * @return string|null
     */
    public function getEarliestShipDate() {
        return $this->container['earliest_ship_date'];
    }

    /**
     * Sets earliest_ship_date
     *
     * @param string|null $earliest_ship_date The start of the time period within which you have committed to ship the order. In ISO 8601 date time format. Returned only for seller-fulfilled orders. Note: EarliestShipDate might not be returned for orders placed before February 1, 2013.
     *
     * @return self
     */
    public function setEarliestShipDate($earliest_ship_date) {
        $this->container['earliest_ship_date'] = $earliest_ship_date;

        return $this;
    }

    /**
     * Gets latest_ship_date
     *
     * @return string|null
     */
    public function getLatestShipDate() {
        return $this->container['latest_ship_date'];
    }

    /**
     * Sets latest_ship_date
     *
     * @param string|null $latest_ship_date The end of the time period within which you have committed to ship the order. In ISO 8601 date time format. Returned only for seller-fulfilled orders. Note: LatestShipDate might not be returned for orders placed before February 1, 2013.
     *
     * @return self
     */
    public function setLatestShipDate($latest_ship_date) {
        $this->container['latest_ship_date'] = $latest_ship_date;

        return $this;
    }

    /**
     * Gets earliest_delivery_date
     *
     * @return string|null
     */
    public function getEarliestDeliveryDate() {
        return $this->container['earliest_delivery_date'];
    }

    /**
     * Sets earliest_delivery_date
     *
     * @param string|null $earliest_delivery_date The start of the time period within which you have committed to fulfill the order. In ISO 8601 date time format. Returned only for seller-fulfilled orders.
     *
     * @return self
     */
    public function setEarliestDeliveryDate($earliest_delivery_date) {
        $this->container['earliest_delivery_date'] = $earliest_delivery_date;

        return $this;
    }

    /**
     * Gets latest_delivery_date
     *
     * @return string|null
     */
    public function getLatestDeliveryDate() {
        return $this->container['latest_delivery_date'];
    }

    /**
     * Sets latest_delivery_date
     *
     * @param string|null $latest_delivery_date The end of the time period within which you have committed to fulfill the order. In ISO 8601 date time format. Returned only for seller-fulfilled orders that do not have a PendingAvailability, Pending, or Canceled status.
     *
     * @return self
     */
    public function setLatestDeliveryDate($latest_delivery_date) {
        $this->container['latest_delivery_date'] = $latest_delivery_date;

        return $this;
    }

    /**
     * Gets is_business_order
     *
     * @return bool|null
     */
    public function getIsBusinessOrder() {
        return $this->container['is_business_order'];
    }

    /**
     * Sets is_business_order
     *
     * @param bool|null $is_business_order When true, the order is an Amazon Business order. An Amazon Business order is an order where the buyer is a Verified Business Buyer.
     *
     * @return self
     */
    public function setIsBusinessOrder($is_business_order) {
        $this->container['is_business_order'] = $is_business_order;

        return $this;
    }

    /**
     * Gets is_prime
     *
     * @return bool|null
     */
    public function getIsPrime() {
        return $this->container['is_prime'];
    }

    /**
     * Sets is_prime
     *
     * @param bool|null $is_prime When true, the order is a seller-fulfilled Amazon Prime order.
     *
     * @return self
     */
    public function setIsPrime($is_prime) {
        $this->container['is_prime'] = $is_prime;

        return $this;
    }

    /**
     * Gets is_premium_order
     *
     * @return bool|null
     */
    public function getIsPremiumOrder() {
        return $this->container['is_premium_order'];
    }

    /**
     * Sets is_premium_order
     *
     * @param bool|null $is_premium_order When true, the order has a Premium Shipping Service Level Agreement. For more information about Premium Shipping orders, see \"Premium Shipping Options\" in the Seller Central Help for your marketplace.
     *
     * @return self
     */
    public function setIsPremiumOrder($is_premium_order) {
        $this->container['is_premium_order'] = $is_premium_order;

        return $this;
    }

    /**
     * Gets is_global_express_enabled
     *
     * @return bool|null
     */
    public function getIsGlobalExpressEnabled() {
        return $this->container['is_global_express_enabled'];
    }

    /**
     * Sets is_global_express_enabled
     *
     * @param bool|null $is_global_express_enabled When true, the order is a GlobalExpress order.
     *
     * @return self
     */
    public function setIsGlobalExpressEnabled($is_global_express_enabled) {
        $this->container['is_global_express_enabled'] = $is_global_express_enabled;

        return $this;
    }

    /**
     * Gets replaced_order_id
     *
     * @return string|null
     */
    public function getReplacedOrderId() {
        return $this->container['replaced_order_id'];
    }

    /**
     * Sets replaced_order_id
     *
     * @param string|null $replaced_order_id The order ID value for the order that is being replaced. Returned only if IsReplacementOrder = true.
     *
     * @return self
     */
    public function setReplacedOrderId($replaced_order_id) {
        $this->container['replaced_order_id'] = $replaced_order_id;

        return $this;
    }

    /**
     * Gets is_replacement_order
     *
     * @return bool|null
     */
    public function getIsReplacementOrder() {
        return $this->container['is_replacement_order'];
    }

    /**
     * Sets is_replacement_order
     *
     * @param bool|null $is_replacement_order When true, this is a replacement order.
     *
     * @return self
     */
    public function setIsReplacementOrder($is_replacement_order) {
        $this->container['is_replacement_order'] = $is_replacement_order;

        return $this;
    }

    /**
     * Gets promise_response_due_date
     *
     * @return string|null
     */
    public function getPromiseResponseDueDate() {
        return $this->container['promise_response_due_date'];
    }

    /**
     * Sets promise_response_due_date
     *
     * @param string|null $promise_response_due_date Indicates the date by which the seller must respond to the buyer with an estimated ship date. Returned only for Sourcing on Demand orders.
     *
     * @return self
     */
    public function setPromiseResponseDueDate($promise_response_due_date) {
        $this->container['promise_response_due_date'] = $promise_response_due_date;

        return $this;
    }

    /**
     * Gets is_estimated_ship_date_set
     *
     * @return bool|null
     */
    public function getIsEstimatedShipDateSet() {
        return $this->container['is_estimated_ship_date_set'];
    }

    /**
     * Sets is_estimated_ship_date_set
     *
     * @param bool|null $is_estimated_ship_date_set When true, the estimated ship date is set for the order. Returned only for Sourcing on Demand orders.
     *
     * @return self
     */
    public function setIsEstimatedShipDateSet($is_estimated_ship_date_set) {
        $this->container['is_estimated_ship_date_set'] = $is_estimated_ship_date_set;

        return $this;
    }

    /**
     * Gets is_sold_by_ab
     *
     * @return bool|null
     */
    public function getIsSoldByAb() {
        return $this->container['is_sold_by_ab'];
    }

    /**
     * Sets is_sold_by_ab
     *
     * @param bool|null $is_sold_by_ab When true, the item within this order was bought and re-sold by Amazon Business EU SARL (ABEU). By buying and instantly re-selling your items, ABEU becomes the seller of record, making your inventory available for sale to customers who would not otherwise purchase from a third-party seller.
     *
     * @return self
     */
    public function setIsSoldByAb($is_sold_by_ab) {
        $this->container['is_sold_by_ab'] = $is_sold_by_ab;

        return $this;
    }

    /**
     * Gets is_iba
     *
     * @return bool|null
     */
    public function getIsIba() {
        return $this->container['is_iba'];
    }

    /**
     * Sets is_iba
     *
     * @param bool|null $is_iba When true, the item within this order was bought and re-sold by Amazon Business EU SARL (ABEU). By buying and instantly re-selling your items, ABEU becomes the seller of record, making your inventory available for sale to customers who would not otherwise purchase from a third-party seller.
     *
     * @return self
     */
    public function setIsIba($is_iba) {
        $this->container['is_iba'] = $is_iba;

        return $this;
    }

    /**
     * Gets default_ship_from_location_address
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Address|null
     */
    public function getDefaultShipFromLocationAddress() {
        return $this->container['default_ship_from_location_address'];
    }

    /**
     * Sets default_ship_from_location_address
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Address|null $default_ship_from_location_address default_ship_from_location_address
     *
     * @return self
     */
    public function setDefaultShipFromLocationAddress($default_ship_from_location_address) {
        $this->container['default_ship_from_location_address'] = $default_ship_from_location_address;

        return $this;
    }

    /**
     * Gets buyer_invoice_preference
     *
     * @return string|null
     */
    public function getBuyerInvoicePreference() {
        return $this->container['buyer_invoice_preference'];
    }

    /**
     * Sets buyer_invoice_preference
     *
     * @param string|null $buyer_invoice_preference The buyer's invoicing preference. Available only in the TR marketplace.
     *
     * @return self
     */
    public function setBuyerInvoicePreference($buyer_invoice_preference) {
        $allowedValues = $this->getBuyerInvoicePreferenceAllowableValues();
        if (!is_null($buyer_invoice_preference) && !in_array($buyer_invoice_preference, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'buyer_invoice_preference', must be one of '%s'",
                    $buyer_invoice_preference,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['buyer_invoice_preference'] = $buyer_invoice_preference;

        return $this;
    }

    /**
     * Gets buyer_tax_information
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\BuyerTaxInformation|null
     */
    public function getBuyerTaxInformation() {
        return $this->container['buyer_tax_information'];
    }

    /**
     * Sets buyer_tax_information
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\BuyerTaxInformation|null $buyer_tax_information buyer_tax_information
     *
     * @return self
     */
    public function setBuyerTaxInformation($buyer_tax_information) {
        $this->container['buyer_tax_information'] = $buyer_tax_information;

        return $this;
    }

    /**
     * Gets fulfillment_instruction
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\FulfillmentInstruction|null
     */
    public function getFulfillmentInstruction() {
        return $this->container['fulfillment_instruction'];
    }

    /**
     * Sets fulfillment_instruction
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\FulfillmentInstruction|null $fulfillment_instruction fulfillment_instruction
     *
     * @return self
     */
    public function setFulfillmentInstruction($fulfillment_instruction) {
        $this->container['fulfillment_instruction'] = $fulfillment_instruction;

        return $this;
    }

    /**
     * Gets is_ispu
     *
     * @return bool|null
     */
    public function getIsIspu() {
        return $this->container['is_ispu'];
    }

    /**
     * Sets is_ispu
     *
     * @param bool|null $is_ispu When true, this order is marked to be picked up from a store rather than delivered.
     *
     * @return self
     */
    public function setIsIspu($is_ispu) {
        $this->container['is_ispu'] = $is_ispu;

        return $this;
    }

    /**
     * Gets is_access_point_order
     *
     * @return bool|null
     */
    public function getIsAccessPointOrder() {
        return $this->container['is_access_point_order'];
    }

    /**
     * Sets is_access_point_order
     *
     * @param bool|null $is_access_point_order When true, this order is marked to be delivered to an Access Point. The access location is chosen by the customer. Access Points include Amazon Hub Lockers, Amazon Hub Counters, and pickup points operated by carriers.
     *
     * @return self
     */
    public function setIsAccessPointOrder($is_access_point_order) {
        $this->container['is_access_point_order'] = $is_access_point_order;

        return $this;
    }

    /**
     * Gets marketplace_tax_info
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\MarketplaceTaxInfo|null
     */
    public function getMarketplaceTaxInfo() {
        return $this->container['marketplace_tax_info'];
    }

    /**
     * Sets marketplace_tax_info
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\MarketplaceTaxInfo|null $marketplace_tax_info marketplace_tax_info
     *
     * @return self
     */
    public function setMarketplaceTaxInfo($marketplace_tax_info) {
        $this->container['marketplace_tax_info'] = $marketplace_tax_info;

        return $this;
    }

    /**
     * Gets seller_display_name
     *
     * @return string|null
     */
    public function getSellerDisplayName() {
        return $this->container['seller_display_name'];
    }

    /**
     * Sets seller_display_name
     *
     * @param string|null $seller_display_name The seller's friendly name registered in the marketplace.
     *
     * @return self
     */
    public function setSellerDisplayName($seller_display_name) {
        $this->container['seller_display_name'] = $seller_display_name;

        return $this;
    }

    /**
     * Gets shipping_address
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Address|null
     */
    public function getShippingAddress() {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Address|null $shipping_address shipping_address
     *
     * @return self
     */
    public function setShippingAddress($shipping_address) {
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }

    /**
     * Gets buyer_info
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\BuyerInfo|null
     */
    public function getBuyerInfo() {
        return $this->container['buyer_info'];
    }

    /**
     * Sets buyer_info
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\BuyerInfo|null $buyer_info buyer_info
     *
     * @return self
     */
    public function setBuyerInfo($buyer_info) {
        $this->container['buyer_info'] = $buyer_info;

        return $this;
    }

    /**
     * Gets automated_shipping_settings
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\AutomatedShippingSettings|null
     */
    public function getAutomatedShippingSettings() {
        return $this->container['automated_shipping_settings'];
    }

    /**
     * Sets automated_shipping_settings
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\AutomatedShippingSettings|null $automated_shipping_settings automated_shipping_settings
     *
     * @return self
     */
    public function setAutomatedShippingSettings($automated_shipping_settings) {
        $this->container['automated_shipping_settings'] = $automated_shipping_settings;

        return $this;
    }

    /**
     * Gets has_regulated_items
     *
     * @return bool|null
     */
    public function getHasRegulatedItems() {
        return $this->container['has_regulated_items'];
    }

    /**
     * Sets has_regulated_items
     *
     * @param bool|null $has_regulated_items Whether the order contains regulated items which may require additional approval steps before being fulfilled.
     *
     * @return self
     */
    public function setHasRegulatedItems($has_regulated_items) {
        $this->container['has_regulated_items'] = $has_regulated_items;

        return $this;
    }

    /**
     * Gets electronic_invoice_status
     *
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\ElectronicInvoiceStatus|null
     */
    public function getElectronicInvoiceStatus() {
        return $this->container['electronic_invoice_status'];
    }

    /**
     * Sets electronic_invoice_status
     *
     * @param \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\ElectronicInvoiceStatus|null $electronic_invoice_status electronic_invoice_status
     *
     * @return self
     */
    public function setElectronicInvoiceStatus($electronic_invoice_status) {
        $this->container['electronic_invoice_status'] = $electronic_invoice_status;

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
     * @return \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\Order
     */
    public function __set($propertyName, $propertyValue) {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


