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

$result = read();
 ?>

<!-- form page -->
<div class="login-page">
       <h1 class="text-center">Read</h1>
       
      <?php

      while ($row = mysqli_fetch_assoc($result)) {
             
             $field1name = $row["ID"]; 
             $field2name = $row["name"];
             $field3name = $row["passcode"];
            
             echo ' <table class="table table-striped table-bordered table-hover table-sm"> 
               <thead class="thead-dark">
             <tr> 
                  <th>'.$field1name.'</th> 
                  <th>'.$field2name.'</th>
                  <th>'.$field3name.'</th> 
              </tr> </thead> </table>';
      }
      

      ?>
      
    </form>
  </div>
</div>




</body>
</html>







