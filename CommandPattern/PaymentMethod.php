<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 4:47 PM
 */

namespace CommandPattern;


interface PaymentMethod
{
    public function execute();
    public function __toString();
}