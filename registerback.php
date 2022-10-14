<?php
  
  $firstname = $_POST['first_name'];
  $lastname = $_POST['last_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $pincode = $_POST['pincode'];
  $jobrole = $_POST['jobrole'];
  $phone = $_POST['phone'];
 
  $h =  mysqli_connect("localhost","root","","registerback");
//  mysqli_select_db("backend" , $h);
 
//  $q = "insert into information values('".$username."' , '".$password."')";

//  mysqli_query( $q, $h);
//  mysqli_close($h);
//  echo "insert operation completed";

$query = "INSERT INTO registerform VALUES('$firstname','$lastname','$email','$password','$address','$city','$pincode','$jobrole','$phone')";

$data = mysqli_query($h,$query);
if($data){
  header("Location:http://localhost/crud/registerconn.php");
}
else{
    echo "Failed";
}

?>