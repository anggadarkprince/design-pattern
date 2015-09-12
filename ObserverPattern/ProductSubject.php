<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 9:03 PM
 */

namespace ObserverPattern;


abstract class ProductSubject
{
    private $observer = array();

    public function register(ProductObserver $observer){
        $this->observer[] = $observer;
    }

    protected  function notify(){
        foreach($this->observer as $observer):
            $observer->update();
        endforeach;
    }

}