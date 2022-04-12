<?php require_once "config/fetchfont.php"; ?>
<style>
@font-face {
    font-family: MeltedMonster;
    src: url(<?php echo $fonts['mainfont'] ?>) format('ttf');
}

.row {
    max-width: fit-content;
    justify-content: center;
}

h1 {
    text-transform: uppercase;
    text-align: center;
    font-family: MeltedMonster;
    color: #882d2d;
}

nav {
    color: black;
}
</style>
