<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 11:31 PM
 */

namespace BridgePattern;


class Visa implements PaymentSource
{
    public function approve(){
        $approve = rand(0,1);
        echo "approve visa $approve<br>";
        return $approve;
    }

    public function send(){
        echo "send visa<br>";
    }

}