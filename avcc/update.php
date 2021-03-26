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

if(isset($_POST['update'])){

update();



}


 ?>

<!-- form page -->
<div class="login-page">
  <div class="form">
    <form class="login-form" action="update.php" method="post">
      <input type="text" name="username" placeholder="username"/>
      <input type="password" name="passcode" placeholder="password"/>
      
      <select value="id" name="id">
      <?php
        
        $result = dropDown();
        while($row = mysqli_fetch_assoc($result)){
        
        $name = $row["ID"];
        echo "<option>$name</option>";
      }

      ?>
      </select>
      <button type="submit" name="update">update</button>
    </form>
  </div>
</div>




</body>
</html>







