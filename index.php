<?
  include "functions.php";
?>
<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <?php 
        if($page == 1){
      ?>
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
        }
        // end if 
      ?>
      <?
        if($page == 2){
          include "page_2.php";
        }
        if($page == 3){
          include "page_3.php";
        }
      ?>
    </div>
  </body>
</html>