<?php

include 'db.php';

function dropDown()
{
     global $connection;
     $query = "SELECT * FROM `employee-user`";
     $result = mysqli_query($connection, $query);

     if(!$result)
     {
       die('error') . mysqli_error();
     } 
    return $result;
}

function update()
{
	global $connection;
	$id = $_POST['id'];
    $name = $_POST['username'];
    $password = $_POST['passcode'];
    $query = "UPDATE `employee-user` SET `name`='$name',`passcode`='$password' WHERE `ID`= '$id'";
    $result = mysqli_query($connection, $query);
  
    if(!$result)
      {
        die('error') . mysqli_error();
      } 
}


function create()
{
	global $connection;
	$username = $_POST['username'];
    $password = $_POST['passcode'];
    $password = crypt($password, '$1$rasmusle$');
    $query = "INSERT INTO `employee-user`(`name`, `passcode`) VALUES ('$username','$password')";
    $result = mysqli_query($connection, $query);

    if(!$result)
    {
    	die('error') . mysqli_error();
    
    }
}

function read()
{
     global $connection;
	 $query = "SELECT * FROM `employee-user` ";
     $result = mysqli_query($connection, $query);

    if(!$result){
    die('error') . mysqli_error();

    }
    return $result;
}


function delete()
{
	global $connection;
	$id = $_POST['id'];
    $query = "DELETE FROM `employee-user` WHERE `ID`= '$id'";
    $result = mysqli_query($connection, $query);

    if(!$result)
    {
      die('error') . mysqli_error();
    } 
}

function form()
{
     
}
?>