<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 11:28 PM
 */

namespace BridgePattern;


abstract class PaymentMethod implements DirectPayment, CreditPayment
{
    abstract function approve();
    abstract function send();

    private $paymentSource;

    function setPaymentSource(PaymentSource $paymentSource){
        $this->paymentSource = $paymentSource;
    }

    protected function sendPayment(){
        $this->paymentSource->send();
    }

    protected function approvePayment(){
        $this->paymentSource->approve();
    }

}