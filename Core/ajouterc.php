<?PHP

include 'C:/wamp64/www/Nouveau dossier/comc.php';



include_once ('C:/wamp64/www/Nouveau dossier/config.php');
$recl= new come($_GET["texte"]);
//var_dump($_GET);
$reclamr1=new comc();
$reclamr1->ajoutercom($recl);
//header('Location: afficherreclamr.php');
?>