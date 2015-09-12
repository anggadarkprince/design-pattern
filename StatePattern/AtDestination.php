<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/12/2015
 * Time: 12:48 AM
 */

namespace StatePattern;


class AtDestination implements DeliveryState
{

    public function goNext(Delivery $delivery)
    {
        $delivery->setState(new AtDestination());
    }

    public function getLocation()
    {
        echo "Final Destination";
    }
}