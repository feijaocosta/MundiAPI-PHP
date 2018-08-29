<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Models;

use JsonSerializable;

/**
 *Checkout credit card payment request
 */
class CreateCheckoutDebitCardPaymentRequest implements JsonSerializable
{
    /**
     * Creates payment authentication
     * @required
     * @var \MundiAPILib\Models\CreatePaymentAuthenticationRequest $authentication public property
     */
    public $authentication;

    /**
     * Card invoice text descriptor
     * @maps statement_descriptor
     * @var string|null $statementDescriptor public property
     */
    public $statementDescriptor;

    /**
     * Constructor to set initial or default values of member properties
     * @param CreatePaymentAuthenticationRequest $authentication      Initialization value for $this->authentication
     * @param string                             $statementDescriptor Initialization value for $this-
     *                                                                  >statementDescriptor
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->authentication      = func_get_arg(0);
            $this->statementDescriptor = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['authentication']       = $this->authentication;
        $json['statement_descriptor'] = $this->statementDescriptor;

        return $json;
    }
}
