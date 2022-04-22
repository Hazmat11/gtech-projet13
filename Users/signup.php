<?php
require_once "../config/config.php";
$sql = "INSERT INTO user(email,password) VALUES(:email,SHA1(:password))";
$dataBinded = array(
    ':email'   => $_POST['email'],
    ':password' => $_POST['password'],
);
?>
<div class="sign">
    <?php
    //get username from form
    $email = $_POST['email'];
    //prepare the statement
    $stmt = $pdo->prepare("SELECT * FROM user WHERE email=?");
    //execute the statement
    $stmt->execute([$email]);
    //fetch result
    $user = $stmt->fetch();

    if ($user) {
        echo "Un compte existe déjà avec cette adresse email !";
    } else {
        $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
        $pre = $pdo->prepare($sql);
        $pre->execute($dataBinded);
        header('Location:../index.php'); //on le redirige sur la page d'accueil du site !
    }
    ?>