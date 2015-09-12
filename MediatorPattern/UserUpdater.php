<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 9:46 PM
 */

namespace MediatorPattern;


class UserUpdater
{
    public function updateUserAddress($newAddress){
        $user = new UserDetails();
        $user->changeAddress($newAddress);
    }

}