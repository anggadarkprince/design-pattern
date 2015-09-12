<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/12/2015
 * Time: 12:23 AM
 */

namespace VisitorPattern;


class SimplePaymentDetails implements PaymentVisitor
{
    private $description;

    public function visit(PaymentMethod $payment){
        $this->description = $payment->getDescription();
    }

    public function getDescription()
    {
        return $this->description;
    }
}