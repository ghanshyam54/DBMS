<?php
	include("dbconn.php");
?>


<!doctype html>
<html>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap');
	@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap');
	@import url('https://fonts.googleapis.com/css2?family=Courgette&display=swap');
	body {
		font-size: 20px;
	}
	h1 {
		font-family: 'Cinzel',serif;
	}
</style>
<head>
	<link rel="stylesheet" href="/style.css">
<title>Customer Information</title>
</head>
<body>

<?php
	$sql = "select name, address, mobile_number, check_in, check_out from customer;";
	$result = mysqli_query($conn, $sql) or die("Bad Query: $sql");
	//$resultCheck = mysqli_num_rows($result);
	//if($resultCheck > 0) {
	echo"<h1 text align = 'center'>Customer Information</h1>";
	echo"<table align = 'center' cellpadding = 10px border='4'>";
	echo"<tr bgcolor = 'yellow'><th>Name</th><th>Address</th><th>Number</th><th>Check In</th><th>Check Out</th></tr>\n";
	while ($row = mysqli_fetch_assoc($result)) {
		echo"<tr bgcolor = 'lightgreen'><td>{$row['name']}</td><td>{$row['address']}</td><td>{$row['mobile_number']}</td><td>{$row['check_in']}</td><td>{$row['check_out']}</td></tr>\n";
	}
	echo"</table>";
	//}
?>

</body>
</html>