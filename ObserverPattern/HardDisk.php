<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 9:02 PM
 */

namespace ObserverPattern;


class HardDisk extends ProductSubject
{
    private $price;
    private $capacity;

    public function getCapacity(){
        return $this->capacity;
    }

    public function setCapacity($capacity){
        $this->capacity = $capacity;
    }

    public function setPrice($price){
        $this->price = $price;
        $this->notify();
    }

    public function getPrice(){
        return $this->price;
    }
}