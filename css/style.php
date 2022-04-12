<?php require_once "./element/font.php"; ?>
<style>
@font-face {
    font-family: MeltedMonster;
    src: url(../font/MeltedMonster.woff2) format('woff2');
}

.row {
    max-width: fit-content;
    justify-content: center;
}

h1 {
    text-transform: uppercase;
    text-align: center;
    font-family: <?php echo $varfont;?>;
    color: #882d2d;
}

nav {
    color: black;
}
</style>