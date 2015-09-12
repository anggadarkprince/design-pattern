<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/12/2015
 * Time: 12:46 AM
 */

namespace StatePattern;


interface DeliveryState
{
    public function goNext(Delivery $delivery);
    public function getLocation();
}