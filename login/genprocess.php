
<?php
include("dbconn.php");
if(isset($_POST['submit'])){
$gen=$_POST['gen'];


if($gen == "") {
}
else {
	$query = mysqli_query($conn, $gen);
	if ($query) {
		echo "Query Success!";
	}
	else {
		echo "Bad Query: " . mysqli_error($conn);
	}
}
}

if(isset($_POST['submit1'])){
$staup = $_POST['staup'];

if($staup == "") {

}
else {
	$query = "update room_status set status = 0 where room_id = '$staup';";
	if(mysqli_query($conn,$query)) {
		echo "Room Status Updated for room $staup!";
	}
	else {
		echo "Bad Query: " . mysqli_error($conn);
	}
}

}
?>