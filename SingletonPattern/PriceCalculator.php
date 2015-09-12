<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 10:22 PM
 */

namespace SingletonPattern;


class PriceCalculator
{
    function compute(Product $product){
        $discountProvider = DiscountProvider::getInstance();
        $discountAsPercent = $discountProvider->getDiscountFor($product->getId());
        $price = $product->getPrice();
        $discountAsValue = $price * $discountAsPercent / 100;
        return $price - $discountAsValue;
    }
}