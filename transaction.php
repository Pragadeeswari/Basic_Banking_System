<?php 
	session_start();
	include 'connection.php';

	if(isset($_POST['submit'])){
		$a = $_POST['user'];
		$b = $_POST['Amount'];
		$d = $_GET['Name'];
	}
	
	$result1 = mysqli_query($conn,"SELECT * FROM customer where Name='$a'");
	if (!$result1) {
		printf("Error: %s\n", mysqli_error($conn));
		exit();
	}
	while($row = mysqli_fetch_array($result1)){
		$f = $row[3];
		$c = "UPDATE customer SET ";
		$c .= "Balance=Balance+'$b' WHERE Name='$a'";
		mysqli_query($conn,$c);
	}
	
	$result2 = mysqli_query($conn,"SELECT * FROM customer where Name='$d'");
	if (!$result2) {
		printf("Error: %s\n", mysqli_error($conn));
		exit();
	}
	while($row = mysqli_fetch_array($result2)){
		$g = $row[3];
		$e = "UPDATE customer SET ";
		$e .= "Balance=Balance-'$b' WHERE Name='$d'";
		mysqli_query($conn,$e);
	}
	
	$result3 = mysqli_query($conn,"SELECT * FROM customer where Name='$d'");      
	if (!$result3) {
		printf("Error: %s\n", mysqli_error($conn));
		exit();
	}
	while($row = mysqli_fetch_array($result3)){
		$h = "INSERT INTO transactions(Sender, Receiver, Amount) VALUES('".$d."', '".$a."', '".$b."')";
		mysqli_query($conn,$h);
	}
	
	
?>

<html>
<head>
<script>
alert("Your Transaction has been Successful");
window.location.href="customer.php";
</script>
</head>
<html>