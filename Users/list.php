<?php require_once "../config/config.php"; ?>
<html>

<head>
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="utf-8">
    <!-- <script src="js/script.js" charset="utf-8"></script> -->
    <link rel="stylesheet" href="../css/paneladmin.css">
</head>

<body>

    <?php
    $sql = "SELECT * FROM user";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $data = $pre->fetchAll(PDO::FETCH_ASSOC);

    foreach ($data as $user) { ?>
        <div class="user">
                <span class="email"><?php echo $user['email'] ?></span>
                <form class="" action="element/modifyuser.php" method="post">
                    <input type='email' name='email' placeholder="Email" />
                    <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                    <button type="submit" name="button">Modifier Email</button>
                </form>
                <form class="" action="element/modifyuser.php" method="post">
                    <input type='password' name='password' placeholder="Mot de passe" />
                    <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                    <button type="submit" name="button">Modifier MDP</button>
                </form>
                <form class="" action="element/deleteuser.php" method="post">
                    <input type='hidden' name='delete' placeholder="delete" />
                    <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                    <button class="delete" type="submit" name="button">Supprimer</button>
                </form>
        </div>
    <?php } ?>

</body>

</html>