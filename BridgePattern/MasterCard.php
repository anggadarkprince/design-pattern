<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 11:31 PM
 */

namespace BridgePattern;


class MasterCard implements PaymentSource
{
    function approve(){
        $approve = rand(0,1);
        echo "approve mastercard $approve<br>";
        return $approve;
    }

    function send(){
        echo "send mastercard<br>";
    }
}