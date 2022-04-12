<?php require_once "config/fetchfont.php"; ?>
<?php require_once "element/background.php"; ?>
<style>
    @font-face {
        font-family: MeltedMonster;
        src: url(<?php echo $varFont; ?>) format('woff2');
    }

    body {
        background: url(<?php echo $varBG; ?>);
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