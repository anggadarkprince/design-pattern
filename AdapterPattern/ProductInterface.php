<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 11:03 PM
 */

namespace AdapterPattern;


interface ProductInterface
{
    function getPicture();
    function getDescription();
    function getPrice();
    function sell();
}