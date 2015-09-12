<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 4:50 PM
 */

namespace CommandPattern;


class PayPalPayment implements PaymentMethod
{

    public function execute()
    {
        echo "pay with PayPal";
    }

    public function __toString(){
        return "PayPal";
    }
}