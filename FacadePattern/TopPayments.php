<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 7:46 PM
 */

namespace FacadePattern;


class TopPayments
{
    public function findMaxForClientWithId($userId){
        return md5($userId).uniqid();
    }
}