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

  <div class="row">
    <div class="col-75">
      <div class="block">
        <div class="row">
          <div class="col-50">
            <h3>Moyens de paiement</h3>
            <from>
              <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="DX4VD7Z9PEFDQ">
                <input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_paynow_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
                <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
                <a href="https://buy.stripe.com/6oEeXXf1K45gbXGeUW">
                  <p>Payer avec la carte</p>
                </a>
              </form>
            </from>
          </div>
        </div>
      </div>
    </div>
    <div class="col-25">
      <div class="block">
        <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b></b></span></h4>
        <p>Gamebox d'Halloween <span class="price">39.99€</span></p>
        <p>Frais de livraison <span class="price">5€</span></p>
        <hr>
        <p>Total <span class="price" style="color:black"><b>44.99€</b></span></p>
      </div>
    </div>
  </div>
  <div class="end">
    <img src="img/grandlogo.png" alt="" style="padding: 30px;">
    <a href="element/contact.php">Contact</a>
    <a href="">/</a>
    <button id="myBtn">Mentions légales</button>
  </div>
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor arcu tempus aliquet convallis. Nunc vel erat sed mauris posuere placerat sed nec nisl. Donec placerat aliquam gravida. Suspendisse facilisis in nisl vel dignissim. Praesent nec arcu dui. Phasellus at elit nec nulla dignissim euismod quis eu nisl. Vivamus quis velit augue. Sed ac porta ligula. Curabitur vitae blandit massa. Curabitur mollis scelerisque vestibulum. Praesent sit amet orci ullamcorper, tincidunt urna sit amet, eleifend elit. Praesent ut ullamcorper est, non elementum sem. Maecenas mi velit, mattis sit amet mollis convallis, maximus eu ligula.</p>
    </div>


    <script>
      var modal = document.getElementById("myModal");
      var btn = document.getElementById("myBtn");
      var span = document.getElementsByClassName("close")[0];
      btn.onclick = function() {
        modal.style.display = "block";
      }
      span.onclick = function() {
        modal.style.display = "none";
      }
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
    </script>

</body>

</html>
