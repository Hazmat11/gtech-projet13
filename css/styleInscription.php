<?php require_once "../config/fetchfont.php"; ?>
<style>
    @font-face {
        font-family: MeltedMonster;
        src: url(<?php echo $varFont; ?>) format('woff2');
    }

    .firstpage {
        background: url(<?php echo $varBG; ?>);
        background-repeat: no-repeat;
        background-size: cover;
        height: fit-content;
        padding-right: 40%;
        padding-left: 40%;
    }

    h1 {
        font-size: 100px;
        text-transform: uppercase;
        text-align: center;
        font-family: MeltedMonster;
        color: #<?php echo $varColor; ?>;
    }

    h2 {
        text-transform: uppercase;
        text-align: center;
        font-family: MeltedMonster;
        color: #<?php echo $varColor ?>;
    }
</style>