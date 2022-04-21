<?php require_once "../config/config.php"; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="../css/contact.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="utf-8">
    <script src="../js/script.js" charset="utf-8"></script>
    <title>Gamebox</title>
</head>

<body>
    <nav>
        <div class="nav-wrapper black">
            <img class="brand-logo" src="../img/logo.png" style="padding-top: 10px;" alt="logo">
            <ul id="nav-mobile" class="hide-on-med-and-down">
                <a class="centered-nav" id="center" href="index.php">HOME</a>
                <a href="../index.php"><i class=" right Large material-icons">home</i></a>
                <a href="basket.php"><i class="right Large material-icons">add_shopping_cart</i></a>
                <a href="../Users/inscription.php"><i class=" right Large material-icons">account_box</i></a>
            </ul>
        </div>
    </nav>
    <div class="contact">
        <h1>contact</h1>
        <form action="send.php">
            <input type="text" name="txtcontact" value="" placeholder="texte">
            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>

