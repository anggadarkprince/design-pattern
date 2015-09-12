<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 9:02 PM
 */

namespace ObserverPattern;


class Notifier implements ProductObserver
{
    private  $product;

    function __construct(ProductSubject $subject){
        $this->product = $subject;
    }

    function update()
    {
        $newPrice = $this->product->getPrice();
        echo "new price has been set to ".$newPrice;
    }
}