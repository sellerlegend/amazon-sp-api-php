<?php
/**
 * PackageStatus
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

namespace SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound;

use \SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;
use \SellerLegend\AmazonSellingPartnerAPI\Models\ModelInterface;

/**
 * PackageStatus Class Doc Comment
 *
 * @category Class
 * @description The shipment status of the package.
 * @package  SellingPartnerApi
 * @group
 */
class PackageStatus {
    public $value;

    /**
     * Possible values of this enum
     */
    const SHIPPED = 'SHIPPED';
    const IN_TRANSIT = 'IN_TRANSIT';
    const OUT_FOR_DELIVERY = 'OUT_FOR_DELIVERY';
    const DELIVERED = 'DELIVERED';
    const CHECKED_IN = 'CHECKED_IN';
    const RECEIVING = 'RECEIVING';
    const CLOSED = 'CLOSED';
    const DELETED = 'DELETED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues() {
        return [
            self::SHIPPED,
            self::IN_TRANSIT,
            self::OUT_FOR_DELIVERY,
            self::DELIVERED,
            self::CHECKED_IN,
            self::RECEIVING,
            self::CLOSED,
            self::DELETED,
        ];
    }

    public function __construct($value) {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues())) {
            throw new \InvalidArgumentException(sprintf("Invalid value for enum 'PackageStatus', must be one of '%s'", implode("', '", self::getAllowableEnumValues())));
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


