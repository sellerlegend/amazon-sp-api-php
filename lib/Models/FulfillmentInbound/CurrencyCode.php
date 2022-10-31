<?php
/**
 * CurrencyCode.
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
 * CurrencyCode Class Doc Comment.
 *
 * @description The currency code.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class CurrencyCode {

    public $value;

    /**
     * Possible values of this enum.
     */
    const CAD = 'CAD';
    const USD = 'USD';
    const GBP = 'GBP';
    const EUR = 'EUR';

    /**
     * Gets allowable values of the enum.
     *
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
