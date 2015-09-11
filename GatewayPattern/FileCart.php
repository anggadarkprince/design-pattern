<?php

/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 3:11 PM
 */

namespace GatewayPattern;

class FileCart implements CartGateway
{
    private $field;

    public function __construct(){
        $this->field = uniqid();
    }

    public function persist(ShoppingCart $cart){
        file_put_contents($this->field, serialize($cart));
    }

    public function retrieve($id){
        return unserialize(file_get_contents($id));
    }

    public function getIdOfRecordedCart(){
        return $this->field;
    }

}