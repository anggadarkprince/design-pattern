<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 10:46 PM
 */

namespace AbstractServerPattern;


class ShopOwner
{
    private $rose;

    public function __construct(Roses $rose){
        $this->rose = $rose;
    }

    public function sell(){
        $this->rose->sell();
    }
}