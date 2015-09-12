<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 11:03 PM
 */

namespace AdapterPattern;


class WhiteRose implements TheOldRosesInterface
{

    function sell()
    {
        echo "Sell white rose";
    }

    function showImage()
    {
        echo "Show image white rose";
    }

    function getPriceFromDatabase()
    {
        echo 40;
    }
}