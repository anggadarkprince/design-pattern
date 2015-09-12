<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 7:01 PM
 */

namespace StrategyPattern;


class MYPricingStrategy implements PriceCalculator
{

    public function applyDiscounts($price)
    {
        return $price * 2 / 100;
    }

    public function addTaxes($price)
    {
        return $price * 5 / 100;
    }

    public function convertCurrencies($price)
    {
        return $price / 5000;
    }
}