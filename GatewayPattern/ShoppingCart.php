<?php

/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 3:11 PM
 */

namespace GatewayPattern;

class ShoppingCart
{
    private $gateway;
    private $shoppingCartIds = array();

    public function __construct(CartGateway $gateway, $ids = array()){
        $this->gateway = $gateway;
        $this->shoppingCartIds = $ids;
    }

    function listAllCarts(){
        $shoppingCarts = array();

        foreach($this->shoppingCartIds as $id):
            $shoppingCarts[] = $this->gateway->retrieve($id);
        endforeach;

        return $shoppingCarts;
    }

}