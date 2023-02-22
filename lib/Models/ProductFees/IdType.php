<?php

namespace SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees;

use \SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;
use \SellerLegend\AmazonSellingPartnerAPI\Models\ModelInterface;

/**
 * IdType Class Doc Comment
 *
 * @category Class
 * @description The type of product identifier used in a &#x60;FeesEstimateByIdRequest&#x60;.
 * @package  SellerLegend\AmazonSellingPartnerAPI
 * @group
 */
class IdType {
    public $value;

    /**
     * Possible values of this enum
     */
    const ASIN = 'ASIN';
    const SELLER_SKU = 'SellerSKU';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues() {
        return [
            self::ASIN,
            self::SELLER_SKU,
        ];
    }

    public function __construct($value) {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues())) {
            throw new \InvalidArgumentException(sprintf("Invalid value for enum 'IdType', must be one of '%s'", implode("', '", self::getAllowableEnumValues())));
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


