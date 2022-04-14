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
                <p style="max-width: 1000px;"><?php echo $cards['imgtext'] ?></p>
                <br>
            </div>
        <?php } ?>
    </div>
    <a href="basket.php">
        <h2>Ajouter au panier</h2>
    </a>
    <h2 class="blackh1" id="concept">notre concept</h2>
    <div class="end">
        <h2>test</h2>
    </div>
</body>

</html>