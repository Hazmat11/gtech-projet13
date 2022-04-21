<link rel="stylesheet" href="../css/accueil.css">

<?php
require_once "../config/config.php";
$sql = "SELECT * FROM user WHERE email='" . $_POST['email'] . "' AND password=SHA1('" . $_POST['password'] . "')";
$pre = $pdo->prepare($sql);
$pre->execute();
$user = current($pre->fetchAll(PDO::FETCH_ASSOC)); //current prend la première ligne du tableau
?>
<div class="errorpw">
  <?php


  if (($_POST['email'] == 'ebertrand@gaming.tech') and ($_POST['password'] == 'admin123')) {
    $_SESSION['email'] = 'ebertrand@gaming.tech';
    header('Location:../indexadmin.php');
  }


  if (empty($user)) { //vérifie si le resultat est vide !
    echo "Email ou mot de passe incorrect !";
  } else {
    $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
    header('Location:../index.php'); //on le redirige sur la page d'accueil du site !
  }
  ?>