<?php require_once "config/config.php"; ?>
<html>

<head>
<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <meta charset="utf-8">
  <script src="js/script.js" charset="utf-8"></script>
  <link rel="stylesheet" href="css/paneladmin.css">
</head>

<body>
  
  <h2>Changer les images des cartes</h2>
  <p>attention mettre en nom d'image "image + numéro" pour savoir quelle image c'est merci bien !! ^^</p>
  <div class="cardimg">
    <form class="" action="element/cards.php" method="post" enctype="multipart/form-data"><div class="row" id="rowfirst">
      <?php
      $sql = "SELECT * FROM cards";
      $pre = $pdo->prepare($sql);
      $pre->execute();
      $data = $pre->fetchAll(PDO::FETCH_ASSOC);
      foreach ($data as $cards) { ?>
        <div class="col">
          <div class="card" style="max-width: 250px; max-height: 350px;">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" style="width: 250px; height: 200px;" src="<?php echo $cards['imgcard'] ?>" ;>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
      <input type='file' name='card1' value="" placeholder="card1">
      <input type='file' name='card2' value="" placeholder="card2">
      <input type='file' name='card3' value="" placeholder="card3">
      <input type='file' name='card5' value="" placeholder="card5">
      <button type="submit" name="button">Upload Carte</button>
    </form>
  </div>


  <!-- change font -->
  <h2>Changer font</h2> 
  <div class="choosefont">
    <form class="" action="element/font.php" method="post" enctype="multipart/form-data">
      <input type="file" name="font" value="" placeholder="font">
      <button type="submit" name="button">Upload font</button>
      Attention ! Format "woff2" obligatoire / ne pas mettre de espace dans le nom de la police
    </form>
  </div>


  <!-- change color font -->
  <h2>Changer couleur font</h2>
  <div class="choosecolor">
    <form class="" action="element/colorfont.php" method="post" enctype="multipart/form-data">
      <input type="text" name="txt" value="" placeholder="Code RGB sans #">
      <button type="submit" name="button">Upload font color</button>
    </form>
  </div>

  
  <!-- change background -->
  <h2>Changer background</h2>
  <div class="changebg">
    <form class="" action="element/background.php" method="post" enctype="multipart/form-data">
      <input type="file" name="bg" value="" placeholder="bg">
      <button type="submit" name="button">Upload background</button>
    </form>
  </div>
<!-- change description game -->
  
  <h2>Changer text game</h2>
  <div class="changetxt">
    <form class="" action="element/text.php" method="post" enctype="multipart/form-data">
      <input type="text" name="txtgame1" value="" placeholder="description des jeux">
      <input type="text" name="txtgame2" value="" placeholder="description des jeux">
      <input type="text" name="txtgame3" value="" placeholder="description des jeux">
      <input type="text" name="txtgame4" value="" placeholder="description des jeux">
      <input type="text" name="txtgame5" value="" placeholder="description des jeux">
      <input type="text" name="txtgame6" value="" placeholder="description des jeux">
      <button type="submit" name="button">Upload font color</button>
    </form>
  </div>
</body>

</html>