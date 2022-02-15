<?php

$namesArray = array();
$errors = array();
$page = 1;
$chosenOne = "";

if(isset($_GET["names"])){
  if(!empty($_GET["names"])){
    $names = $_GET["names"];
    $namesArray = removeWhite(explode(",",trim($names,","))); 
    // echo $names;
    // print_r($namesArray);
    // echo count($namesArray);
    $hasError = validate($namesArray);
    if(!$hasError){
      $page = 2;
      // echo "move forward<br>";
      if(isset($_GET["do_math"])){
        $page = 3;
        $chosenOne = $namesArray[array_rand($namesArray)];
        echo "page 3";
      }
    }

  }else{
    array_push($errors, "Sorry you need to add at least one name.");
  }
}

function removeWhite($names){
  $array=array();
  foreach($names as $name){
    array_push($array,trim($name," "));
  }
  return $array;
}


function validate($names){
  global $errors;
  $hasError = false;
  if(count($names)<=1){
    array_push($errors, "Sorry you need at least two names.");
    $hasError = true;
  }
  foreach($names as $name){
    if(strlen($name) < 3){
      array_push($errors,"Sorry name must have at least 3 character.");
      $hasError = true;
    }
  }

  return $hasError;
}

?>