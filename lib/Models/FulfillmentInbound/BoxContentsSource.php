<?php
/**
 * BoxContentsSource
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
 * BoxContentsSource Class Doc Comment
 *
 * @category Class
 * @description Where the seller provided box contents information for a shipment.
 * @package  SellingPartnerApi
 * @group
 */
class BoxContentsSource {
    public $value;

    /**
     * Possible values of this enum
     */
    const NONE = 'NONE';
    const FEED = 'FEED';
    const _2_D_BARCODE = '2D_BARCODE';
    const INTERACTIVE = 'INTERACTIVE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues() {
        return [
            self::NONE,
            self::FEED,
            self::_2_D_BARCODE,
            self::INTERACTIVE,
        ];
    }

    public function __construct($value) {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues())) {
            throw new \InvalidArgumentException(sprintf("Invalid value for enum 'BoxContentsSource', must be one of '%s'", implode("', '", self::getAllowableEnumValues())));
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


