<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 11:26 PM
 */

namespace BridgePattern;


class DirectBuyer
{
    public function payNow(DirectPayment $payment){
        $payment->send();
    }
}