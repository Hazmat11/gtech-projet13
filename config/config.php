
<?php
    SESSION_start();
    $pdo = new PDO(
      'mysql:host=localhost;dbname=projet 13;',
      'root',
      '',
      array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
?>
