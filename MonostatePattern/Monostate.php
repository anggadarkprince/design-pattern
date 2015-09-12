<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 10:37 PM
 */

namespace MonostatePattern;


class Monostate
{
    private static $value;

    public function setValue($value){
        self::$value = $value;
    }

    public function getValue(){
        return self::$value;
    }

}