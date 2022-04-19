<?php
require_once "../config/config.php";

$varcard1 = $_FILES['card1']['name'];
$varcard2 = $_FILES['card2']['name'];
$varcard3 = $_FILES['card3']['name'];
$varcard4 = $_FILES['card4']['name'];
$varcard5 = $_FILES['card5']['name'];
$varcard6 = $_FILES['card6']['name'];

$destination = "../img/".$_FILES['card1']['name']; //dossier "upload"
move_uploaded_file($_FILES['card1']['tmp_name'],$destination);

$destination = "../img/".$_FILES['card2']['name']; //dossier "upload"
move_uploaded_file($_FILES['card2']['tmp_name'],$destination);

$destination = "../img/".$_FILES['card3']['name']; //dossier "upload"
move_uploaded_file($_FILES['card3']['tmp_name'],$destination);

$destination = "../img/".$_FILES['card4']['name']; //dossier "upload"
move_uploaded_file($_FILES['card4']['tmp_name'],$destination);

$destination = "../img/".$_FILES['card5']['name']; //dossier "upload"
move_uploaded_file($_FILES['card5']['tmp_name'],$destination);

$destination = "../img/".$_FILES['card6']['name']; //dossier "upload"
move_uploaded_file($_FILES['card6']['tmp_name'],$destination);

$sql = "UPDATE cards SET imgcard = 'img/$varcard1' WHERE `cards`.`id` = 1;
UPDATE cards SET imgcard = 'img/$varcard2' WHERE `cards`.`id` = 2;
UPDATE cards SET imgcard = 'img/$varcard3' WHERE `cards`.`id` = 3;
UPDATE cards SET imgcard = 'img/$varcard4' WHERE `cards`.`id` = 4;
UPDATE cards SET imgcard = 'img/$varcard5' WHERE `cards`.`id` = 5;
UPDATE cards SET imgcard = 'img/$varcard6' WHERE `cards`.`id` = 6;";

$pre = $pdo->prepare($sql);
$pre->execute();
header('Location:../indexadmin.php');//on le redirige sur la page d'accueil du site !
?>