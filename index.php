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
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <script src="js/sweetalert.min.js"></script>
  <script src="js/init.js"></script>
</head>
<body>
  <?php
  include_once 'config.php';
   ?>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">LeagueOfReports.eu</a>
      <ul class="right hide-on-med-and-down">
        <li><a id="button_report_1" class="waves-effect waves-light btn-large red">Get report!<i class="material-icons right">report_problem</i></a></li>
      </ul>
      <ul id="nav-mobile" class="side-nav">
        <li><a id="button_report_2" class="waves-effect waves-light btn-large red">Get report!<i class="material-icons right">report_problem</i></a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <?php
  if(isset($_POST['report_summoner'])) {
    $report_summoner = htmlspecialchars($_POST["report_summoner"], ENT_QUOTES);
    if(isset($_POST['report_text'])) {
      $report_text = htmlspecialchars($_POST["report_text"], ENT_QUOTES);
    }
    else {
      $report_text = "";
    }
    $stmt = $dbh->prepare("INSERT INTO lors_reports (invocateurs, textes) VALUES (:invocateur, :texte)");
    $stmt->bindParam(':invocateur', $invocateur_get_report);
    $stmt->bindParam(':texte', $texte_get_report);
    // insertion d'une ligne
    $invocateur_get_report = $report_summoner;
    $texte_get_report = $report_text;
    $stmt->execute();
    // on cherche dans le 2eme table
    $stmt = $dbh->prepare("SELECT invocateurs FROM lors_invocateur_reported WHERE invocateurs = ?");
    if ($stmt->execute(array($invocateur_get_report))) {
      $existant = false;
      while ($row = $stmt->fetch()) {
        $existant = true;
      }
      if ($existant) {

      }
      else {
        $stmt = $dbh->prepare("INSERT INTO lors_invocateur_reported (invocateurs, nb_report) VALUES (:invocateur, :nb)");
        $stmt->bindParam(':invocateur', $invocateur_get_report);
        $stmt->bindParam(':nb', $nb_get_report);
        $invocateur_get_report = $report_summoner;
        $nb_get_report = 1;
        $stmt->execute();
      }
    }
    ?>
    <script type="text/javascript">
      swal({
        title: "Report bien enregistré!",
        text: "Merci de ta contribution",
        timer: 4000,
        imageUrl: "images/reported.gif"
      });
    </script>
    <?php
  }
  else {
    // pas de report
  }
   ?>
  <div class="container" id="formulaire_report">
    <div class="section">
      <div class="row">
        <h4>Bienvenue dans le formulaire de report</h4>
        <form class="" action="index.php" method="post" enctype='multipart/form-data'>
          <div class="input-field col m6 s12">
           <input id="name" type="text" class="validate" name="report_summoner" required>
           <label for="name" data-error="wrong" data-success="right">*Summoner</label>
         </div>
         <!-- <div class="file-field input-field col m6 s12">
          <div class="btn">
            <span>Image</span>
            <input id="image_offre" name="report_screen" type="file">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" name="report_text" type="text">
          </div>
        </div> -->
         <div class="input-field col s12">
           <textarea id="textarea1" class="materialize-textarea"></textarea>
           <label for="textarea1">texte</label>
         </div>
         <div class="col s12">
           Seul le nom de l'invocateur est obligatoire.
         </div>
         <div class="col offset-m9 m3 s12">
           <button class="btn-large waves-effect waves-light teal z-depth-3 right-align" type="submit">Reported!
             <i class="material-icons right">send</i>
           </button>
         </div>
        </form>
      </div>
    </div>
  </div>
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
  <div class="container" id="info_site">
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
<script type="text/javascript">
$(document).ready(function($) {
  $('input.autocomplete').autocomplete({
    data: {
      <?php
      $stmt = $dbh->prepare("SELECT invocateurs FROM lors_invocateur_reported");
      if ($stmt->execute()) {
        while ($row = $stmt->fetch()) {
          echo "'".$row['invocateurs']."': null,";
        }
      }
       ?>
    },
    limit: 4, // The max amount of results that can be shown at once. Default: Infinity.
  });
});
</script>
  <?php
  $dbh = null;
   ?>
  </body>
</html>
