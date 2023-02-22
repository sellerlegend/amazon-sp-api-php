<?php

namespace SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees;

use \SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;
use \SellerLegend\AmazonSellingPartnerAPI\Models\ModelInterface;

/**
 * OptionalFulfillmentProgram Class Doc Comment
 *
 * @category Class
 * @description An optional enrollment program to return the estimated fees when the offer is fulfilled by Amazon (IsAmazonFulfilled is set to true).
 * @package  SellerLegend\AmazonSellingPartnerAPI
 * @group
 */
class OptionalFulfillmentProgram {
    public $value;

    /**
     * Possible values of this enum
     */
    const CORE = 'FBA_CORE';
    const SNL = 'FBA_SNL';
    const EFN = 'FBA_EFN';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues() {
        return [
            self::CORE,
            self::SNL,
            self::EFN,
        ];
    }

    public function __construct($value) {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues())) {
            throw new \InvalidArgumentException(sprintf("Invalid value for enum 'OptionalFulfillmentProgram', must be one of '%s'", implode("', '", self::getAllowableEnumValues())));
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


