<?php
include("genprocess.php");
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome Admin</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Courgette&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap');
body {
	background-color: lightyellow;
}
.login{
width:200px;
margin:50px auto;
font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
border-radius:10px;
border:2px solid #ccc;
padding:10px 40px 25px;
margin-top:40px;
float: left;
margin-left: 65px;
}

input[type=text]{
width:99%;
padding:10px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:16px;
font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; 
}

input[type=submit]{
width:100%;
background-color:#009;
color:#fff;
border:2px solid #06F;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;
margin-bottom:15px; 
}
</style>
</head>
<body>

<h1 style="text-align: center; font-family: 'Cinzel',serif";>Sea Touch Admin</h1>
<!--
<div class="login">
<h1 align="center" style="font-family: 'Courgette',cursive";>Customer Information</h1>
<form action="customer.php" style="text-align:center;">
<input type="submit" formtarget="_blank" value="Click Here" name="submit">
</form>
</div>


<div class="login">
<h1 align="center" style="font-family: 'Courgette',cursive";>Room Information</h1>
<form action="rooms.php" style="text-align:center;">
<input type="submit" formtarget="_blank" value="Click Here" name="submit">
</form>
</div>

<div class="login">
<h1 align="center" style="font-family: 'Courgette',cursive";>Room Status Info</h1>
<form action="roomstatus.php" style="text-align:center;">
<input type="submit" formtarget="_blank" value="Click Here" name="submit">
</form>
</div>

<div class="login">
<h1 align="center" style="font-family: 'Courgette',cursive";>Billing Information</h1>
<form action="bill.php" style="text-align:center;">
<input type="submit" formtarget="_blank" value="Click Here" name="submit">
</form>
</div>

<div class="login">
<h1 align="center" style="font-family: 'Courgette',cursive";>Employee Information</h1>
<form action="employees.php" style="text-align:center;">
<input type="submit" formtarget="_blank" value="Click Here" name="submit">
</form>
</div>

<div class="login">
<h1 align="center" style="font-family: 'Courgette',cursive";>Restaurant Information</h1>
<form action="restaurant.php" style="text-align:center;">
<input type="submit" formtarget="_blank" value="Click Here" name="submit">
</form>
</div>

<div class="login">
<h1 align="center" style="font-family: 'Courgette',cursive";>General Query</h1>
<form action="general.php" style="text-align:center;">
<input type="submit" formtarget="_blank" value="Click Here" name="submit">
</form>
</div>-->
<div class="login">
<h1 align="center" style="font-family: 'Cinzel',serif";>General</h1>
<form action="" method="post" style="text-align:center;">
<input type="text" placeholder="Write the query correctly" id="gen" name="gen"><br/><br/>
<input type="submit" value="Submit" name="submit">
</form>
</div>

<div class="login">
<h1 align="center" style="font-family: 'Cinzel',serif";>Specific Customer Info</h1>
<form action="specus.php" method="post" style="text-align:center;">
<input type="Number" placeholder="Enter Customer ID" id="cus" min = "1" name="cus"><br/><br/>
<input type="submit" value="Submit" name="submit">
</form>
</div>

<div class="login">
<h1 align="center" style="font-family: 'Cinzel',serif";>Restaurant Bill Update</h1>
<form action="resup.php" method="post" style="text-align:center;">
<input type="Number" placeholder="Enter Restaurant ID" id="res" min = "1" name="res"><br/><br/>
<input type="Number" placeholder="Enter Bill" id="rbill" min = "1" name="rbill"><br/><br/>
<input type="submit" formtarget="_blank" value="Submit" name="submit">
</form>
</div>

<div class="login">
<h1 align="center" style="font-family: 'Cinzel',serif";>Update Room Status</h1>
<form action="" method="post" style="text-align:center;">
<input type="text" placeholder="Enter Room ID" id="staup" name="staup"><br/><br/>
<input type="submit" value="Submit" name="submit1">
</form>
</div>

<div class="login">
<h1 align="center" style="font-family: 'Courgette',cursive";>View Tables</h1>
<form action="general.php" style="text-align:center;">
<input type="submit" formtarget="_blank" value="Click Here" name="submit">
</form>
</div>

</body>
</html>	