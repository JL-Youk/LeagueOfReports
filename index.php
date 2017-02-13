<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
      <link rel='icon' href='images/bard.png ?>'/>
  <title>League of reports</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/sweetalert.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">League of reports</a>
      <ul class="right hide-on-med-and-down">
        <li><a id="button_report_1" class="waves-effect waves-light btn-large red">Get report!<i class="material-icons right">report_problem</i></a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a id="button_report_2" class="waves-effect waves-light btn-large red">Get report!<i class="material-icons right">report_problem</i></a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center white-text text-lighten-2">Search:</h1>
        <div class="row center">
          <div class="row">
            <div class="col s12">
              <div class="row">
                <form class="" action="index.php" method="get">
                  <div class="input-field col s12">
                    <div class="input-field col s12">
                      <input placeholder="Summoner's name" id="autocomplete-input" name="summoner" type="text" class="validate autocomplete white light-blue-text z-depth-3">
                    </div>
                  </div>
                  <div class="col offset-s6 s6">
                    <button class="btn-large waves-effect waves-light light-blue z-depth-3" type="submit">Get search
                      <i class="material-icons right">search</i>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="images/trundel_voli.jpg" alt="Unsplashed background img 1"></div>
  </div>
  <div class="container">
    <div class="section">
      <div class="row">
        <?php
        if(isset($_GET['summoner'])) {
          $summoner = $_GET['summoner'];
          echo "<h1 class='blue-text text-lighten-2'>".$summoner."</h1>";
        }
         ?>
      </div>

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center blue-text text-lighten-2"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Recherche rapide</h5>
            <p class="light">Faite des recherches rapide sur vos mates pendants la phase de draft</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center blue-text text-lighten-2"><i class="material-icons">trending_up</i></h2>
            <h5 class="center">Perdez plutot 3 pl</h5>
            <p class="light">BLABLABLA</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center blue-text text-lighten-2"><i class="material-icons">account_balance</i></h2>
            <h5 class="center">Justice blabla</h5>
            <p class="light">blablabla</p>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">"Œil pour œil"</h5>
          <div class="">
            Kayle
          </div>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="images/kayli.jpg" alt="Unsplashed background img 3"></div>
  </div>
  <footer class="page-footer grey darken-4">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">What is League of reports?</h5>
          <p class="grey-text text-lighten-4">BLABLABLABLABLA</p>
        </div>
      </div>
    </div>
    <div class="footer-copyright black">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="https://frompixel.com">FromPixel</a>
      </div>
    </div>
  </footer>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <script src="js/sweetalert.min.js"></script>
  <script src="js/init.js"></script>
  </body>
</html>
