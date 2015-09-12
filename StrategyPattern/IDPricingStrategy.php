<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 6:58 PM
 */

namespace StrategyPattern;


class IDPricingStrategy implements PriceCalculator
{

    public function applyDiscounts($price)
    {
        return $price * 5 / 100;
    }

    public function addTaxes($price)
    {
        return $price * 10 / 100;
    }

    public function convertCurrencies($price)
    {
        return $price / 12000;
    }

}