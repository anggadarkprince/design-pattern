<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/12/2015
 * Time: 12:47 AM
 */

namespace StatePattern;


class Processing implements DeliveryState
{

    public function goNext(Delivery $delivery)
    {
        $delivery->setState(new OnRoute());
    }

    public function getLocation()
    {
        return "Warehouse";
    }
}