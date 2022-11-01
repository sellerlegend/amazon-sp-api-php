<?php
/**
 * ShipmentStatus.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * OpenAPI spec version: v0
 */

namespace SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound;

/**
 * ShipmentStatus Class Doc Comment.
 *
 * @description Indicates the status of the inbound shipment. When used with the createInboundShipment operation, WORKING is the only valid value. When used with the updateInboundShipment operation, possible values are WORKING, SHIPPED or CANCELLED.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ShipmentStatus {

    public $value;

    /**
     * Possible values of this enum.
     */
    const WORKING = 'WORKING';
    const SHIPPED = 'SHIPPED';
    const RECEIVING = 'RECEIVING';
    const CANCELLED = 'CANCELLED';
    const DELETED = 'DELETED';
    const CLOSED = 'CLOSED';
    const ERROR = 'ERROR';
    const IN_TRANSIT = 'IN_TRANSIT';
    const DELIVERED = 'DELIVERED';
    const CHECKED_IN = 'CHECKED_IN';
    const READY_TO_SHIP = 'READY_TO_SHIP';
    const CREATED = 'CREATED';
    const ABANDONED = 'ABANDONED';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues() {
        return [
            self::WORKING,
            self::SHIPPED,
            self::RECEIVING,
            self::CANCELLED,
            self::DELETED,
            self::CLOSED,
            self::ERROR,
            self::IN_TRANSIT,
            self::DELIVERED,
            self::CHECKED_IN,
            self::READY_TO_SHIP,
            self::CREATED,
            self::ABANDONED,
        ];
    }

    public function __construct($value) {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues())) {
            throw new \InvalidArgumentException(sprintf("Invalid value for enum 'ShipmentStatus', must be one of '%s'", implode("', '", self::getAllowableEnumValues())));
        }

        $this->value = $value;
    }

    /**
     * Convert the enum value to a string.
     *
     * @return string
     */
    public function __toString() {
        return $this->value;
    }
}
