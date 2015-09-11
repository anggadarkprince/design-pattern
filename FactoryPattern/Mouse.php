<?php

/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 11:05 AM
 */

namespace FactoryPattern;

class Mouse implements Product
{
    public function getName(){
        return "Mouse";
    }

    public function getDescription(){
        return "Mouse is a input device for pointing something";
    }

    public function getPrice(){
        return 30;
    }

}