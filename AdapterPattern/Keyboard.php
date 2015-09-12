<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 11:14 PM
 */

namespace AdapterPattern;


class Keyboard implements ProductInterface
{

    public function getDescription(){
        return "Keyboard description";
    }

    public function getPicture(){
        return "Keyboard picture";
    }

    public function getPrice(){
        return 10;
    }

    public function sell(){
        return "Sell keyboard";
    }
}