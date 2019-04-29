<?php
require_once ("C:/wamp64/www/Nouveau dossier/back/core/CommandeC.php");
require_once ("C:/wamp64/www/Nouveau dossier/back/entities/Commande.php");

  $commande1= new CommandeC();
	$co=new Commande($_POST['idcommande'],$_POST['dateCmd'],$_POST['idClient'],$_POST['totale'],$_POST['nbr'],$_POST['etatCmd']);
	$commande1->modifierCom($co,$_POST['cin_ini']);
	$commande1->listCommande();

require_once("index-1.php");
?>
