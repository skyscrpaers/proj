<?php
/**
 * Created by PhpStorm.
 * User: Boussoukaya
 * Date: 21/04/2018
 * Time: 23:51
 */

require_once ('C:/wamp64/www/Nouveau dossier/Views/pdf/mc_table.php');
//$id=$_POST["cin"];
$e=0;
$i=0;
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Times","I",12);
$pdf->SetTextColor(124,112,103);
$pdf->MultiCell(0,10,"\n\n\n\n Liste des clients: \n\n");
$pdf->SetTextColor(0,0,0);
$pdf->SetFont("Times","",12);
$dbConnection = mysqli_connect('localhost', 'root', '', 's');

$query  = "SELECT * FROM reclam /*WHERE cin=$id*/";
$result = mysqli_query($dbConnection, $query);

if (mysqli_num_rows($result) > 0) {
  $pdf->Cell(24,10,"nom",1,0);
  $pdf->Cell(30,10,"prenom",1,0);
  $pdf->Cell(25,10,"exp",1,0);
  $pdf->Cell(24,10,"ad",1,0);
  $pdf->Cell(30,10,"code",1,0);
  $pdf->Cell(25,10,"mode",1,1);
 // $pdf->Cell(30,10,"Telephone",1,0);
  


    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

        $nom = $row['nom'];
        $prenom = $row['prenom'];
        $exp = $row['exp'];
        //$telephone = $row['telephone'];
        $ad=$row['ad'];
        $code=$row['code'];
        $mode=$row['mode'];
        if($e==0)
        {

        $pdf->Cell(24,10,"{$nom} ",1,0);
        $pdf->Cell(30,10,"{$prenom} ",1,0);
        $pdf->Cell(25,10,"{$exp} ",1,0);
        //$pdf->Cell(30,10,"{$telephone} ",1,0);
        $pdf->Cell(40,10,"{$ad} ",1,0);
        $pdf->Cell(50,10,"{$code} ",1,0);
        $pdf->Cell(50,10,"{$mode} ",1,1);


        }



    } }


$pdf->SetFont("Courier","B",9);

$pdf->output("client.pdf","");


header("Content-Type: application/pdf");
header("Content-Disposition: attachment;filename=client.pdf");
readfile("client.pdf");
unlink("client.pdf");
