<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/12/2015
 * Time: 12:11 AM
 */

namespace CompositePattern;


class ServiceOrder implements Order
{
    public function place()
    {
        echo "Tell HR for service<br>";
    }
}