<?php

/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 3:12 PM
 */

namespace GatewayPattern;

class InMemoryCart implements CartGateway
{
    private $listOfCarts = array();

    public function persist(ShoppingCart $cart){
        $this->listOfCarts[] = $cart;
    }

    public function retrieve($id){
        return $this->listOfCarts[$id];
    }

    public function getIdOfRecordedCart(){
        return end($this->listOfCarts);
    }
}