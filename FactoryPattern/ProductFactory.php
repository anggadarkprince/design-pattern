<?php

/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 11:08 AM
 */

namespace FactoryPattern;

class ProductFactory
{
    public function make($productId){
        if($this->isKeyboard($productId)){
            return new Keyboard();
        }
        return new Mouse();
    }

    private function isKeyboard($productId){
        return substr($productId, 0, 1) == 'k';
    }

}