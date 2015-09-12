<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 4:54 PM
 */

namespace CommandPattern;


class PaymentProcessingException extends \Exception
{
    public function __construct($exception){
        echo $exception;
    }

}