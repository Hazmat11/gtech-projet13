<?php
require_once "../config/config.php";

$GLOBALS['varFont'] = $_FILES['font']['name'];


$destination = "../font/".$_FILES['font']['name']; //dossier "upload"
move_uploaded_file($_FILES['font']['tmp_name'],$destination);

$sql = "UPDATE fonts SET mainfont = 'font/$varFont' WHERE `fonts`.`id` = 1";

$pre = $pdo->prepare($sql);
$pre->execute();
header('Location:../Users/indexadmin.php');//on le redirige sur la page d'accueil du site !
?>