<?php

namespace SellerLegend\AmazonSellingPartnerAPI\Models\Orders;

use \SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;
use \SellerLegend\AmazonSellingPartnerAPI\Models\ModelInterface;

/**
 * VerificationStatus Class Doc Comment
 *
 * @category Class
 * @description The verification status of the order.
 * @package  SellerLegend\AmazonSellingPartnerAPI
 * @group
 */
class VerificationStatus {

    public $value;

    /**
     * Possible values of this enum
     */
    const PENDING = 'Pending';
    const APPROVED = 'Approved';
    const REJECTED = 'Rejected';
    const EXPIRED = 'Expired';
    const CANCELLED = 'Cancelled';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues() {
        return [
            self::PENDING,
            self::APPROVED,
            self::REJECTED,
            self::EXPIRED,
            self::CANCELLED,
        ];
    }

    public function __construct($value) {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues())) {
            throw new \InvalidArgumentException(sprintf("Invalid value for enum 'VerificationStatus', must be one of '%s'", implode("', '", self::getAllowableEnumValues())));
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


