<?php
require_once "../config/config.php";

$varTxt = $_POST['txt'];


$sql = "UPDATE mention SET text = '$varTxt' WHERE `mention`.`id` = 1;";

$pre = $pdo->prepare($sql);
$pre->execute();
header('Location:../indexadmin.php');//on le redirige sur la page d'accueil du site !
