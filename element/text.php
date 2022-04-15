<?php
require_once "../config/config.php";

$varTxt1 = $_POST['txtgame1'];
$varTxt2 = $_POST['txtgame2'];
$varTxt3 = $_POST['txtgame3'];
$varTxt4 = $_POST['txtgame4'];
$varTxt5 = $_POST['txtgame5'];
$varTxt6 = $_POST['txtgame6'];

$sql = "UPDATE cards SET imgtext = '$varTxt1' WHERE `cards`.`id` = 1;
UPDATE cards SET imgtext = '$varTxt2' WHERE `cards`.`id` = 2;
UPDATE cards SET imgtext = '$varTxt3' WHERE `cards`.`id` = 3;
UPDATE cards SET imgtext = '$varTxt5' WHERE `cards`.`id` = 5;";

$pre = $pdo->prepare($sql);
$pre->execute();
header('Location:../indexadmin.php');//on le redirige sur la page d'accueil du site !
