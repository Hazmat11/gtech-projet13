
<!-- modify email -->
<?php
require_once "../config/config.php";
$sql = "UPDATE user SET email=:email WHERE id=:id";

$dataBinded = array(
    ':id'   => $_POST['id'],
    ':email'   => $_POST['email'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../Users/list.php');//on le redirige sur la page d'accueil du site !
?>


<!-- modify password -->
<?php
require_once "../config/config.php";
$sql = "UPDATE user SET password=SHA1(:password) WHERE id=:id";

$dataBinded = array(
    ':id'   => $_POST['id'],
    ':password'   => $_POST['password'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../Users/list.php');//on le redirige sur la page d'accueil du site !
?>