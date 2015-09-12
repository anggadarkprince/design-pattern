<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/12/2015
 * Time: 12:10 AM
 */

namespace CompositePattern;


class CompositeOrder implements Order
{
    private $orders = array();

    public function add(Order $order){
        $this->orders[] = $order;
    }

    public function place()
    {
        array_walk($this->orders, function($orders){
            $orders->place();
        });
    }
}