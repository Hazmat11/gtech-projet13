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

    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    .rol {
        display: flex;
        flex-wrap: warp;
        margin: 0 -16px;
    }

    .col-25 {
        flex: 25%;
    }
    
    .col-50 {
        flex: 50%;
    }

    .col-75 {
        flex: 75%;
    }

    .col-25,
    .col-50,
    .col-75 {
        padding: 0 16px;
    }

    hr {
        border: 1px solid lightgrey;
    }

    span.price {
        float: right;
        color: grey;
    }

    .block {
        background-color: #f2f2f2;
        padding: 5px 20px 15px 20px;
        border: 1px solid lightgrey;
        border-radius: 3px;
    }
</style>
