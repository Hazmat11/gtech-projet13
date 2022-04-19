<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <?php require_once "css/style2.php"; ?>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="utf-8">
    <script src="js/script.js" charset="utf-8"></script>
    <title>Gamebox</title>
</head>

<body>
    <nav>
        <div class="nav-wrapper black">
            <img class="brand-logo" src="img/logo.png" style="padding-top: 10px;" alt="logo">
            <ul id="nav-mobile" class="hide-on-med-and-down">
                <a class="centered-nav" id="center" href="index.php">HOME</a>
                <a href="index.php"><i class=" right Large material-icons">home</i></a>
                <a href=""><i class="right Large material-icons">add_shopping_cart</i></a>
                <a href="Users/inscription.php"><i class=" right Large material-icons">account_box</i></a>
            </ul>
        </div>
    </nav>
    <h2>contenu de la box sur le thème halloween</h2>
    <div class="container">
        <?php
        $sql = "SELECT * FROM cards;";
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $data = $pre->fetchAll(PDO::FETCH_ASSOC);
        foreach ($data as $cards) { ?>
            <div style="min-height: 250px; max-height: 300px;">
                <img class="activator floatRight" id="<?php echo $cards['list'] ?>" style="max-width: 250px; max-height: 250px;" src="<?php echo $cards['imgcard'] ?>">
                <p class="id<?php echo $cards['id'] ?>" style="max-width: 1000px;"><?php echo $cards['imgtext'] ?></p>
                <br>
            </div>
        <?php } ?>
    </div>
    <a href="basket.php">
        <h2>Ajouter au panier</h2>
    </a>
    <div class="end">
        <h2>test</h2>
    </div>
</body>

</html>