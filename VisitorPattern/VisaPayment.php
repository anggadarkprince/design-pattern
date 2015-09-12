<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/12/2015
 * Time: 12:21 AM
 */

namespace VisitorPattern;


class VisaPayment implements PaymentMethod
{

    public function getDescription(){
        return "Visa Description";
    }

    public function accept(PaymentVisitor $paymentVisitor){
        $paymentVisitor->visit($this);
    }
}