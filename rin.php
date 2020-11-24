
<?php

if($_GET){
    $r_id=$_GET['r_id'];
    echo $r_id;
    
}else{
    //user was not passed, so print a error or just exit(0);
    echo "nothing passes";
}





include_once('../fpdf/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('../resort.jpg',10,10,30);
    $this->SetFont('Arial','B',18);
    // Move to the right
    $this->Cell(40);
    $this->SetFont('Helvetica','BU',30);
    $this->SetTextColor(255,0,0);
    // Title
    $this->Cell(120,20,'SEA TOUCH RESTAURANT',0,0,'C');
    
    
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
$pdf->Cell(0,10,"INVOICE:" ,0,1,'C');
$pdf->SetTextColor(0,0,0);
$conn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($conn,"atharva");
$sql = "select * from restaurant where RC_id = $r_id";

$result = mysqli_query($conn, $sql) or die("Bad Query: $sql");
while ($row = mysqli_fetch_assoc($result)) {
    $pdf->Cell(35,10,"Customer ID :"."    ".$r_id ,0,1);
    $pdf->Cell(35,10,"Name :"."    ".$row['RC_name'] ,0,1);
    //$pdf->Cell(35,10,"Address :"."    ".$row['address'] ,0,1);
    $pdf->Cell(35,10,"Mobile Number :"."    ".$row['mobile_number'] ,0,1);
    $pdf->Cell(35,10,"Date :"."    ".$row['date'] ,0,1);
    $pdf->Cell(35,10,"Time :"."    ".$row['time'] ,0,1);
    $pdf->Cell(35,10,"Number of member:"."    ".$row['no_of_people'] ,0,1);
    $pdf->Cell(35,10,"Bill:"."    ".$row['bill'] ,0,1);
    }
    





//}
$pdf->Output();
mysqli_close($conn);
 ?>



