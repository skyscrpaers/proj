<?PHP

include 'C:/wamp64/www/Nouveau dossier/Views/client/reclamr.php';



include_once ('C:/wamp64/www/Nouveau dossier/Views/client/config.php');
$recl= new reclam($_GET["nom"],$_GET['exp'],$_GET['prenom'],$_GET['code'],$_GET['mail'],$_GET['soc'],$_GET['ad'],$_GET['tel'],$_GET['mode']
,$_GET['num'],$_GET['descr'],$_GET['Etat']);
//var_dump($_GET);
$reclamr1=new reclamr();
$reclamr1->ajoutereclamr($recl);
header("Location:mail.html");


echo "*ergtr";
 require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/OAuth.php';
require 'PHPMailer/POP3.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();;

// SMTP configuration
/*if (isset($_GET['name'])&&isset($_GET['mdp']) && isset($_GET['email'])&& isset($_GET['to']) &&isset($_GET['sujet']) && isset($_GET['mc']) ) 
{*/
	/*$nom= 'khalil';// $_GET['name'];
	$prenom= 'khalil13031997'; //$_GET['mdp'];
	$numero= 'mohamedkhalil.benkhedher@esprit.tn';//$_GET['email'];
	
	$numero2='mohamedkhalil.benkhedher@esprit.tn';//$_GET['to'];
	 $numero3='heloooo';  //$_GET['mc'];*/
$mail->SMTPDebug = 4;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username =  'mohamedkhalil.benkhedher@esprit.tn'; //$numero;
$mail->Password ='khalil13031997';// $prenom;
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('mohamedkhalil.benkhedher@esprit.tn' ,'BENKHEDHER MohamedKhalil');


// Add a recipient
$mail->addAddress('mohamedkhalil.benkhedher@esprit.tn');


// Add cc or bcc 
/*$mail->addCC('');
$mail->addBCC('bcc@example.com');*/ 

// Email subject
$mail->Subject ='hiiiii';

// Set email format to HTML
$mail->isHTML(true);

// Email body content
//$mailContent = 'gstrhythfg';
$mail->Body = 'gqrjtgijegj';
//header('Location: checkout.html');

// Send email
if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
  
}else{
    echo 'Message has been sent';
   // header( 'http://localhost/2a7_php5/view/afficher_wishlist.php');
}

//}

?>
