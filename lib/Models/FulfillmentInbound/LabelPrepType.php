<?php
/**
 * LabelPrepType
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
 * LabelPrepType Class Doc Comment
 *
 * @category Class
 * @description The type of label preparation that is required for the inbound shipment.
 * @package  SellingPartnerApi
 * @group
 */
class LabelPrepType {
    public $value;

    /**
     * Possible values of this enum
     */
    const NO_LABEL = 'NO_LABEL';
    const SELLER_LABEL = 'SELLER_LABEL';
    const AMAZON_LABEL = 'AMAZON_LABEL';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues() {
        return [
            self::NO_LABEL,
            self::SELLER_LABEL,
            self::AMAZON_LABEL,
        ];
    }

    public function __construct($value) {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues())) {
            throw new \InvalidArgumentException(sprintf("Invalid value for enum 'LabelPrepType', must be one of '%s'", implode("', '", self::getAllowableEnumValues())));
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


