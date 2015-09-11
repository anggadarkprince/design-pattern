<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 3:54 PM
 */

namespace RepositoryPattern;


class ProductType
{
    private $category;
    private $name;
    private $code;

    public function __construct($category, $name, $code){
        $this->category = $category;
        $this->name = $name;
        $this->code = $code;
    }

    function __get($typeProperty){
        if(!isset($this->$typeProperty)){
            throw new \Exception('No such property');
        }
        return $this->$typeProperty;
    }
}