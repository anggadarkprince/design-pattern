<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 11:33 PM
 */

namespace BridgePattern;


class DirectPaymentMethod extends PaymentMethod
{

    public function send()
    {
        parent::sendPayment();
    }

    public function approve()
    {
        return true;
    }
}