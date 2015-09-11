<?php

/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 11:02 AM
 */

namespace FactoryPattern;

class ShoppingCart
{
    private $productInTheCart = array();
    private $productFactory;

    public function __construct(){
        $this->productFactory = new ProductFactory();
    }

    public function add($productId){
        $product = $this->productFactory->make($productId);
        if(is_null($product)){
            return false;
        }
        $this->productInTheCart[] = $product;
        return true;
    }

    public function printInvoice(){
        $totalPayment = 0;
        echo "---------INVOICE---------<br>";
        foreach($this->productInTheCart as $product):

            echo "<strong>".$product->getName()."</strong> (IDR ".$product->getPrice().")<br>";
            echo $product->getDescription()."<br>";

            $totalPayment += $product->getPrice();
        endforeach;
        echo "------------------------------<br>";
        echo "TOTAL: IDR ".$totalPayment."<br>";
    }

}
