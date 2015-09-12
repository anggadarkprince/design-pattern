<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 11:29 PM
 */

namespace BridgePattern;


interface CreditPayment
{
    function approve();
    function send();
}