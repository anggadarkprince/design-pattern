<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/12/2015
 * Time: 12:22 AM
 */

namespace VisitorPattern;


class HtmlPaymentDetails implements PaymentVisitor
{
    private $description;

    public function visit(PaymentMethod $payment){
        $this->description = "<h4>".$payment->getDescription()."</h4>";
    }

    public function getDescription()
    {
        return $this->description;
    }
}