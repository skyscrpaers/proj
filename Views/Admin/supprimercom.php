<?PHP
include "C:/wamp64/www/Nouveau dossier/comc.php";




$reclam=$_GET['texte'];
$reclamr1=new comc();
$reclamr1->supp($reclam);
header('Location:index-2.php');
	


?>