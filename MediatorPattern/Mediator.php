<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 9:39 PM
 */

namespace MediatorPattern;


class Mediator
{
    private $observerClass;
    private $affectedClass;

    public function __construct(Observable $observerClass, UserAddress $affectedClass){
        $this->observerClass = $observerClass;
        $this->affectedClass = $affectedClass;
        $observerClass->register($this);
    }

    public function update($address){
        $this->affectedClass->setAddress($address);
        echo "update address to ".$address."<br>";
    }

}