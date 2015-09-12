<?php
/**
 * Created by PhpStorm.
 * User: Angga Ari Wijaya
 * Date: 9/11/2015
 * Time: 5:09 PM
 */

namespace ActiveObjectPattern;


class MultiFileUploader
{
    public $uploader = array();

    public function addUploader(UploaderCommand $uploader){
        $this->uploader[] = $uploader;
    }

    public function run(){
        while(!empty($this->uploader)) {
            $uploader = array_shift($this->uploader);
            $uploader->execute();
        }
    }

}