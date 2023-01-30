<?php
/**
 * LabelPrepPreference
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
 * LabelPrepPreference Class Doc Comment
 *
 * @category Class
 * @description The preference for label preparation for an inbound shipment.
 * @package  SellingPartnerApi
 * @group
 */
class LabelPrepPreference {
    public $value;

    /**
     * Possible values of this enum
     */
    const SELLER_LABEL = 'SELLER_LABEL';
    const AMAZON_LABEL_ONLY = 'AMAZON_LABEL_ONLY';
    const AMAZON_LABEL_PREFERRED = 'AMAZON_LABEL_PREFERRED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues() {
        return [
            self::SELLER_LABEL,
            self::AMAZON_LABEL_ONLY,
            self::AMAZON_LABEL_PREFERRED,
        ];
    }

    public function __construct($value) {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues())) {
            throw new \InvalidArgumentException(sprintf("Invalid value for enum 'LabelPrepPreference', must be one of '%s'", implode("', '", self::getAllowableEnumValues())));
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


