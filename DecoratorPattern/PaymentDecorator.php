<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/12/2015
 * Time: 1:05 AM
 */

namespace DecoratorPattern;


abstract class PaymentDecorator implements PaymentMethod
{
    protected $itsPaymentMethod;

    public function __construct(PaymentMethod $paymentMethod){
        $this->itsPaymentMethod = $paymentMethod;
    }

    public function getDescription(){
        return $this->itsPaymentMethod->getDescription();
    }
}