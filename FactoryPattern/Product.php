<?php

/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 11:05 AM
 */

namespace FactoryPattern;

interface Product
{
    function getName();
    function getPrice();
    function getDescription();
}