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
        <?php echo $user['login'] . " " . $user['password'] ?>
        <form class="" action="modify_login.php" method="post">
          <input type='login' name='login' placeholder="Login" />
          <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
          <button type="submit" name="button">Modifier Login</button>
        </form>
        <form class="" action="modify_email.php" method="post">
          <input type='email' name='email' placeholder="Email" />
          <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
          <button type="submit" name="button">Modifier Email</button>
        </form>
        <form class="" action="modify_password.php" method="post">
          <input type='password' name='password' placeholder="Mot de passe" />
          <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
          <button type="submit" name="button">Modifier MDP</button>
        </form>
        <form class="" action="delete_user.php" method="post">
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
  <h2>Changer color gradient</h2>
  <div class="font color">
    <form class="" action="backgroundimg.php" method="post">
    </form>
  </div>
  <h2>Changer font</h2>
  <form class="" action="../element/font.php" method="post" enctype="multipart/form-data">
    <input type="file" name="font" value="" placeholder="font">
    <button type="submit" name="button">Upload font</button>
    Attention ! Format "woff2" obligatoire / ne pas mettre de espace dans le nom de la police
  </form>
  <h2>Changer couleur font</h2>
  <form class="" action="../element/font.php" method="post" enctype="multipart/form-data">
    <input type="text" name="colorfont" value="" placeholder="Code RGB sans #">
    <button type="submit" name="button">Upload font color</button>
  </form>
  <h2>Changer background</h2>
  <form class="" action="../element/background.php" method="post" enctype="multipart/form-data">
    <input type="file" name="bg" value="" placeholder="bg">
    <button type="submit" name="button">Upload background</button>
  </form>
</body>

</html>