<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 6:50 PM
 */

namespace StrategyPattern;


class GrandPrice
{
    private $grandPrice;

    public function calculate($price, PriceCalculator $pricingStrategy){
        $this->grandPrice = $price;
        $this->grandPrice += $pricingStrategy->addTaxes($this->grandPrice);
        $this->grandPrice -= $pricingStrategy->applyDiscounts($this->grandPrice);
        $this->grandPrice = $pricingStrategy->convertCurrencies($this->grandPrice);
        return $this->grandPrice;
    }

}