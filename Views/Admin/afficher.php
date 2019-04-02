<?php

$objetpdo=new PDO('mysql:host=localhost;dbname=s', 'root', '');
$pdostat=$objetpdo->prepare('SELECT * FROM reclam');
$ex=$pdostat->execute();
$contact=$pdostat->fetchAll();

?>