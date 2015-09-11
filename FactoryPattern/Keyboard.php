<?php

/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 11:05 AM
 */

namespace FactoryPattern;

class Keyboard implements Product
{
    public function getName(){
        return "Keyboard";
    }
    
    public function getDescription(){
        return "Keyboard is a input device for type something";
    }

    public function getPrice(){
        return 50;
    }
}