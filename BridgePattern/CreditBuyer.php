<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 11:28 PM
 */

namespace BridgePattern;


class CreditBuyer
{
    function payNow(CreditPayment $payment){
        if($payment->approve()){
            $payment->send();
        }
    }

}