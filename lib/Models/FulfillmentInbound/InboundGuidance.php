<?php
/**
 * InboundGuidance
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
 * InboundGuidance Class Doc Comment
 *
 * @category Class
 * @description Specific inbound guidance for an item.
 * @package  SellingPartnerApi
 * @group
 */
class InboundGuidance {
    public $value;

    /**
     * Possible values of this enum
     */
    const INBOUND_NOT_RECOMMENDED = 'InboundNotRecommended';
    const INBOUND_OK = 'InboundOK';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues() {
        return [
            self::INBOUND_NOT_RECOMMENDED,
            self::INBOUND_OK,
        ];
    }

    public function __construct($value) {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues())) {
            throw new \InvalidArgumentException(sprintf("Invalid value for enum 'InboundGuidance', must be one of '%s'", implode("', '", self::getAllowableEnumValues())));
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


