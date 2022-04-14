<link rel="stylesheet" href="../css/accueil.css">

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

    <h1>Inscription</h1>
    <div class="signin">
        <form method="post" action="signup.php">
            <input type='email' name='email' placeholder="Email" />
            <input type='password' name='password' placeholder="Mot de passe" />
            <input type='submit' value="M'inscrire" />
        </form>
    </div>
    <h1>Connexion</h1>
    <div class="signup">
        <form method="post" action="login.php">
            <input type='email' name='email' placeholder="Email" />
            <input type='password' name='password' placeholder="Mot de passe" />
            <input type='submit' value='Me connecter' />
        </form>
    </div>
</div>