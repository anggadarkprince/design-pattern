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
    private $name;
    private $paymentMethod;

    function __construct($name){
        $this->name = $name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    function setPaymentMethod($method){
        $this->paymentMethod = $method;
    }

    function getPaymentMethod(){
        return $this->paymentMethod;
    }

}