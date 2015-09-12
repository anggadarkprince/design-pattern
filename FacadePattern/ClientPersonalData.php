<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 7:47 PM
 */

namespace FacadePattern;


class ClientPersonalData
{
    private $id;
    private $address;
    private $country;
    private $postalCode;

    public function __construct($id){
        $this->searchData($id);
    }

    public function searchData($id){
        // as if search in database
        if($id == 1){
            $this->setId(1);
            $this->setAddress("Java Street 23");
            $this->setCountry("Indoensia");
            $this->setPostalCode(6112);
        }
        else{
            $this->setId(0);
            $this->setAddress("-");
            $this->setCountry("-");
            $this->setPostalCode(0);
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function getPostalCode()
    {
        return $this->postalCode;
    }

    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

}