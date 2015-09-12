<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 6:30 PM
 */

namespace TemplateMethodPattern;


class HumanResource
{
    private $position;

    public function mark($position){
        $this->position = $position;
        if($this->position == 'manager'){
            echo "Angga is ready to work<br>";
        }
        else if($this->position == 'marketing'){
            echo "Ari is ready to work<br>";
        }
        else if($this->position == 'sales'){
            echo "Wijaya is ready to work<br>";
        }
        else{
            echo "No one ready for this occupation<br>";
        }
    }
}