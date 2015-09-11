<?php

/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 3:11 PM
 */

namespace GatewayPattern;

interface CartGateway
{
    function persist(ShoppingCart $cart);
    function retrieve($id);
    function getIdOfRecordedCart();
}