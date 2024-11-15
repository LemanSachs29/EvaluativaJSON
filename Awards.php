<?php

class Awards{

    private $awardsArray = ["N/A"];

    function __construct(){

    }
    function __construct($awardsArray){
        $this->awardsArray = $awardsArray;
    }

    function addAward($award){
        array_push($this->awardsArray, $award);
    }

    function printAwards(){
        var_dump($awardsArray);
    }
}

$premios = new Awards();

$premios->printAwards();

?>