<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 11:33 PM
 */

namespace BridgePattern;


class CreditPaymentMethod extends PaymentMethod
{

    function send()
    {
        parent::sendPayment();
    }

    function approve()
    {
        parent::approvePayment();
    }
}