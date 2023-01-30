<?php
/**
 * CurrencyCode
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
 * CurrencyCode Class Doc Comment
 *
 * @category Class
 * @description The currency code.
 * @package  SellingPartnerApi
 * @group
 */
class CurrencyCode {
    public $value;

    /**
     * Possible values of this enum
     */
    const CAD = 'CAD';
    const USD = 'USD';
    const GBP = 'GBP';
    const EUR = 'EUR';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues() {
        return [
            self::CAD,
            self::USD,
            self::GBP,
            self::EUR,
        ];
    }

    public function __construct($value) {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues())) {
            throw new \InvalidArgumentException(sprintf("Invalid value for enum 'CurrencyCode', must be one of '%s'", implode("', '", self::getAllowableEnumValues())));
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


