<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 6:56 PM
 */

namespace StrategyPattern;


interface PriceCalculator
{
    function applyDiscounts($price);
    function addTaxes($price);
    function convertCurrencies($price);
}