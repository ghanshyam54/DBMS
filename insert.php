<?php
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])) {
 
 $name=$_POST['name'];
 $addr=$_POST['address'];
 $cin=$_POST['cin'];
 $cout=$_POST['cout'];
 $phone=$_POST['phone'];
 $gue=$_POST['guests'];
 $sin=$_POST['sin'];
 $del=$_POST['del'];
 $lux=$_POST['lux'];
 $gh=$_POST['gue'];

 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conni = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conni, "atharva");

 if($sin > 0) {
 	$Squery = mysqli_query($conni, "select room_id from room_status where type = 'single' and status = 0 LIMIT $sin;");
 	//$j = 0;
 	//while($row = mysqli_fetch_assoc($Squery)) {
 	//	echo $row['room_id'];
 	//	$j = $j + 1;
 	//}
 	//echo $j;
 	$s = mysqli_num_rows($Squery);
 	//echo $s;
 	//echo $sin;
 	if($s == $sin) {
 		
 	}
 	else {
 		$error = "$sin Single Rooms not available. Please book again.";
 		exit($error);
 	}
 }


 if($del > 0) {
 	$Dquery = mysqli_query($conni, "select room_id from room_status where type = 'deluxe' and status = 0 LIMIT $del;");
 	$d = mysqli_num_rows($Dquery);
 	if($d == $del) {

 	}
 	else {
 		$error = "$del Deluxe Rooms not available. Please book again.";
 		exit($error); 
 	}
 }


 if($lux > 0) {
 	$Lquery = mysqli_query($conni, "select room_id from room_status where type = 'luxury' and status = 0 LIMIT $lux;");
 	$l = mysqli_num_rows($Lquery);
 	if($l == $lux) {

 	}
 	else {
 		$error = "$lux Luxury Rooms not available. Please book again.";
 		exit($error);
 	}
 }


 if($gh > 0) {
 	$Gquery = mysqli_query($conni, "select room_id from room_status where type = 'guest_house' and status = 0 LIMIT $gh;");
 	$g = mysqli_num_rows($Gquery);
 	if($g == $gh){
 	
 	}
 	else {
 		$error = "$gh Guest Houses not available. Please book again.";
 		exit($error); 
 	}
 }


 $sql = "insert into customer (name, address, mobile_number, check_in, check_out, no_of_people) values ('$name', '$addr', $phone, '$cin', '$cout', $gue)";
 if(mysqli_query($conni, $sql)) {
    $cust = mysqli_query($conni,"select max(`C_id`) from customer;");
    $fetch = mysqli_fetch_assoc($cust);
 	$cid =  $fetch['max(`C_id`)'];
 } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conni);
 }

 if($sin > 0) {
 	while($row = mysqli_fetch_assoc($Squery)) {
 		$ins = "insert into room (room_id, C_id) values ('$row[room_id]', '$cid')";
 		if(mysqli_query($conni,$ins)) {
 			$sta = "update room_status set status = 1 where room_id = '$row[room_id]'";
 			if(mysqli_query($conni,$sta)) {
 				//echo "single";
 			}
 			else {
 				echo "ERROR: Could not able to execute $sta. " . mysqli_error($conni);
 			}
 		}
 		else {
 			echo "ERROR: Could not able to execute $ins. " . mysqli_error($conni);
 		}
 	}
 }


 if($del > 0) {
 	while($row = mysqli_fetch_assoc($Dquery)) {
 		$ins = "insert into room (room_id, C_id) values ('$row[room_id]', '$cid')";
 		if(mysqli_query($conni,$ins)) {
 			$sta = "update room_status set status = 1 where room_id = '$row[room_id]'";
 			if(mysqli_query($conni,$sta)) {
 				//echo "deluxe";
 			}
 			else {
 				echo "ERROR: Could not able to execute $sta. " . mysqli_error($conni);
 			}
 		}
 		else {
 			echo "ERROR: Could not able to execute $ins. " . mysqli_error($conni);
 		}
 	}
 }

 if($lux > 0) {
 	while($row = mysqli_fetch_assoc($Lquery)) {
 		$ins = "insert into room (room_id, C_id) values ('$row[room_id]', '$cid')";
 		if(mysqli_query($conni,$ins)) {
 			$sta = "update room_status set status = 1 where room_id = '$row[room_id]'";
 			if(mysqli_query($conni,$sta)) {
 				//echo "luxury";
 			}
 			else {
 				echo "ERROR: Could not able to execute $sta. " . mysqli_error($conni);
 			}
 		}
 		else {
 			echo "ERROR: Could not able to execute $ins. " . mysqli_error($conni);
 		}
 	}
 }


 if($gh > 0) {
 	while($row = mysqli_fetch_assoc($Gquery)) {
 		$ins = "insert into room (room_id, C_id) values ('$row[room_id]', '$cid')";
 		if(mysqli_query($conni,$ins)) {
 			$sta = "update room_status set status = 1 where room_id = '$row[room_id]'";
 			if(mysqli_query($conni,$sta)) {
 				//echo "guest house";
 			}
 			else {
 				echo "ERROR: Could not able to execute $sta. " . mysqli_error($conni);
 			}
 		}
 		else {
 			echo "ERROR: Could not able to execute $ins. " . mysqli_error($conni);
 		}
 	}
 }



 $pay = "insert into pays (I_id, C_id) values ('$cid','$cid')";
 if(mysqli_query($conni, $pay)) {
 	//echo "pay inserted";
 }
 else {
 	echo "ERROR: Could not able to execute $pay. " . mysqli_error($conni);
 }


 $date1 = strtotime($cin);
 $for1 = date('d-m-Y',$date1);
 $date2 = strtotime($cout);
 $for2 = date('d-m-Y',$date2);
 /*echo "$date2\n";
 echo "$date1\n";
 echo "$for2\n";
 echo "$for1\n";
 echo gettype($for2);*/

 $days = $date2 - $date1;
 $days = $days/86400;
 //echo $days;

 $topay = $days * (($sin * 2000) + ($del * 4000) + ($lux * 6000) + ($gh * 9000));
 //echo $topay;

 $billins = "insert into bill (I_id, check_out, total_bill) values ('$cid','$cout','$topay')";
 if(mysqli_query($conni, $billins)) {
 	//echo "bill inserted";
 }
 else {
 	echo "ERROR: Could not able to execute $billins. " . mysqli_error($conni);
 }

 header("Location: temp.php?cid=".$cid);

 mysqli_close($conni);
}

?>