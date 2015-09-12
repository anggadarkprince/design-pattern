<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/12/2015
 * Time: 12:10 AM
 */

namespace CompositePattern;


class ProductOrder implements Order
{
    function place()
    {
        echo "Place order to warehouse<br>";
    }
}