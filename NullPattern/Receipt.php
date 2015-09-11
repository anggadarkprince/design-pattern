<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 4:09 PM
 */

namespace NullPattern;


use FactoryPattern\Product;

class Receipt
{
    private $total;

    function  addProductById($id){
        $provider = new ProductProvider();
        $product = $provider->findProduct($id);
        $this->addTotal($product);
    }

    function addTotal(Product $product){
        if(!is_null($product)) {
            $this->total += $product->getPrice();
        }
    }

    function getTotalPrice(){
        return $this->total;
    }

}