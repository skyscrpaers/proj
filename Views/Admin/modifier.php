<?PHP
include "C:/wamp64/www/Nouveau dossier//Views/Admin/reclamr.php";



include_once ('C:/wamp64/www/Nouveau dossier/Views/Admin/config.php');


$recl=new reclam($_GET['nom'],$_GET['exp'],$_GET['prenom'],$_GET['code'],$_GET['mail'],$_GET['soc'],$_GET['ad'],$_GET['tel'],$_GET['mode']
,$_GET['num'],$_GET['descr'],$_GET['Etat']);
$nom=$_GET['nom'];
$reclamr1=new reclamr();
$reclamr1->modifiereclamr($recl,$nom);
header('Location:product-cart.php');

?>