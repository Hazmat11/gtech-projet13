<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <?php require_once "css/style.php"; ?>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="js/script.js" charset="utf-8"></script>
  <title>Gamebox</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <nav>
    <div class="nav-wrapper black">
      <img class="brand-logo" src="img/logo.png" style="padding-top: 10px;" alt="logo">
      <ul id="nav-mobile" class="hide-on-med-and-down">
        <a class="centered-nav-right" id="center" href="more.php">la box du mois</a>
        <a class="centered-nav" id="center" href="">|</a>
        <a class="centered-nav-left" id="center" href="#concept">Notre concept</a>
        <a href="index.php"><i class=" right Large material-icons">home</i></a>
        <a href="https://buy.stripe.com/fZedTTbPycBM2n63cc"><i class="right Large material-icons">add_shopping_cart</i></a>
        <a href="Users/inscription.php"><i class=" right Large material-icons">account_box</i></a>
      </ul>
    </div>
  </nav>

  <div class="firstpage">
    <h1 style="margin-top: 0px; padding-top: 20px">la gamebox d'octobre sur le theme halloween</h1>
    <div class="row" id="rowfirst">
      <?php
      $sql = "SELECT * FROM cards";
      $pre = $pdo->prepare($sql);
      $pre->execute();
      $data = $pre->fetchAll(PDO::FETCH_ASSOC);
      foreach ($data as $cards) { ?>
        <div class="col">
          <div class="card" style="max-width: 250px; max-height: 350px;">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" style="width: 250px; height: 350px;" src="<?php echo $cards['imgcard'] ?>" ;>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
    <a href="https://buy.stripe.com/fZedTTbPycBM2n63cc">
      <h2 class="h2txt">Procéder au paiement avec carte</h2>
    </a>
    <a href="more.php">
      <h2 style="padding-bottom: 30px;" class="h2txt">en savoir plus</h2>
    </a>
  </div>
  <div>
    <h2 class="blackh1" id="concept">notre concept</h2>
    <div class="container">
      <p>Gamebox propose tous les mois des box de jeux et goodies sur différents thèmes.
        Chaque mois nous vous proposont une box contenant quatres jeux et deux goodies.
        Trois jeux et un goodies est connu à l'avance et le quatrième jeu ainsi que le dernier goodies
        sont des mystères. Les objets mystères seront bien sur en lien avec le thème du mois.
      </p>
    </div>
  </div>
  <div class="end">
    <img src="img/Sans titre.png" alt="">
    <a href="element/contact.php">Contact</a>
  </div>
</body>

</html>