<?php


require_once ('../pdf/mc_table.php');
$e=0;
$i=0;
//$idcommande=$_GET["idcommande"];
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Times","I",12);
$pdf->SetTextColor(124,112,103);
$pdf->MultiCell(0,10,"\n\n\n\n Details Commandes: \n\n");
$pdf->SetTextColor(0,0,0);
$pdf->SetFont("Times","",12);
$dbConnection = mysqli_connect('localhost', 'root', '', 'panier');

$query  = "SELECT * FROM commande ";
$result = mysqli_query($dbConnection, $query);

if (mysqli_num_rows($result) > 0) {
  $pdf->Cell(24,10,"idcommande",1,0);
  $pdf->Cell(30,10,"dateCmd",1,0);
  $pdf->Cell(25,10,"idClient",1,0);
  $pdf->Cell(30,10,"totale",1,0);
  $pdf->Cell(40,10,"nbr",1,0);
  $pdf->Cell(50,10,"etatCmd",1,1);

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

        $idcommande = $row['idcommande'];
        $dateCmd = $row['dateCmd'];
        $idClient = $row['idClient'];
        $totale=$row['totale'];
        $nbr=$row['nbr'];
        $etatCmd=$row['etatCmd'];
        if($e==0)
        {


        $pdf->Cell(24,10,"{$idcommande} ",1,0);
        $pdf->Cell(30,10,"{$dateCmd} ",1,0);
        $pdf->Cell(25,10,"{$idClient} ",1,0);
        $pdf->Cell(30,10,"{$totale} ",1,0);
        $pdf->Cell(40,10,"{$nbr} ",1,0);
        $pdf->Cell(50,10,"{$etatCmd} ",1,1);
        }



    } }


$pdf->SetFont("Courier","B",9);
$pdf->MultiCell(0,10," Signature du Responsable");
$pdf->output("commande.pdf","");


header("Content-Type: application/pdf");
header("Content-Disposition: attachment;filename=commande".$_GET['idcommande'].".pdf");
readfile("commande.pdf");
unlink("commande.pdf");
