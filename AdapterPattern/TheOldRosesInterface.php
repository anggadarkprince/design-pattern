<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 11:04 PM
 */

namespace AdapterPattern;


interface TheOldRosesInterface
{
    function sell();
    function showImage();
    function getPriceFromDatabase();
}