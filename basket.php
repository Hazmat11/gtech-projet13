<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <?php require_once "css/style.php"; ?>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="js/script.js" charset="utf-8"></script>
    <title>Gamebox</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <nav>
        <div class="nav-wrapper">
            <img class="brand-logo" src="img/logo.png" style="padding-top: 10px;" alt="logo">
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <a class="centered-nav-right" id="center" href="more.php">la box du mois</a>
                <a class="centered-nav" id="center" href="">|</a>
                <a class="centered-nav-left" id="center" href="#concept">Notre concept</a>
                <a href="basket.php"><i class="medium material-icons">add_shopping_cart</i></a>
                <a href="Users/inscription.php"><i class="medium material-icons">account_box</i></a>
            </ul>
        </div>
    </nav>

    <div id="smart-button-container">
        <div style="text-align: center;">
            <div id="paypal-button-container"></div>
        </div>
    </div>
    <div id="smart-button-container">
        <div style="text-align: center;">
            <div id="paypal-button-container"></div>
        </div>
    </div>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="DX4VD7Z9PEFDQ">
        <input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_paynow_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
        <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
    </form>

    <a href="https://buy.stripe.com/6oEeXXf1K45gbXGeUW">
        <h2 class="h2txt">Procéder au paiement avec carte</h2>
    </a>

    <div class="end">
        <img src="img/Sans titre.png" alt="">
    </div>
</body>

</html>