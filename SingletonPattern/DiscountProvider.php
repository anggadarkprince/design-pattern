<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 10:26 PM
 */

namespace SingletonPattern;


class DiscountProvider
{
    private static $instance;

    private function __construct(){ }

    public static function getInstance(){
        if(self::$instance == null){
            self::$instance = new DiscountProvider();
        }
        return self::$instance;
    }

    public function getDiscountFor($productId){
        // as if search product by id and get the discount
        return $productId * rand(5,10);
    }

}