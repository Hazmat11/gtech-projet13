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

  <!-- navbar -->
  <nav>
    <div class="nav-wrapper black">
      <img class="brand-logo" src="img/logo.png" style="padding-top: 10px;" alt="logo">
      <ul id="nav-mobile" class="hide-on-med-and-down">
        <a class="centered-nav-right" id="center" href="more.php">la box du mois</a>
        <a class="centered-nav" id="center">|</a>
        <a class="centered-nav-left" id="center" href="#concept">Notre concept</a>
        <a href="basket.php"><i class="right Large material-icons">add_shopping_cart</i></a>
        <?php if (isset($_SESSION['user'])): ?>
          <a href="Users/logout.php"><i class=" right Large material-icons">clear</i></a>
        <?php else: ?>
          <a href="Users/inscription.php"><i class=" right Large material-icons">account_box</i></a>
        <?php endif; ?>
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
        <div class="col l2 s6">
          <div class="card" style="max-width: 250px; max-height: 350px;">
            <div class="card-image waves-effect waves-block waves-light">
              <a href="more.php">
                <img class="activator" style="width: 250px; height: 350px;" src="<?php echo $cards['imgcard'] ?>" alt="game">
              </a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
    <a href="basket.php">
      <h2 class="h2txt">Procéder au paiement avec carte</h2>
    </a>
    <a href="more.php">
      <h2 style="padding-bottom: 30px;" class="h2txt">en savoir plus</h2>
    </a>
  </div>

  <!-- presentation -->
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

  <!-- end part with legals mentions -->
  <div class="end">
    <img src="img/grandlogo.png" alt="logo" style="padding: 30px;">
    <a href="element/contact.php">Contact</a>
    <a href="">/</a>
    <button id="myBtn">Mentions légales</button>
  </div>
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <?php
      $sql = "SELECT * FROM mention";
      $pre = $pdo->prepare($sql);
      $pre->execute();
      $data = $pre->fetchAll(PDO::FETCH_ASSOC);
      foreach ($data as $mention) { ?>
        <p><?php echo $mention['text'] ?></p>
      <?php } ?>
    </div>
  </div>

  <script>
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
      modal.style.display = "block";
    }
    span.onclick = function() {
      modal.style.display = "none";
    }
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>

</body>

</html>