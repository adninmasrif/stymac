<?php
include('db.php');
require('fpdf/fpdf.php');
session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}
							
$user_id = $_SESSION["uid"];
$orders_list = "SELECT o.order_id,o.user_id,o.product_id,o.qty,o.trx_id,o.p_status,p.product_title,p.product_price,p.product_image FROM orders o,products p WHERE o.user_id='$user_id' AND o.product_id=p.product_id";
$query = mysqli_query($con,$orders_list);

$pdf = new FPDf('p','mm','A4');
$pdf->AddPage();

//Header Area
$pdf->SetFont('Arial','B',23);
$pdf-> Cell(60,10,'Full Order List',1,0,'C');
$pdf->Ln(20);

$pdf->SetFont('Arial','B',14.5);

$pdf->Cell(40,10," Product Name ",1,0,'C');
$pdf->Cell(50,10," Product Price ",1,0,'C');
$pdf->Cell(40,10," Quantity ",1,0,'C');
$pdf->Cell(50,10," Transaction Id ",1,1,'C');

$pdf->SetFont('Arial','I',12);

				if (mysqli_num_rows($query) > 0) 
				{
					while ($row=mysqli_fetch_array($query))
					{

					 	$pdf->Cell(40,10,$row['product_title'],1,0,'C');
						$pdf->Cell(50,10,$row['product_price'],1,0,'C');
						$pdf->Cell(40,10,$row['qty'],1,0,'C');
						$pdf->Cell(50,10,$row['trx_id'],1,1,'C');


					}
				}


$pdf->OutPut();



?>