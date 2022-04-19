<?php require_once "config/fetchfont.php"; ?>
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
    }

    #rowfirst {
        max-width: fit-content;
        justify-content: right;
    }

    .blackh1 {
        font-size: 100px;
        text-transform: uppercase;
        text-align: center;
        font-family: MeltedMonster;
        color: black;
    }

    .h2txt {
        font-size: 70px;
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

    .container {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .item {
        width: 10em;
    }

    i {
        font-size: 300px;
    }

    .end {
        background-color: black;
        color: white;
        font-size: 30px;
        text-transform: capitalize;
    }

    .end a {
        text-align: center;
    }

    a {
        color: inherit;
    }
</style>