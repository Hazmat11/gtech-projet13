<?php
require_once "../config/config.php";

$varContact = $_POST['txtcontact'];

$sql = "INSERT INTO contact (`id`, `txt`) VALUES (NULL, '$varContact');";

$pre = $pdo->prepare($sql);
$pre->execute();
// header('Location:../index.php');//on le redirige sur la page d'accueil du site !
?>