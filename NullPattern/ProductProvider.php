<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 4:09 PM
 */

namespace NullPattern;


use FactoryPattern\Keyboard;

class ProductProvider
{
    public function findProduct($id){
        if($id == 0){
            return new Keyboard();
        }
        return new NullProduct();
    }

}