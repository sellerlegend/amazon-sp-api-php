<?php
/**
 * CustomerType
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellerLegend\AmazonSellingPartnerAPI
 */

namespace SellerLegend\AmazonSellingPartnerAPI\Models\ProductPricing;

/**
 * CustomerType Class Doc Comment
 *
 * @category Class
 * @description Indicates whether to request Consumer or Business offers. Default is Consumer.
 * @package  SellerLegend\AmazonSellingPartnerAPI
 * @group
 */
class CustomerType {
    public $value;

    /**
     * Possible values of this enum
     */
    const CONSUMER = 'Consumer';
    const BUSINESS = 'Business';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues() {
        return [
            self::CONSUMER,
            self::BUSINESS,
        ];
    }

    public function __construct($value) {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues())) {
            throw new \InvalidArgumentException(sprintf("Invalid value for enum 'CustomerType', must be one of '%s'", implode("', '", self::getAllowableEnumValues())));
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


