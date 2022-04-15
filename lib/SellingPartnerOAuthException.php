<?php

namespace SellerLegend\AmazonSellingPartnerAPI;

use Exception;
use Throwable;

class SellingPartnerOAuthException extends Exception {
    public function __construct($message = '', $code = 0, Throwable $previous = null) {
        if (!is_numeric($code)) {
            $message = '[' . $code . '] ' . $message;
            $code = 0;
        }

        parent::__construct($message, $code, $previous);
    }
}
