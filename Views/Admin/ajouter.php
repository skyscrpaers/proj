<?PHP

include 'C:/wamp64/www/Nouveau dossier/Views/Admin/reclamr.php';



include_once ('C:/wamp64/www/Nouveau dossier/config.php');
$recl= new reclam($_GET["nom"],$_GET['exp'],$_GET['prenom'],$_GET['code'],$_GET['mail'],$_GET['soc'],$_GET['ad'],$_GET['tel'],$_GET['mode']
,$_GET['num'],$_GET['descr'],$_GET['Etat']);
var_dump($_GET);
$reclamr1=new reclamr();
$reclamr1->ajoutereclamr($recl);
header("location:product-cart.php")
//header('Location: afficherreclamr.php');
?>