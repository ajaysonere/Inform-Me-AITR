<?php
 
 $username = $_POST['uname'];
 $password = $_POST['pass'];
 $connection = mysqli_connect("localhost","root","","database");

$query = mysqli_query($connection , "insert into databasetable(name,password) values('$username','$password')") or die("error".mysqli_error($connection));


if($query){
    header("Location: http://localhost/crud/courseconn.php");
}else{
  echo "Failed :";
}
?>