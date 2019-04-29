<?php
require_once ("../core/CommandeC.php");
if(isset($_POST['activer']))
{
$commande1= new CommandeC();
$commande1->activercommande($_POST["etatCmd"]);
}
require_once ("index-1.php");
?>
