<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 4:09 PM
 */

namespace NullPattern;


use FactoryPattern\Product;

class NullProduct implements Product
{

    public function __construct(){
        echo " [swap with null object]";
    }

    public function getName()
    {
        return "";
    }

    public function getPrice()
    {
        return 0;
    }

    public function getDescription()
    {
        return "";
    }
}