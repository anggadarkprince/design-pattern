<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 6:14 PM
 */

namespace TemplateMethodPattern;


class SellProducts extends  Sell
{
    private $provider;

    public function __construct(Provider $provider){
        $this->provider = $provider;
    }

    function orderNewItem($item){
        $this->provider->orderNewItem($item);
    }
}