<?php
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 
 $name=$_POST['name'];
 $phone=$_POST['phone'];
 $date=$_POST['date'];
 $time=$_POST['time'];
 $No_of_people=$_POST['select'];
 
 //Establish Connections with server
 $conni = mysqli_connect("localhost","root","");
 //selection of database
 $db = mysqli_select_db($conni,"atharva");
 $time = $time . ":00";
 

 $Iquery = mysqli_query($conni,"select count(`RC_id`) from restaurant");
 $row = mysqli_fetch_assoc($Iquery);
 $row_count = $row['count(`RC_id`)'];
 $r_id = $row_count + 1;

 $sql = "INSERT INTO  restaurant (RC_id, RC_name, mobile_number, no_of_people, date, time) VALUES('$r_id','$name','$phone', '$No_of_people', '$date', '$time')";
 if (mysqli_query($conni, $sql)){
 	$error = "Table Booked Successfully! See Yaa!";
 }
 else{
 	/*echo "ERROR: Could not able to execute $sql. " . mysqli_error($conni);*/
 	$error = "Error in Booking.";
 }


 mysqli_close($conni);

}

?>