<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 6:24 PM
 */

namespace TemplateMethodPattern;


class Provider
{
    private $stockItems = array();

    public function orderNewItem($item){
        if(array_key_exists($item, $this->stockItems)){
            echo "Item Ordered<br>";
        }
        echo "Item unavailable<br>";
    }

}