<?PHP
include "C:/wamp64/www/Nouveau dossier/reclamr.php";



$reclam=$_GET['nom'];
$reclamr1=new reclamr();
$reclamr1->supprimerEmploye($reclam);
header("location:product-cart.php");


?>