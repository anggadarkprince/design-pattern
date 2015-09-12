<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 9:46 PM
 */

namespace MediatorPattern;


class OrderDelivery implements UserAddress
{
    private $deliveryAddress;

    public function setAddress($newAddress){
        $this->deliveryAddress = $newAddress;
    }

}