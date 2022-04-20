<html lang="en">
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
  <div class="sign">
    <h2>Inscription</h2>
    <div class="signin">
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
    <div class="signup">
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

    </div>
  </div>

  
  
</body>

<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script type="text/javascript" src="../js/signin.js"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>

</html>






