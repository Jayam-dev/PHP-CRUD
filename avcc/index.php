<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

<link rel="stylesheet" href="login-style.css">
</head>
<body>
<?php

include 'db.php';
include 'function.php';
if(isset($_POST['submit'])){


create();

}
 ?>

<!-- form page -->
<div class="login-page">
  <div class="form">
    <form class="login-form" action="index.php" method="post">
      <input type="text" name="username" placeholder="username"/>
      <input type="password" name="passcode" placeholder="password"/>
      <button type="submit" name="submit">Create</button>
    </form>
  </div>
</div>




</body>
</html>







