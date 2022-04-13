<?php
require_once "../config/config.php";
$sql = "UPDATE fonts SET fontcolor = :txt WHERE id = 1";
$dataBinded=array(
    ':txt'   => $_POST['txt']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../Users/indexadmin.php');//on le redirige sur la page d'accueil du site !
 ?>