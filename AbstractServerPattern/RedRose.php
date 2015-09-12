<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 10:46 PM
 */

namespace AbstractServerPattern;


class RedRose implements Roses
{
    private $sold = false;

    public function sell(){
        $this->sold = true;
    }

    public function isSold(){
        return $this->sold;
    }

}