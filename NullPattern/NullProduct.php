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

    function getName()
    {
        return "";
    }

    function getPrice()
    {
        return 0;
    }

    function getDescription()
    {
        return "";
    }
}