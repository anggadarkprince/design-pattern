<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 6:14 PM
 */

namespace TemplateMethodPattern;


abstract class Sell
{
    protected $price;
    protected $paymentProvider;

    function setPrice($price)
    {
        $this->price = $price;
    }

    function retrievePayment($provider)
    {
        $this->paymentProvider = $provider;
    }
}