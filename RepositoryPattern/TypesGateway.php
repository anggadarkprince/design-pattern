<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 3:52 PM
 */

namespace RepositoryPattern;


class TypesGateway
{
    public function retrieveAllTypes(){
        return array(
            array(
                "name"=>"monitor",
                "code"=>"4356",
                "group"=>"ComputerHardware"
            ),array(
                "name"=>"mouse",
                "code"=>"5634",
                "group"=>"ComputerHardware"
            ),array(
                "name"=>"windows",
                "code"=>"3632",
                "group"=>"ComputerSoftware"
            ));
    }

}