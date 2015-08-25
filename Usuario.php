<?php

/**
 * Created by PhpStorm.
 * User: xhendor
 * Date: 8/19/15
 * Time: 17:19
 */
class Usuario
{
//Variables
private $USER_NAME;
    private $PASSWORD;

//Constructor
public function __construct(){


    $this->PASSWORD="NO_CAPTURADO";
    $this->USER_NAME="NO_CAPTURADO";


}

public function getUSER_NAME(){

    return $this->USER_NAME;
}

    public function setUSER_NAME($newVal){

        return $this->USER_NAME=$newVal;
    }


    public function getPASSWORD(){

        return $this->PASSWORD;
    }


    public function setPASSWORD($newVal){

        return $this->PASSWORD=$newVal;
    }



}