<?php
  include("connection.php");

  $query = "SELECT * FROM information";
  $data = mysqli_query($h,$query);
  $total = mysqli_num_rows($data);
  echo $total;
?>