<?php
require_once ("../core/CommandeC.php");
if(isset($_POST['desactiver']))
{
$commande1= new CommandeC();
$commande1->desactivercommande($_POST["etatCmd"]);
}
require_once ("index-1.php");
?>
