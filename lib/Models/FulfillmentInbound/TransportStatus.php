<?php
/**
 * TransportStatus
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
 * TransportStatus Class Doc Comment
 *
 * @category Class
 * @description Indicates the status of the Amazon-partnered carrier shipment.
 * @package  SellingPartnerApi
 * @group
 */
class TransportStatus {
    public $value;

    /**
     * Possible values of this enum
     */
    const WORKING = 'WORKING';
    const ESTIMATING = 'ESTIMATING';
    const ESTIMATED = 'ESTIMATED';
    const ERROR_ON_ESTIMATING = 'ERROR_ON_ESTIMATING';
    const CONFIRMING = 'CONFIRMING';
    const CONFIRMED = 'CONFIRMED';
    const ERROR_ON_CONFIRMING = 'ERROR_ON_CONFIRMING';
    const VOIDING = 'VOIDING';
    const VOIDED = 'VOIDED';
    const ERROR_IN_VOIDING = 'ERROR_IN_VOIDING';
    const ERROR = 'ERROR';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues() {
        return [
            self::WORKING,
            self::ESTIMATING,
            self::ESTIMATED,
            self::ERROR_ON_ESTIMATING,
            self::CONFIRMING,
            self::CONFIRMED,
            self::ERROR_ON_CONFIRMING,
            self::VOIDING,
            self::VOIDED,
            self::ERROR_IN_VOIDING,
            self::ERROR,
        ];
    }

    public function __construct($value) {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues())) {
            throw new \InvalidArgumentException(sprintf("Invalid value for enum 'TransportStatus', must be one of '%s'", implode("', '", self::getAllowableEnumValues())));
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


