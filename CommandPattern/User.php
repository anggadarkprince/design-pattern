<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 4:48 PM
 */

namespace CommandPattern;


class User
{
    private $paymentMethod;

    function setPaymentMethod($method){
        $this->paymentMethod = $method;
    }

    function getPaymentMethod(){
        return $this->paymentMethod;
    }
}