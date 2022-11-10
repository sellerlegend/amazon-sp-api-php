<?php

namespace SellerLegend\AmazonSellingPartnerAPI\Models\Orders;

use \SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;
use \SellerLegend\AmazonSellingPartnerAPI\Models\ModelInterface;

/**
 * ElectronicInvoiceStatus Class Doc Comment
 *
 * @category Class
 * @description The status of the electronic invoice.
 * @package  SellerLegend\AmazonSellingPartnerAPI
 * @group
 */
class ElectronicInvoiceStatus {

    public $value;

    /**
     * Possible values of this enum
     */
    const NOT_REQUIRED = 'NotRequired';
    const NOT_FOUND = 'NotFound';
    const PROCESSING = 'Processing';
    const ERRORED = 'Errored';
    const ACCEPTED = 'Accepted';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues() {
        return [
            self::NOT_REQUIRED,
            self::NOT_FOUND,
            self::PROCESSING,
            self::ERRORED,
            self::ACCEPTED,
        ];
    }

    public function __construct($value) {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues())) {
            throw new \InvalidArgumentException(sprintf("Invalid value for enum 'ElectronicInvoiceStatus', must be one of '%s'", implode("', '", self::getAllowableEnumValues())));
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


