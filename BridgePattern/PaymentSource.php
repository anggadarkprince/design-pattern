<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 11:30 PM
 */

namespace BridgePattern;


interface PaymentSource
{
    function approve();
    function send();
}