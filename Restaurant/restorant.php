<?php
include("insert.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Restaurant Booking</title>
	<link rel="stylesheet" href="restorant.css">
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,900" rel="stylesheet">
</head>
<body>


<div class="container">
	<div class="container-time">
	<h2 class="heading">Time Open</h2>
	<h3 class="heading-days">Monday-Friday</h3>
	<p>7am - 11am (breakfast)</p>
	<p>11am - 10pm (lunch/dinner)</p>

	<h3 class="heading-days">Saturday and sunday</h3>
	<p>9am - 1am (breakfast)</p>
	<p>1am - 10pm (lunch/dinner)</p>

	<hr>

	<h4 class="heading-phone">Call Us: 8459560512</h4>
</div>

<div class="container-form">
	<form action="" method="POST">
	<h2 class="heading heading-yellow">Reservation Online</h2>

	<div class="form-field">
		<p>Your Name</p>
		<input type="text" name = "name" placeholder="Your Name">
	</div>
	<div class="form-field">
		<p>Phone</p>		
		<input type="text" id="phone" name="phone" pattern="[0-9]{4}[0-9]{3}[0-9]{3}" required>
	</div>
	<div class="form-field">
		<p>Date</p>
		<input type="date" name="date">
	</div>
	<div class="form-field">
		<p>Time</p>
		<input name="time" type="time">
	</div>
	<div class="form-field">
		<p>How many people?</p>
		<select name="select" id="#">
			<option value="1">1 person</option>
			<option value="2">2 persons</option>
			<option value="3">3 persosn</option>
			<option value="4">4 persons</option>
			<option value="5">5 persons</option>
			<option value="5+">5+ persons</option>
		</select>
	</div>

<button name="submit" class="btn">Submit</button>
<span><?php echo $error; ?></span>
</form>
</div>
</div>

</body>
</html>