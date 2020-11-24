<?php
	include("dbconn.php");
?>


<!doctype html>
<html>
<style>
	body {
		font-size: 20px;
	}
	h1 {
		font-family: 'Cinzel',serif;
	}
</style>
<head>
	<link rel="stylesheet" href="../style.css">
<title>Bill Information</title>
</head>
<body>

<?php
	/*$sql1 = "create temporary table billinfo (I_id, name, C_id) select p.I_id, c.name, c.C_id, from customer c, pays p where c.C_id = p.C_id;";
	mysqli_query($conn, $sql1);

	//$sql2 = "select b.C_id, b.name, b.check_out, b.I_id from billinfo b inner join bill on b.I_id = bill.I_id";
	$sql2 = "billinfo inner join bill on billinfo.I_id = bill.I_id";
	$result = mysqli_query($conn, $sql2) or die("Bad Query: $sql1");*/

	$sql1 = "SELECT customer.C_id, customer.name, customer.mobile_number, customer.check_out, bill.total_bill FROM customer join pays ON customer.C_id = pays.C_id join bill ON pays.I_id = bill.I_id";
	$result = mysqli_query($conn, $sql1); 

	echo"<h1 text align = 'center'>Billing Information</h1>";
	echo"<table align = 'center' cellpadding = 10px border='4'>";

	echo"<tr bgcolor = 'yellow'><th>ID</th><th>Name</th><th>Mobile</th><th>Check Out</th><th>Total Bill</th></tr>\n";
	while ($row = mysqli_fetch_assoc($result)) {
		echo"<tr bgcolor = 'lightgreen'><td>{$row['C_id']}</td><td>{$row['name']}</td><td>{$row['mobile_number']}</td><td>{$row['check_out']}</td><td>{$row['total_bill']}</td></tr>\n";
	}
	echo"</table>";
	
?>

</body>
</html>