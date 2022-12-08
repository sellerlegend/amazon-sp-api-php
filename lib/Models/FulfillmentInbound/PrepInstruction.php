<?php
/**
 * PrepInstruction.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * OpenAPI spec version: v0
 */

namespace SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound;

/**
 * PrepInstruction Class Doc Comment.
 *
 * @description Preparation instructions for shipping an item to Amazon&#x27;s fulfillment network. For more information about preparing items for shipment to Amazon&#x27;s fulfillment network, see the Seller Central Help for your marketplace.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class PrepInstruction {

    public $value;

    /**
     * Possible values of this enum.
     */
    const NO_PREP = 'NoPrep';
    const POLYBAGGING = 'Polybagging';
    const BUBBLE_WRAPPING = 'BubbleWrapping';
    const TAPING = 'Taping';
    const BLACK_SHRINK_WRAPPING = 'BlackShrinkWrapping';
    const LABELING = 'Labeling';
    const HANG_GARMENT = 'HangGarment';
    const SET_CREATION = 'SetCreation';
    const BOXING = 'Boxing';
    const SUFFOCATION_STICKERING = 'SuffocationStickering';
    const SET_STICKERING = 'SetStickering';
    const REMOVE_FROM_HANGER = 'RemoveFromHanger';
    const CAP_SEALING = 'CapSealing';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues() {
        return [
            self::NO_PREP,
            self::POLYBAGGING,
            self::BUBBLE_WRAPPING,
            self::TAPING,
            self::BLACK_SHRINK_WRAPPING,
            self::LABELING,
            self::HANG_GARMENT,
            self::SET_CREATION,
            self::BOXING,
            self::SUFFOCATION_STICKERING,
            self::SET_STICKERING,
            self::REMOVE_FROM_HANGER,
            self::CAP_SEALING,
        ];
    }

    public function __construct($value) {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues())) {
            throw new \InvalidArgumentException(sprintf("Invalid value for enum 'PrepInstruction', must be one of '%s'", implode("', '", self::getAllowableEnumValues())));
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
