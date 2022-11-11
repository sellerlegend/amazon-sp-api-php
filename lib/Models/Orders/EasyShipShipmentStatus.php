<?php

namespace SellerLegend\AmazonSellingPartnerAPI\Models\Orders;

use \SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;
use \SellerLegend\AmazonSellingPartnerAPI\Models\ModelInterface;

/**
 * EasyShipShipmentStatus Class Doc Comment
 *
 * @category Class
 * @description The status of the Amazon Easy-Ship order. This property is included only for Amazon Easy-Ship orders.
 * @package  SellerLegend\AmazonSellingPartnerAPI
 * @group
 */
class EasyShipShipmentStatus {

    public $value;

    /**
     * Possible values of this enum
     */
    const PENDING_SCHEDULE = 'PendingSchedule';
    const PENDING_PICK_UP = 'PendingPickUp';
    const PENDING_DROP_OFF = 'PendingDropOff';
    const LABEL_CANCELED = 'LabelCanceled';
    const PICKED_UP = 'PickedUp';
    const DROPPED_OFF = 'DroppedOff';
    const AT_ORIGIN_FC = 'AtOriginFC';
    const AT_DESTINATION_FC = 'AtDestinationFC';
    const DELIVERED = 'Delivered';
    const REJECTED_BY_BUYER = 'RejectedByBuyer';
    const UNDELIVERABLE = 'Undeliverable';
    const RETURNING_TO_SELLER = 'ReturningToSeller';
    const RETURNED_TO_SELLER = 'ReturnedToSeller';
    const LOST = 'Lost';
    const OUT_FOR_DELIVERY = 'OutForDelivery';
    const DAMAGED = 'Damaged';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues() {
        return [
            self::PENDING_SCHEDULE,
            self::PENDING_PICK_UP,
            self::PENDING_DROP_OFF,
            self::LABEL_CANCELED,
            self::PICKED_UP,
            self::DROPPED_OFF,
            self::AT_ORIGIN_FC,
            self::AT_DESTINATION_FC,
            self::DELIVERED,
            self::REJECTED_BY_BUYER,
            self::UNDELIVERABLE,
            self::RETURNING_TO_SELLER,
            self::RETURNED_TO_SELLER,
            self::LOST,
            self::OUT_FOR_DELIVERY,
            self::DAMAGED,
        ];
    }

    public function __construct($value) {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues())) {
            throw new \InvalidArgumentException(sprintf("Invalid value for enum 'EasyShipShipmentStatus', must be one of '%s'", implode("', '", self::getAllowableEnumValues())));
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


