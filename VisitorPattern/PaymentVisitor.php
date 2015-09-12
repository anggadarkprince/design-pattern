<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/12/2015
 * Time: 12:20 AM
 */

namespace VisitorPattern;


interface PaymentVisitor
{
    public function visit(PaymentMethod $payment);
    public function getDescription();
}