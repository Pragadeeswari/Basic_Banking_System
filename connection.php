<?php
  $host = "localhost";
  $username = "id16430700_bankdb";
  $password = "xPh77gOa[3TftSRE";
  $dbname = "id16430700_bank";
  // connection
  $conn = mysqli_connect($host,$username,$password,$dbname);
  //check
  if($conn){
	  echo "connected successfully";
  }else{
	  die("Connection Failed :". mysqli_connect_error());
  }

?>