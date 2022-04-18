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
      <div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
    <div id="smart-button-container">
      <div style="text-align: center;">
        <div style="margin-bottom: 1.25rem;">
          <p>ta gueule</p>
          <select id="item-options"><option value="" price=""> -  EUR</option></select>
          <select style="visibility: hidden" id="quantitySelect"></select>
        </div>
      <div id="paypal-button-container"></div>
      </div>
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
  <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=EUR" data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'pill',
          color: 'gold',
          layout: 'vertical',
          label: 'pay',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"EUR","value":47,"breakdown":{"item_total":{"currency_code":"EUR","value":35},"shipping":{"currency_code":"EUR","value":5},"tax_total":{"currency_code":"EUR","value":7}}}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            
            // Full available details
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

            // Show a success message within this page, e.g.
            const element = document.getElementById('paypal-button-container');
            element.innerHTML = '';
            element.innerHTML = '<h3>Thank you for your payment!</h3>';

            // Or go to another URL:  actions.redirect('thank_you.html');
            
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>
    </div>
  </div>

  
  
</body>

<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script type="text/javascript" src="../js/signin.js"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>

</html>






