<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 5:09 PM
 */

namespace ActiveObjectPattern;


class UploaderCommand
{
    private $size;
    private $chunk;
    private $uploaded;
    private $multiUploader;

    public function __construct($speed, $size, MultiFileUploader $multiUploader){
        $this->size = $size;
        $this->chunk = $size / $speed;
        $this->multiUploader = $multiUploader;
    }

    public function execute(){
        $this->uploaded += $this->chunk;
        echo $this->uploaded."/".$this->size."<br>";
        if($this->uploaded < $this->size){
            $this->multiUploader->addUploader($this);
        }
    }

}