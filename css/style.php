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
        font-size: 100px;
        text-transform: uppercase;
        text-align: center;
        font-family: MeltedMonster;
        color: #882d2d;
    }

    h2 {
        text-transform: uppercase;
        text-align: center;
        font-family: MeltedMonster;
        color: #882d2d;
    }

    h3 {
        text-transform: uppercase;
        text-align: center;
        font-family: MeltedMonster;
        color: #882d2d;
    }

    nav {
        background-color: black;
    }

    .centered-nav{
        text-transform: uppercase;
        float: none;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>