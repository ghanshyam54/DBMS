<?php
include("dbconn.php");
if(isset($_POST['submit'])){
$res=$_POST['res'];
$rbill=$_POST['rbill'];
if($res > 0) {
	$query = "update restaurant set bill = $rbill where RC_id = $res;";
	if(mysqli_query($conn, $query)) {
		echo "Restaurant Bill inserted for Id $res as Rs. $rbill";

	}
	else {
		echo "Bad Query: " . mysqli_error($conn);
	}
	header("Location: rin.php?r_id=".$res);
}

}
?>