<!DOCTYPE HTML>
<html>
<head>
  <title>Branche DEV | Nicolas GIGOU</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href="favicon.ico" />
  <!--[if lte IE 8]>
  <script src="assets/js/ie/html5shiv.js"></script><![endif]-->
  <link rel="stylesheet" href="assets/css/main.css" />
  <link rel="stylesheet" href="assets/css/custom.css" />
  <!--[if lte IE 9]>
  <link rel="stylesheet" href="assets/css/ie9.css"/><![endif]-->
  <!--[if lte IE 8]>
  <link rel="stylesheet" href="assets/css/ie8.css"/><![endif]-->
</head>
<body>

<?php

$servername = "nicolasgzostats.mysql.db";
$username = "nicolasgzostats";
$password = "Lasoauch4";
$database = "nicolasgzostats";

$mysqli = new mysqli($servername, $username, $password, $database);

/* Vérification de la connexion */
if ($mysqli->connect_errno) { exit(); }

function clean($string) {
  $string = html_entity_decode(preg_replace('/&([a-zA-Z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);/i', '$1', htmlentities($string, ENT_QUOTES, 'UTF-8')), ENT_QUOTES, 'UTF-8');
  $string = strtolower(trim(preg_replace('/[^0-9a-z]+/i', '-', $string), '-'));

  return $string;
}

if(isset($_SERVER['GEOIP_CITY']) && isset($_SERVER['GEOIP_COUNTRY_NAME']) && isset($_SERVER['GEOIP_COUNTRY_CODE']) && isset($_SERVER['REMOTE_ADDR'])) 
{
  /* Variables pour la requête */
  $table = "nicolasgigou_visitors";
  $uri = $_SERVER['SCRIPT_URI'];
  $date = new DateTime();
  $timestamp = $date->getTimestamp();
  $client_ip_address = clean($_SERVER['REMOTE_ADDR']);
  $city = clean($_SERVER['GEOIP_CITY']);
  $country = clean($_SERVER['GEOIP_COUNTRY_NAME']);

  /* Insertion dans la base OVH */
  $sql = "INSERT INTO `".$table."` VALUES (0,'".$uri."',".$timestamp.",'".$client_ip_address."','".$city."','".$country."')";
  if ($mysqli->query($sql) === true) {} 
  else {}
}

$mysqli->close();
?>

<!-- Header -->
<header id="header">
  <a href="index.html" class="title">Branche Développement</a>
</header>

<!-- Wrapper -->
<div id="wrapper">

  <!-- Main -->
  <section id="main" class="wrapper">
    <div class="inner">
      <h1 class="major">Liste de projets <b class="rotate color">innovants,amusants,divertissants</b>.</h1>

      <!-- PRESENTATION PART -->
      <section>
        <h2>Présentation</h2>
        <p>Bienvenue sur cette espace dédié aux différents projets qui ont pu être menés jusqu'à aujourd'hui, que ce
          soit pour en apprendre plus sur une technologie (avoir des notions ou maîtriser son sujet) ou dans le cadre des cours
          suivis lors de ma formation MIAGE au sein de l'ISTIC de l'Université de Rennes 1.</p>
      </section>
      <!-- #end PRESENTATION PART -->

      <!-- PROJECTS PART -->
      <section>
        <ul class="portfoliofilter">
          <li class="filter active" data-filter="entertainment work discover">Tout</li>
          <li class="filter" data-filter="entertainment">Divertissement</li>
          <li class="filter" data-filter="work">Travail/Cours</li>
          <li class="filter" data-filter="discover">Découverte</li>
        </ul>

        <div class="clear"></div>

        <ul class="portfolio">

          <li class="item entertainment">
            <a href="embedded_projects/pokewatt/" target="_blank">
              <div class="portfolioitem">
                <img src="images/pokedex.jpg">
                <div class="portfoliohover">
                  <div class="info">
                    <h5>PokéWatt</h5>
                  </div>
                </div>
              </div>
            </a>
          </li>

          <li class="item entertainment">
            <a href="embedded_projects/familyTree/app/genogram.html" target="_blank">
              <div class="portfolioitem">
                <img src="images/familyTree_500_300.jpg">
                <div class="portfoliohover">
                  <div class="info">
                    <h5>OneToTree - Arbre généalogique</h5>
                  </div>
                </div>
              </div>
            </a>
          </li>

          <li class="item work">
            <a href="http://creperietymai.fr/" target="_blank">
              <div class="portfolioitem">
                <img src="images/restaurant.jpg">
                <div class="portfoliohover">
                  <div class="info">
                    <h5>Crêperie TyMaï</h5>
                  </div>
                </div>
              </div>
            </a>
          </li>

          <li class="item work">
            <a href="embedded_projects/site_anglais/home.html" target="_blank">
              <div class="portfolioitem">
                <img src="images/japan_500_300.jpg">
                <div class="portfoliohover">
                  <div class="info">
                    <h5>Japan TV Shows</h5>
                  </div>
                </div>
              </div>
            </a>
          </li>

        </ul>

        <div class="clear"></div>

      </section>
      <!-- #end PROJECTS PART -->

    </div>
  </section>

</div>

<!-- Footer -->
<footer id="footer" class="wrapper style1-alt">
  <div class="inner">
    <ul class="menu">
      <li>&copy; Nicolas GIGOU - dev.nicolas-gigou.fr. Tous droits réservés.</li>
    </ul>
  </div>
</footer>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.mixitup.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]>
<script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>
<script src="assets/js/custom.js"></script>

</body>
</html>