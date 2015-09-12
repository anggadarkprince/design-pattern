<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 8:10 PM
 */

namespace FacadePattern;


class ClientFacade
{
    public function getAllClientData($clientId){
        return array(
            $clientId,
            $this->clientAddress($clientId),
            $this->getMostPayedFor($clientId),
            $this->getPaymentHistory($clientId)
        );
    }

    private function clientAddress($clientId){
        $clientShippingAddress = '';

        $clientPersonalData = new ClientPersonalData($clientId);
        $clientShippingAddress .= $clientPersonalData->getAddress();
        $clientShippingAddress .= ", ".$clientPersonalData->getCountry();
        $clientShippingAddress .= ", ".$clientPersonalData->getPostalCode();

        return $clientShippingAddress;
    }

    private function getMostPayedFor($clientId){
        $topPayment = new TopPayments();
        return $topPayment->findMaxForClientWithId($clientId);
    }

    private function getPaymentHistory($clientId){
        $paymentHistory = new PaymentHistory();
        return $paymentHistory->findPaymentForClient($clientId);

    }

}