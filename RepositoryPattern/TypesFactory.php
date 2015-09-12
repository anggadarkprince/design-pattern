<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 3:51 PM
 */

namespace RepositoryPattern;


class TypesFactory
{
    public function makeFrom($typeData = array()){
        if(empty($typeData)){
            return null;
        }
        return new ProductType(
            $typeData['name'],
            $typeData['group'],
            $typeData['code']
        );
    }
}