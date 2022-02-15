<?php

$namesArray = array();
$errors = array();

if(isset($_GET["names"])){
  if(!empty($_GET["names"])){
    $names = $_GET["names"];
    $namesArray = explode(",",trim($names,",")); 
    // echo $names;
    // print_r($namesArray);
    // echo count($namesArray);
    $hasError = validate($namesArray);
    if(!$hasError){
      echo "move forward<br>";
    }

  }
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

<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <form method="GET">
        <div class="form-group">
          <h2>Add participants</h2>
          <input type="text" class="form-control" placeholder="Name of paricipants" name="names">
          <small id="namesHelp" class="form-text text-muted">Add the names separated by commas</small>
        </div>
        <button type="submit" class="btn btn-primary">Add participants</button>
      </form>
      <?php 
        foreach($errors as $error){
      ?>
        <div class="alert alert-danger">
          <?php echo $error; ?>
        </div>
      <?php 
        }
        //end foreach
      ?>
    </div>
  </body>
</html>