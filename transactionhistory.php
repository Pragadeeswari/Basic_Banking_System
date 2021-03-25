<?php 
	session_start();
	include 'connection.php';

	$q="select * from transactions";
	$result=mysqli_query($conn,$q);
	$row_count=mysqli_num_rows($result);
?>

<html>
<head>
	<title>Customer Details</title>
	<link rel = "stylesheet" type = "text/css" href = "buttons.css">
	<style>
		table {
		font-family: sans-serif;
		border-collapse: collapse;
		width: 100%;
		}

		h2{
		font-family: monospace; 
		font-size:30px;
		}
		
		td, th {
		border: 1px solid black;
		text-align: center;
		padding: 8px;
		}

		tr:nth-child(odd) {
		background-color:#C6E2FF ;
		}
	</style>
</head>
<body style="background-color:	#1874CD ;">

	<div align="center" style="top:0px">		  			
		<table width="1316" align="center" class = "t">
			<tr>
            <td style = "text-align:center;border:0px"> <a href="index.php" target="frame"><button class = "btn2"> Home </button></a></td>	 	
			<td style = "text-align:center;border:0px"><a href="customer.php" target="frame"><button class = "btn2">View Customers</button></a></td>
			<td style = "text-align:center;border:0px"><a href="transfermoney.php" target="frame"><button class = "btn2">Transfer Money</button></a></td>
			<td style = "text-align:center;border:0px"><a href="transactionhistory.php" target="frame"><button class = "btn2">View Transaction History</button></a></td>
            </tr>
        </table>
	</div>
    <h2 style="color:wheat;text-align: center;font-family: cursive;" >To transfer money from one user to another , click on the user </h2>
    <table class="flat-table flat-table-1" align=center style="font-family: serif;color:darkblue;font-weight: bold;">
	<thead>
		<th>SENDER</th>
		<th>RECEIVER</th>
		<th>AMOUNT</th>
		
	</thead>
	<tbody>
		<tr align = center>
        
		<?php  
			while($row=mysqli_fetch_array($result)){
         ?>
		 
		<td><?php echo  $row["Sender"]; ?></td>
		
		<td><?php echo $row["Receiver"]; ?></td>
		<td><?php echo  $row["Amount"]; ?></td>
		<tr align = center>
		
		<?php }
		?>
		
		</tr>
        
        
	</tbody>
	</table>
	<br><br>
	
    
</body>
</html>