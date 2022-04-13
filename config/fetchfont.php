<?php require_once "config.php"; ?>
  <?php
  $sql = "SELECT * FROM fonts";
  $pre = $pdo->prepare($sql);
  $pre->execute();
  $data = $pre->fetchAll(PDO::FETCH_ASSOC);

  foreach ($data as $user) { ?>
 <?php $varFont = $user['mainfont'] ?>
 <?php $varColor = $user['fontcolor'] ?>
  <?php } ?>

  <?php
  $sql = "SELECT * FROM backgrounds";
  $pre = $pdo->prepare($sql);
  $pre->execute();
  $data = $pre->fetchAll(PDO::FETCH_ASSOC);

  foreach ($data as $user) { ?>
 <?php $varBG = $user['imgbackground'] ?>
  <?php } ?>


