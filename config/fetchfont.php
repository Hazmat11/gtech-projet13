<?php require_once "config.php"; ?>
  <?php
  $sql = "SELECT * FROM fonts";
  $pre = $pdo->prepare($sql);
  $pre->execute();
  $data = $pre->fetchAll(PDO::FETCH_ASSOC);

  foreach($data as $user){ ?>
 <?php  $varFont = $user['mainfont']?>
  <?php } ?>
?>
