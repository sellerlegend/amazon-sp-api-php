<?php
/**
 * ErrorReason
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
 * ErrorReason Class Doc Comment
 *
 * @category Class
 * @description The reason that the ASIN is invalid.
 * @package  SellingPartnerApi
 * @group
 */
class ErrorReason {
    public $value;

    /**
     * Possible values of this enum
     */
    const DOES_NOT_EXIST = 'DoesNotExist';
    const INVALID_ASIN = 'InvalidASIN';
    const INVALID_SKU = 'InvalidSKU';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues() {
        return [
            self::DOES_NOT_EXIST,
            self::INVALID_ASIN,
            self::INVALID_SKU,
        ];
    }

    public function __construct($value) {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues())) {
            throw new \InvalidArgumentException(sprintf("Invalid value for enum 'ErrorReason', must be one of '%s'", implode("', '", self::getAllowableEnumValues())));
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


