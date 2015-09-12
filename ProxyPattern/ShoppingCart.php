<?php

/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 3:36 PM
 */

namespace ProxyPattern;

class ShoppingCart implements Cart
{
    private $products = array();

    public function add($item){
        $this->products[] = $item;
    }

    public function getProducts(){
        return $this->products;
    }

}