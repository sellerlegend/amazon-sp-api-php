<?php
/**
 * GuidanceReason
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
 * GuidanceReason Class Doc Comment
 *
 * @category Class
 * @description A reason for the current inbound guidance for an item.
 * @package  SellingPartnerApi
 * @group
 */
class GuidanceReason {
    public $value;

    /**
     * Possible values of this enum
     */
    const SLOW_MOVING_ASIN = 'SlowMovingASIN';
    const NO_APPLICABLE_GUIDANCE = 'NoApplicableGuidance';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues() {
        return [
            self::SLOW_MOVING_ASIN,
            self::NO_APPLICABLE_GUIDANCE,
        ];
    }

    public function __construct($value) {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues())) {
            throw new \InvalidArgumentException(sprintf("Invalid value for enum 'GuidanceReason', must be one of '%s'", implode("', '", self::getAllowableEnumValues())));
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


