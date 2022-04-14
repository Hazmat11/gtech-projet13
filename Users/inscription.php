<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-signin-client_id" content="932199003697-gqfkgqe9ornchc121gm1a4ohh8pko53o.apps.googleusercontent.com">
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
    </form>
  </div>
</div>

<div class="g-signin2" data-onsuccess="onSignIn"></div>
  
</body>

<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>

</html>






