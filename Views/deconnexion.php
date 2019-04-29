<?php
require_once "../core/admin.php";
//echo $_POST['mail'];

$clientt=new admin();
$clientt->deconnexion();
require_once("signin.php");
?>
