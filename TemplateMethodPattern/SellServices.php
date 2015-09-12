<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 6:14 PM
 */

namespace TemplateMethodPattern;


class SellServices extends  Sell
{
    private $humanResources;

    public function __construct(HumanResource $humanResources){
        $this->humanResources = $humanResources;
    }

    function markHumanResourcesAsOccupied($person){
        $this->humanResources->mark($person);
    }

}