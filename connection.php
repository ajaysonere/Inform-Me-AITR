<?php
  
  $username = $_POST['uname'];
  $password = $_POST['pass'];
 
  $h =  mysqli_connect("localhost","root","","backend");
//  mysqli_select_db("backend" , $h);
 
//  $q = "insert into information values('".$username."' , '".$password."')";

//  mysqli_query( $q, $h);
//  mysqli_close($h);
//  echo "insert operation completed";

$query = "INSERT INTO information VALUES('$username','$password')";

$data = mysqli_query($h,$query);
if($data){
  header("Location: http://localhost/crud/courseconn.php");
}
else{
    echo "Failed";
}

?>