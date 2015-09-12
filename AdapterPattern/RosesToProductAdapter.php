<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 11:04 PM
 */

namespace AdapterPattern;


class RosesToProductAdapter implements ProductInterface
{
    private $rose;

    public function __construct(TheOldRosesInterface $rose){
        $this->rose = $rose;
    }

    function getDescription()
    {
        return "Nice Flower";
    }

    function getPicture(){
        return $this->rose->showImage();
    }

    function getPrice()
    {
        return $this->rose->getPriceFromDatabase();
    }

    function sell()
    {
        return $this->rose->sell();
    }
}