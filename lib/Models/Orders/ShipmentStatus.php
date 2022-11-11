<?php

namespace SellerLegend\AmazonSellingPartnerAPI\Models\Orders;

use \SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;
use \SellerLegend\AmazonSellingPartnerAPI\Models\ModelInterface;

/**
 * ShipmentStatus Class Doc Comment
 *
 * @category Class
 * @description The shipment status to apply.
 * @package  SellerLegend\AmazonSellingPartnerAPI
 * @group
 */
class ShipmentStatus {

    public $value;

    /**
     * Possible values of this enum
     */
    const READY_FOR_PICKUP = 'ReadyForPickup';
    const PICKED_UP = 'PickedUp';
    const REFUSED_PICKUP = 'RefusedPickup';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues() {
        return [
            self::READY_FOR_PICKUP,
            self::PICKED_UP,
            self::REFUSED_PICKUP,
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


