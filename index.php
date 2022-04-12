<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <?php require_once "css/style.php"; ?>
  <meta charset="utf-8">
  <script src="js/script.js" charset="utf-8"></script>
  <title>Gamebox</title>
</head>

<body>
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="Users/inscription.php">Inscription</a></li>
      </ul>
    </div>
  </nav>
  <h1>la gamebox d'octobre sur le theme halloween</h1>
  <div class="row">
    <?php
    $sql = "SELECT * FROM cards";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $data = $pre->fetchAll(PDO::FETCH_ASSOC);
    foreach ($data as $cards) { ?>
      <div class="col">
        <div class="card" style="max-width: 250px; max-height: 250px;">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="<?php echo $cards['imgcard'] ?>" ;>
          </div>
        </div>
      </div>
    <?php } ?>
</body>

</html>