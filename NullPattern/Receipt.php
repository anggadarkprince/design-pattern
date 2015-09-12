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

    public function addProductById($id){
        echo "Add product id ".$id;
        $provider = new ProductProvider();
        $product = $provider->findProduct($id);
        $this->addTotal($product);
    }

    private function addTotal(Product $product){
        if(!is_null($product)) {
            $this->total += $product->getPrice();
            echo  " price ".$product->getPrice()."<br>";
        }
    }

    public function getTotalPrice(){
        return $this->total;
    }

}