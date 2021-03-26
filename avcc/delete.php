<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="login-style.css">
</head>
<body>
<?php

include 'db.php';
include 'function.php';

if(isset($_POST['delete'])){

delete();
}

 ?>

<!-- form page -->
<div class="login-page">
  <div class="form">
    <form class="login-form" action="delete.php" method="post">
      
      
      <select value="id" name="id">
      <?php
        
        $result = dropDown();
        while($row = mysqli_fetch_assoc($result)){
        
        $name = $row["ID"];
        echo "<option>$name</option>";
      }

      ?>
      </select>
      <button type="submit" name="delete">delete</button>
    </form>
  </div>
</div>




</body>
</html>







