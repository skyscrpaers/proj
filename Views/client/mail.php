<?php

 require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/OAuth.php';
require 'PHPMailer/POP3.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();;

// SMTP configuration
if (isset($_GET['name'])&&isset($_GET['mdp']) && isset($_GET['email'])&& isset($_GET['to']) &&isset($_GET['sujet']) && isset($_GET['mc']) ) 
{
	$nom=$_GET['name'];
	$prenom=$_GET['mdp'];
	$numero=$_GET['email'];
	
	$numero2=$_GET['to'];
	 $numero3=$_GET['mc'];
//$mail->SMTPDebug = 4;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = $numero;
$mail->Password = $prenom;
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom( $numero,$nom );


// Add a recipient
$mail->addAddress($numero2);


// Add cc or bcc 
/*$mail->addCC('');
$mail->addBCC('bcc@example.com');*/ 

// Email subject
$mail->Subject = $_GET['sujet'];

// Set email format to HTML
$mail->isHTML(true);

// Email body content
$mailContent = $numero3;
$mail->Body = $mailContent;


// Send email
if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
  
}else{
    echo 'Message has been sent';
   // header( 'http://localhost/2a7_php5/view/afficher_wishlist.php');
}

}

?>