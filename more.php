<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <?php require_once "css/style2.php"; ?>
    <meta charset="utf-8">
    <script src="js/script.js" charset="utf-8"></script>
    <title>Gamebox</title>
</head>

<body>
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <a class="centered-nav-right" id="center" href="more.php">la box du mois</a>
                <a class="centered-nav" id="center" href="Users/inscription.php">|</a>
                <a class="centered-nav-left" id="center" href="#concept">Notre concept</a>
                <a href="Users/inscription.php">Inscription</a>
            </ul>
        </div>
    </nav>
    <h1>contenu de la box sur le thème halloween</h1>
    <h1><br></h1>
    <div class="container">
        <div class="row">
            <?php
            $sql = "SELECT * FROM cards WHERE list='pair';";
            $pre = $pdo->prepare($sql);
            $pre->execute();
            $data = $pre->fetchAll(PDO::FETCH_ASSOC);
            foreach ($data as $cards) { ?>
                <img class="activator floatRight" id="pair" style="max-width: 250px; max-height: 250px;" src="<?php echo $cards['imgcard'] ?>" ;>
                <p style="margin-bottom: 100px;"><?php echo $cards['imgtext'] ?></p>
            <?php } ?>
            <?php
            $sql = "SELECT * FROM cards WHERE list='impair';";
            $pre = $pdo->prepare($sql);
            $pre->execute();
            $data = $pre->fetchAll(PDO::FETCH_ASSOC);
            foreach ($data as $cards) { ?>
                <p style="margin-bottom: 100px;"><?php echo $cards['imgtext'] ?></p>
                <img class="activator floatRight" id="impair" style="max-width: 250px; max-height: 250px;" src="<?php echo $cards['imgcard'] ?>" ;> <?php } ?>
        </div>
    </div>
    <a href="basket.php">
        <h2>Ajouter au panier</h2>
    </a>
    <h1 class="blackh1" id="concept">notre concept</h1>
    <div class="end">
        <h1>test</h1>
    </div>
</body>

</html>