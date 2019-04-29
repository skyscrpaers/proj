<?php
include "../core/CommandeC.php";
if(isset($_POST["supprimer"]))
{
$commande->new CommandeC();
$commande->supprimercommande($_POST["idcommande"]);
}
require_once("index-1.php");
?>
