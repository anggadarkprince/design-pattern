<?php

/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 3:36 PM
 */

namespace ProxyPattern;

class CartProxy implements Cart
{
    private $shoppingCart;

    public function addProduct($product){
        if(!array_key_exists($product, $this->getProducts())){
            $this->shoppingCart->add($product);
        }
    }

    public function getProducts(){
        if(is_null($this->shoppingCart)){
            $this->shoppingCart = new ShoppingCart();
        }
        return $this->shoppingCart->getProducts();
    }
}