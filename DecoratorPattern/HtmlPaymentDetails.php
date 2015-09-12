<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/12/2015
 * Time: 1:05 AM
 */

namespace DecoratorPattern;


class HtmlPaymentDetails extends PaymentDecorator
{
    public function getHtmlDescription(){
        return "<h4>".$this->itsPaymentMethod->getDescription()."</h4>";
    }

}