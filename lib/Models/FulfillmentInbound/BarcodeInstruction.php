<?php
/**
 * BarcodeInstruction
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
 * BarcodeInstruction Class Doc Comment
 *
 * @category Class
 * @description Labeling requirements for the item. For more information about FBA labeling requirements, see the Seller Central Help for your marketplace.
 * @package  SellingPartnerApi
 * @group
 */
class BarcodeInstruction {
    public $value;

    /**
     * Possible values of this enum
     */
    const REQUIRES_FNSKU_LABEL = 'RequiresFNSKULabel';
    const CAN_USE_ORIGINAL_BARCODE = 'CanUseOriginalBarcode';
    const MUST_PROVIDE_SELLER_SKU = 'MustProvideSellerSKU';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues() {
        return [
            self::REQUIRES_FNSKU_LABEL,
            self::CAN_USE_ORIGINAL_BARCODE,
            self::MUST_PROVIDE_SELLER_SKU,
        ];
    }

    public function __construct($value) {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues())) {
            throw new \InvalidArgumentException(sprintf("Invalid value for enum 'BarcodeInstruction', must be one of '%s'", implode("', '", self::getAllowableEnumValues())));
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


