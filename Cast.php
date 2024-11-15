<?php

class Cast{

    private $castArray;

    
    public function __construct($caArray){
    $this->castArray=$caArray;
  }

    function __SETcastArray($awardsList){
        $this->awardsArray =  $awardsList;
    }

    function addActor($award){
        array_push($this->awardsArray, $award);
    }

    function printCasting(){
        var_dump($this->castArray);
    }
}

$cast = array("actor1", "actor2", "actor3");

$miCast = new Cast($cast);


$miCast->printCasting();

?>