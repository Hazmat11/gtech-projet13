<?php
require_once "../config/config.php";

$varBG = $_FILES['bg']['name'];

$destination = "../img/".$_FILES['bg']['name']; //dossier "upload"
move_uploaded_file($_FILES['bg']['tmp_name'],$destination);

$sql = "UPDATE backgrounds SET imgbackground = 'img/$varBG' WHERE `backgrounds`.`id` = 1";

$pre = $pdo->prepare($sql);
$pre->execute();
header('Location:../indexadmin.php');//on le redirige sur la page d'accueil du site !
?>