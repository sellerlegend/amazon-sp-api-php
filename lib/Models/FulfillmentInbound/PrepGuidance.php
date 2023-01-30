<?php
/**
 * PrepGuidance
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
 * PrepGuidance Class Doc Comment
 *
 * @category Class
 * @description Item preparation instructions.
 * @package  SellingPartnerApi
 * @group
 */
class PrepGuidance {
    public $value;

    /**
     * Possible values of this enum
     */
    const CONSULT_HELP_DOCUMENTS = 'ConsultHelpDocuments';
    const NO_ADDITIONAL_PREP_REQUIRED = 'NoAdditionalPrepRequired';
    const SEE_PREP_INSTRUCTIONS_LIST = 'SeePrepInstructionsList';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues() {
        return [
            self::CONSULT_HELP_DOCUMENTS,
            self::NO_ADDITIONAL_PREP_REQUIRED,
            self::SEE_PREP_INSTRUCTIONS_LIST,
        ];
    }

    public function __construct($value) {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues())) {
            throw new \InvalidArgumentException(sprintf("Invalid value for enum 'PrepGuidance', must be one of '%s'", implode("', '", self::getAllowableEnumValues())));
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


