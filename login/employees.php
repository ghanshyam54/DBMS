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
<title>Employee Information</title>
</head>
<body>

<?php
	$sql = "select E_name,E_id,E_dept,E_salary from employee;";
	$result = mysqli_query($conn, $sql) or die("Bad Query: $sql");
	
	echo"<h1 text align = 'center'>Employee Information</h1>";
	echo"<table align = 'center' cellpadding = 10px border='4'>";
	echo"<tr bgcolor = 'yellow'><th>Employee Name</th><th>Employee ID</th><th>Department</th><th>Salary</th></tr>\n";
	while ($row = mysqli_fetch_assoc($result)) {
		echo"<tr bgcolor = 'lightgreen'><td>{$row['E_name']}</td><td>{$row['E_id']}</td><td>{$row['E_dept']}</td><td>{$row['E_salary']}</td></tr>\n";
	}
	echo"</table>";
	
?>

</body>
</html>