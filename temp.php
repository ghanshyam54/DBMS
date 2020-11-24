
<?php

if($_GET){
    $cid=$_GET['cid'];
    //echo $cid;
}else{
    //user was not passed, so print a error or just exit(0);
    echo "nothing passes";
}


//echo $result;


include_once('fpdf/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('resort.jpg',10,10,30);
    $this->SetFont('Arial','B',18);
    // Move to the right
    $this->Cell(40);
    $this->SetFont('Helvetica','BU',30);
    $this->SetTextColor(255,0,0);
    // Title
    $this->Cell(100,20,'SEA TOUCH RESORT',0,0,'C');
    
    
    // Line break
    $this->Ln(40);
}
 
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
 

$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',16);
$pdf->SetTextColor(255,0,0);
$pdf->Cell(0,10,"Booking Receipt" ,0,1,'C');
$pdf->SetTextColor(0,0,0);
$conn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($conn,"atharva");
$sql = "select * from customer  where C_id = $cid;";

$result = mysqli_query($conn, $sql) or die("Bad Querey: $sql");
while ($row = mysqli_fetch_assoc($result)) {
    $pdf->Cell(35,10,"Customer ID :"."    ".$cid ,0,1);
    $pdf->Cell(35,10,"Name :"."    ".$row['name'] ,0,1);
    $pdf->Cell(35,10,"Address :"."    ".$row['address'] ,0,1);
    $pdf->Cell(35,10,"Mobile Number :"."    ".$row['mobile_number'] ,0,1);
    $pdf->Cell(35,10,"Check In :"."    ".$row['check_in'] ,0,1);
    $pdf->Cell(35,10,"Check Out :"."    ".$row['check_out'] ,0,1);
    $pdf->Cell(30,10,"Room ID :" ,0);
    $data = "select room_id from room where C_id = $cid;";
    //echo "<table border='1'>";
    $roomdata = mysqli_query($conn, $data) or die("Bad Query: $data");
    while ($rooms = mysqli_fetch_assoc($roomdata)) {
         $pdf->Cell(20,10,$rooms['room_id']."," ,0);
    }
    
}




//}
$pdf->Output();
mysqli_close($conn);
 ?>



