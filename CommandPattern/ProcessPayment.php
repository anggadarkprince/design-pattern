<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 4:48 PM
 */

namespace CommandPattern;


class ProcessPayment
{
    function processUserPayment(User $user){
        $paymentMethod = $user->getPaymentMethod();
        $this->executePayment($paymentMethod);
    }

    private function executePayment(PaymentMethod $paymentMethod){
        try{
            $paymentMethod->execute();
        }
        catch(\Exception $e){
            $message = "Paying with ".$paymentMethod." has failed with error ".$e->getMessage();
            throw new PaymentProcessingException($message);
        }
    }
}