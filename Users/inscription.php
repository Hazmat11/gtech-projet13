<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-signin-client_id" content="932199003697-g07sr47tjea7j0rab5tg8in7ndcq1k02.apps.googleusercontent.com">
  <link rel="stylesheet" href="../css/accueil.css">
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>Document</title>
</head>

<body>
<nav class="row">
    <div class="col s12 m12 l12 nav-wrapper black">
        <img class="brand-logo left" src="../img/logo.png" style="padding-top: 10px;" alt="logo">
          <ul id="nav-mobile" class="hide-on-med-and-down">
            <a href="../index.php"><i class="right small material-icons">home</i></a>
            <a href="../basket.php"><i class="right small material-icons">add_shopping_cart</i></a>
          </ul>
    </div>
</nav>

<div class="row sign">
    <h2>Inscription</h2>
    <div class="col s12 m12 l12 signin">
      <form method="post" action="signup.php">
        <input type='email' name='email' placeholder="Email"/>
        <input type='password' name='password' placeholder="Mot de passe"/>
        <input type='text' name='login' placeholder="Pseudo"/>
        <button class="btn waves-effect waves-light" type="submit" name="action">
          S'inscrire
          <i class="material-icons right">send</i>
        </button>
      </form>
    </div>
    <h2>Connexion</h2>
    <div class="col s12 m12 l12 signup">
      <form method="post" action="login.php">
        <input type='email' name='email' placeholder="Email"/>
        <input type='password' name='password' placeholder="Mot de passe"/>
        <button class="btn waves-effect waves-light" type="submit" name="action">
          Se connecter
          <i class="material-icons right">send</i>
        </button>
        <div class="g-signin2 center" data-onsuccess="onSignIn"></div>
      </form>
    </div>
    <div id="col s12 m12 l12 smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
    <div id="col s12 m12 l12 smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
</div>

  
  
</body>

<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
<!-- <script type="text/javascript" src="../js/signin.js"></script> -->
<script src="https://apis.google.com/js/platform.js" async defer></script>

</html>






