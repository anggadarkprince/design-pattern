<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 9:20 PM
 */

namespace ObserverPattern;


class Monitor extends ProductSubject
{
    private $price;
    private $size;

    public function getSize(){
        return $this->size;
    }

    public function setSize($size){
        $this->size = $size;
    }

    public function setPrice($price){
        $this->price = $price;
        $this->notify();
    }

    public function getPrice(){
        return $this->price;
    }
}