<?php
require_once "../config/config.php";
$sql = "INSERT INTO user(email,password,login) VALUES(:email,SHA1(:password),:login)";
$dataBinded=array(
    ':email'   => $_POST['email'],
    ':password'=> $_POST['password'],
    ':login'=> $_POST['login']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../index.php');//on le redirige sur la page d'accueil du site !
?>
