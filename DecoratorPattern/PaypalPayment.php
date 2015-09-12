<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/12/2015
 * Time: 1:04 AM
 */

namespace DecoratorPattern;


class PaypalPayment implements PaymentMethod
{

    public function getDescription()
    {
        return "Paypal description";
    }
}