<?php require_once "config/fetchfont.php"; ?>
<style>
    @font-face {
        font-family: MeltedMonster;
        src: url(<?php echo $varFont; ?>) format('woff2');
    }

    #<?php echo $varPair ?> {
        float: left;
    }

    #<?php echo $varImpair ?> {
        float: right;
    }

    .id4 {
        font-size: 100px;
        text-transform: uppercase;
        text-align: center;
        font-family: MeltedMonster;
        color: #<?php echo $varColor; ?>;
    }

    .id6 {
        font-size: 100px;
        text-transform: uppercase;
        text-align: center;
        font-family: MeltedMonster;
        color: #<?php echo $varColor; ?>;
    }

    .blackh1 {
        font-size: 100px;
        text-transform: uppercase;
        text-align: center;
        font-family: MeltedMonster;
        color: black;
    }

    h2 {
        text-transform: uppercase;
        text-align: center;
        font-family: MeltedMonster;
        color: #<?php echo $varColor ?>;
    }

    h3 {
        text-transform: uppercase;
        text-align: center;
        font-family: MeltedMonster;
        color: #<?php echo $varColor; ?>;
    }

    p {
        text-align: center;
        font-size: 35px;
    }

    nav {
        background-color: black;
    }

    #center {
        font-size: 40px;
    }

    .centered-nav-left {
        text-transform: uppercase;
        float: none;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(0%, -50%);
    }

    .centered-nav {
        text-transform: uppercase;
        float: none;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .centered-nav-right {
        text-transform: uppercase;
        float: none;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-100%, -50%);
    }

    .end {
        background-color: black;
        color: white;
        font-size: 30px;
        text-transform: uppercase;
    }

    .end a {
        display: inline-block;
        text-align: center;
    }

    .end img {
        vertical-align: middle;
    }

    a {
        color: inherit;
    }
</style>