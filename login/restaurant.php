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
<title>Restaurant Information</title>
</head>
<body>

<?php
	$sql = "select * from restaurant;";
	$result = mysqli_query($conn, $sql) or die("Bad Query: $sql");
	//$resultCheck = mysqli_num_rows($result);
	//if($resultCheck > 0) {
	
	echo"<h1 text align = 'center'>Restaurant Information</h1>";
	echo"<table align = 'center' cellpadding = 10px border='4'>";
	echo"<tr bgcolor = 'yellow'><th>RC_id</th><th>RC_name</th><th>mobile_number</th><th>no_of_people</th><th>bill</th><th>date</th><th>time</th></tr>\n";
	while ($row = mysqli_fetch_assoc($result)) {
		echo"<tr bgcolor = 'lightgreen'><td>{$row['RC_id']}</td><td>{$row['RC_name']}</td><td>{$row['mobile_number']}</td><td>{$row['no_of_people']}</td><td>{$row['bill']}</td><td>{$row['date']}</td><td>{$row['time']}</td></tr>\n";
	}
	echo"</table>";
	//}
?>

</body>
</html>