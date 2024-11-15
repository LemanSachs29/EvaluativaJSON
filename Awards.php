<?php

class Award{

    private $awardsArray;

    
    public function __construct($AwArray=("N/A")){
    $this->awardsArray=$AwArray;
  }

    function __SETAwardsArray($awardsList){
        $this->awardsArray =  $awardsList;
    }

    function addAward($award){
        array_push($this->awardsArray, $award);
    }

    function printAwards(){
        var_dump($this->awardsArray);
    }
}


$miAward = new Award();

$miAward->printAwards();

$array = array("premio1", "premio2", "premio3");

$miAward->__SETAwardsArray($array);

$miAward->printAwards();

$miAward->addAward("premio4");

$miAward->printAwards();


?>