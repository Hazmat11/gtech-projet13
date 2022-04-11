<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
  <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <col md="span : 3">
      <div class="card" style="max-width: 500px; max-height: 500px;">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/deadbydaylight.png">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Card Title<i
              class="material-icons right">more_vert</i></span>
          <p><a href="#">This is a link</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
          <p>Here is some more information about this product that is only revealed once clicked on.</p>
        </div>
      </div>
      </col>
    </div>
  </div>
</body>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>

</html>