<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/12/2015
 * Time: 12:47 AM
 */

namespace StatePattern;


class Delivery
{
    private $currentState;

    public function __construct(DeliveryState $state){
        $this->setState($state);
    }

    public function getCurrentLocation(){
        return $this->currentState->getLocation();
    }

    public function goNext(){
        $this->currentState->goNext($this);
    }

    public function setState(DeliveryState $state){
        $this->currentState = $state;
    }

}