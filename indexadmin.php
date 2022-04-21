<?php require_once "config/config.php"; ?>
<html>

<head>
  <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <meta charset="utf-8">
  <!-- <script src="js/script.js" charset="utf-8"></script> -->
  <link rel="stylesheet" href="css/paneladmin.css">
</head>

<body>

  <?php
    if ($_SESSION['email'] != 'ebertrand@gaming.tech') {
      header('Location:index.php');
    }
  ?>

  <nav>
    <div class="nav-wrapper black">
      <img class="brand-logo" src="img/logo.png" style="padding-top: 10px;" alt="logo">
      <ul id="nav-mobile" class="hide-on-med-and-down">
        <a href="index.php"><i class=" right Large material-icons">home</i></a>
        <a href="basket.php"><i class="right Large material-icons">add_shopping_cart</i></a>
        <a href="Users/inscription.php"><i class=" right Large material-icons">account_box</i></a>
      </ul>
    </div>
  </nav>

  <!-- modify users -->
  <h1 style="color: white;">Liste des utilisateurs</h1>
  <a style="margin-left: 30px;" href="Users/list.php" class="waves-effect waves-light btn">GO TO THE LIST</a>


  <!-- change pictures -->
  <h2 style="color: white;">Changer les images des cartes</h2>
  <div class="cardimg">
    <form class="" action="element/cards.php" method="post" enctype="multipart/form-data">
      <div class="row" id="rowfirst">
        <?php
        $sql = "SELECT * FROM cards";
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $data = $pre->fetchAll(PDO::FETCH_ASSOC);
        foreach ($data as $cards) { ?>
          <div class="col l2">
            <div class="card" style="max-width: 250px; max-height: 350px;">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" style="width: 250px; height: 200px;" src="<?php echo $cards['imgcard'] ?>" alt="game">
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
      <input type='file' name='card1' value="" placeholder="card1">
      <input type='file' name='card2' value="" placeholder="card2">
      <input type='file' name='card3' value="" placeholder="card3">
      <input type='file' name='card4' value="" placeholder="card4">
      <input type='file' name='card5' value="" placeholder="card5">
      <input type='file' name='card6' value="" placeholder="card6">
      <button type="submit" name="button">Upload Carte</button>
    </form>
  </div>


  <!-- change font -->
  <h2 style="color: white;">Changer font</h2>
  <div class="choosefont">
    <form class="" action="element/font.php" method="post" enctype="multipart/form-data">
      <input type="file" name="font" value="" placeholder="font">
      <button type="submit" name="button">Upload font</button>
      Attention ! Format "woff2" obligatoire / ne pas mettre de espace dans le nom de la police
    </form>
  </div>


  <!-- change color font -->
  <h2 style="color: white;">Changer couleur font</h2>
  <div class="choosecolor">
    <form class="" action="element/colorfont.php" method="post" enctype="multipart/form-data">
      <input type="text" name="txt" value="" placeholder="Code RGB sans #">
      <button type="submit" name="button">Upload font color</button>
    </form>
  </div>


  <!-- change background -->
  <h2 style="color: white;">Changer background</h2>
  <div class="changebg">
    <form class="" action="element/background.php" method="post" enctype="multipart/form-data">
      <?php
      $sql = "SELECT * FROM backgrounds";
      $pre = $pdo->prepare($sql);
      $pre->execute();
      $data = $pre->fetchAll(PDO::FETCH_ASSOC);
      foreach ($data as $backgrounds) { ?>
        <div class="col">
          <div class="card" style="max-width: 250px; max-height: 350px;">
            <img class="activator" style="width: 250px; height: 200px;" src="<?php echo $backgrounds['imgbackground'] ?>" alt="background">
          </div>
        </div>
      <?php } ?>
      <input type="file" name="bg" value="" placeholder="bg">
      <button type="submit" name="button">Upload background</button>
    </form>
  </div>

  <!-- change description game -->

  <h2 style="color: white;">Changer text game</h2>
  <div class="changetxt row">
    <form class="" action="element/text.php" method="post" enctype="multipart/form-data">
      <div classe="col l2">
        <input type="text" name="txtgame1" value="" placeholder="description des jeux">
        <input type="text" name="txtgame2" value="" placeholder="description des jeux">
        <input type="text" name="txtgame3" value="" placeholder="description des jeux">
        <input type="text" name="txtgame5" value="" placeholder="description des jeux">
      </div>
      <button type="submit" name="button">Upload desc game</button>
    </form>
  </div>
</body>

<!-- change legals mentions-->

<h2 style="color: white;">Changer mention légales</h2>
  <div class="changetxt row">
    <form class="" action="element/mention.php" method="post" enctype="multipart/form-data">
      <div classe="col l2">
        <input type="text" name="txt" value="" placeholder="mentions légales">
      </div>
      <button type="submit" name="button">Upload text mention</button>
    </form>
  </div>
</body>

<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>

</html>