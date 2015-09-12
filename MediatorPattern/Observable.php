<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 9:45 PM
 */

namespace MediatorPattern;


abstract class Observable
{
    private $observers = array();

    public function register($observer){
        $this->observers[] = $observer;
    }

    protected function notify($hint){
        foreach($this->observers as $observer):
            $observer->update($hint);
        endforeach;
    }

}