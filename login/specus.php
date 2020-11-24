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
<title>Specific Customer</title>
</head>
<body>

<?php
	if(isset($_POST['submit'])) {
		$cus = $_POST['cus'];
		$sql = "select * from customer natural join room where C_id = $cus;";
		$result = mysqli_query($conn, $sql) or die("Bad Query: $sql");
		//$resultCheck = mysqli_num_rows($result);
		//if($resultCheck > 0) {
		echo"<h1 text align = 'center'>Specific Customer Info</h1>";
		echo"<table align = 'center' cellpadding = 10px border='4'>";
		echo"<tr bgcolor = 'yellow'><th>ID</th><th>Name</th><th>Address</th><th>Number</th><th>Check In</th><th>Check Out</th><th>People</th><th>Room ID</th></tr>\n";
		while ($row = mysqli_fetch_assoc($result)) {
			echo"<tr bgcolor = 'lightgreen'><td>{$row['C_id']}</td><td>{$row['name']}</td><td>{$row['address']}</td><td>{$row['mobile_number']}</td><td>{$row['check_in']}</td><td>{$row['check_out']}</td><td>{$row['no_of_people']}</td><td>{$row['room_id']}</td></tr>\n";
		}
		echo"</table>";
	}
	//}
?>

</body>
</html>