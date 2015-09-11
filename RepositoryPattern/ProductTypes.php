<?php

/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 3:50 PM
 */

namespace RepositoryPattern;

class ProductTypes
{
    private $factory;
    private $gateway;

    public function __construct(TypesFactory $factory, TypesGateway $gateway){
        $this->factory = $factory;
        $this->gateway = $gateway;
    }

    public function findAll(){
        $allTypes = $this->gateway->retrieveAllTypes();
        return $this->makeAllForTypes($allTypes);
    }

    function findComputerHardware(){
        $allTypes = $this->gateway->retrieveAllTypes();
        $hardwareTypes = array_filter($allTypes, function ($item){
            return $item['group'] == 'ComputerHardware';
        });
        return $this->makeAllForTypes($hardwareTypes);
    }

    private function makeAllForTypes($allTypes){
        $types = array();
        foreach($allTypes as $typeData):
            $types[] = $this->factory->makeFrom($typeData);
        endforeach;
        return $types;
    }

}