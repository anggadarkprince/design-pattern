<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 9:46 PM
 */

namespace MediatorPattern;


class UserDetails extends Observable
{
    private $address;

    public function changeAddress($newAddress){
        $this->address = $newAddress;
        $this->notify($newAddress);
    }
}