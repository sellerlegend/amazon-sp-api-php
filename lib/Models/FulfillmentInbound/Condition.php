<?php
/**
 * Condition
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
 * Condition Class Doc Comment
 *
 * @category Class
 * @description The condition of the item.
 * @package  SellingPartnerApi
 * @group
 */
class Condition {
    public $value;

    /**
     * Possible values of this enum
     */
    const NEW_ITEM = 'NewItem';
    const NEW_WITH_WARRANTY = 'NewWithWarranty';
    const NEW_OEM = 'NewOEM';
    const NEW_OPEN_BOX = 'NewOpenBox';
    const USED_LIKE_NEW = 'UsedLikeNew';
    const USED_VERY_GOOD = 'UsedVeryGood';
    const USED_GOOD = 'UsedGood';
    const USED_ACCEPTABLE = 'UsedAcceptable';
    const USED_POOR = 'UsedPoor';
    const USED_REFURBISHED = 'UsedRefurbished';
    const COLLECTIBLE_LIKE_NEW = 'CollectibleLikeNew';
    const COLLECTIBLE_VERY_GOOD = 'CollectibleVeryGood';
    const COLLECTIBLE_GOOD = 'CollectibleGood';
    const COLLECTIBLE_ACCEPTABLE = 'CollectibleAcceptable';
    const COLLECTIBLE_POOR = 'CollectiblePoor';
    const REFURBISHED_WITH_WARRANTY = 'RefurbishedWithWarranty';
    const REFURBISHED = 'Refurbished';
    const CLUB = 'Club';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues() {
        return [
            self::NEW_ITEM,
            self::NEW_WITH_WARRANTY,
            self::NEW_OEM,
            self::NEW_OPEN_BOX,
            self::USED_LIKE_NEW,
            self::USED_VERY_GOOD,
            self::USED_GOOD,
            self::USED_ACCEPTABLE,
            self::USED_POOR,
            self::USED_REFURBISHED,
            self::COLLECTIBLE_LIKE_NEW,
            self::COLLECTIBLE_VERY_GOOD,
            self::COLLECTIBLE_GOOD,
            self::COLLECTIBLE_ACCEPTABLE,
            self::COLLECTIBLE_POOR,
            self::REFURBISHED_WITH_WARRANTY,
            self::REFURBISHED,
            self::CLUB,
        ];
    }

    public function __construct($value) {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues())) {
            throw new \InvalidArgumentException(sprintf("Invalid value for enum 'Condition', must be one of '%s'", implode("', '", self::getAllowableEnumValues())));
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


