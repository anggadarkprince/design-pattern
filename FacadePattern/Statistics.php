<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 7:45 PM
 */

namespace FacadePattern;


class Statistics
{
    private $clientData;
    private $facade;

    public function __construct(ClientFacade $facade){
        $this->clientData = new ClientData();
        $this->facade = $facade;
    }

    function loadAllClientStats($clientId){
        $allClientDataArray = $this->facade->getAllClientData($clientId);
        $this->clientData->id = $allClientDataArray[0];
        $this->clientData->address = $allClientDataArray[1];
        $this->clientData->mostPayedFor = $allClientDataArray[2];
        $this->clientData->userHistory = $allClientDataArray[3];
        return $this->clientData;
    }

}