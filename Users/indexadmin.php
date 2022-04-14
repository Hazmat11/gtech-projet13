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
  <h1>Liste des utilisateurs</h1>
  <?php
  $sql = "SELECT * FROM user";
  $pre = $pdo->prepare($sql);
  $pre->execute();
  $data = $pre->fetchAll(PDO::FETCH_ASSOC);

  foreach ($data as $user) { ?>
    <div class="user">
      <div class="bloc_user">
        <span class="email"><?php echo $user['email'] ?></span>
        <form class="" action="../element/modifyuser.php" method="post">
          <input type='email' name='email' placeholder="Email" />
          <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
          <button type="submit" name="button">Modifier Email</button>
        </form>
        <form class="" action="../element/modifyuser.php" method="post">
          <input type='password' name='password' placeholder="Mot de passe" />
          <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
          <button type="submit" name="button">Modifier MDP</button>
        </form>
        <form class="" action="../element/modifyuser.php" method="post">
          <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
          <button class="delete" type="submit" name="button">Supprimer</button>
        </form>
      </div>
    </div>
  <?php } ?>
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
  <h2>Changer text game</h2>
  <div class="changetxt">
    <form class="" action="../element/text.php" method="post" enctype="multipart/form-data">
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