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
<title>Room Information</title>
</head>
<body>

<?php
	$sql = "create view room_info(room_id,name,check_in,check_out) as select room_id,name,check_in,check_out from room,customer where room.C_id = customer.C_id group by room_id;";

	mysqli_query($conn, $sql);
	$sql1 = "select * from room_info;";
	$result = mysqli_query($conn, $sql1) or die("Bad Query: $sql1");

	echo"<h1 text align = 'center'>Room Information</h1>";
	echo"<table align = 'center' cellpadding = 10px border='4'>";
	echo"<tr bgcolor = 'yellow'><th>Room ID</th><th>Name</th><th>Check In</th><th>Check Out</th></tr>\n";
	while ($row = mysqli_fetch_assoc($result)) {
		echo"<tr bgcolor = 'lightgreen'><td>{$row['room_id']}</td><td>{$row['name']}</td><td>{$row['check_in']}</td><td>{$row['check_out']}</td></tr>\n";
	}
	echo"</table>";
?>

</body>
</html>