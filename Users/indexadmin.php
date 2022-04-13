<?php require_once "../config/config.php"; ?>
<html>

<head>
  <link rel="stylesheet" href="../css/paneladmin.css">
</head>

<body>
  <?php

  // if ($_SESSION['email'] != 'ebertrand@gaming.tech') {
  //   header('Location:index.php');
  // }
  ?>
  <h2>Changer les images des cartes</h2>
  <div class="cardimg">
    <form class="" action="../element/cards.php" method="post" enctype="multipart/form-data">
      <input type='file' name='card1' value="" placeholder="card1">
      <input type='file' name='card2' value="" placeholder="card2">
      <input type='file' name='card3' value="" placeholder="card3">
      <input type='file' name='card4' value="" placeholder="card4">
      <input type='file' name='card5' value="" placeholder="card5">
      <input type='file' name='card6' value="" placeholder="card6">
      <button type="submit" name="button">Upload Carte</button>
    </form>
  </div>
  <h2>Changer font</h2>
  <div class="choosefont">
    <form class="" action="../element/font.php" method="post" enctype="multipart/form-data">
      <input type="file" name="font" value="" placeholder="font">
      <button type="submit" name="button">Upload font</button>
      Attention ! Format "woff2" obligatoire / ne pas mettre de espace dans le nom de la police
    </form>
  </div>
  <h2>Changer couleur font</h2>
  <div class="choosecolor">
    <form class="" action="../element/colorfont.php" method="post" enctype="multipart/form-data">
      <input type="text" name="txt" value="" placeholder="Code RGB sans #">
      <button type="submit" name="button">Upload font color</button>
    </form>
  </div>
  <h2>Changer background</h2>
  <div class="changebg">
    <form class="" action="../element/background.php" method="post" enctype="multipart/form-data">
      <input type="file" name="bg" value="" placeholder="bg">
      <button type="submit" name="button">Upload background</button>
    </form>
  </div>
</body>

</html>