<?php
/**
 * UnitOfMeasurement
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
 * UnitOfMeasurement Class Doc Comment
 *
 * @category Class
 * @description Indicates the unit of measurement.
 * @package  SellingPartnerApi
 * @group
 */
class UnitOfMeasurement {
    public $value;

    /**
     * Possible values of this enum
     */
    const INCHES = 'inches';
    const IN = 'IN';
    const CENTIMETERS = 'centimeters';
    const CM = 'CM';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues() {
        return [
            self::INCHES,
            self::IN,
            self::CENTIMETERS,
            self::CM,
        ];
    }

    public function __construct($value) {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues())) {
            throw new \InvalidArgumentException(sprintf("Invalid value for enum 'UnitOfMeasurement', must be one of '%s'", implode("', '", self::getAllowableEnumValues())));
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


