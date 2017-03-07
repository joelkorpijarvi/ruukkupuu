
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Foundation | Welcome</title>
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<style>
.perkele
{
  display: flex;
}
.perkele h1
{
  margin-top: 1rem;
}
    .linkkinappi
{
  width: 10%;
  height: 4rem;
  border: none;
  padding: 1rem 0rem 1rem 0rem;
  cursor: pointer;
  font-size: 1.25rem;
  border-radius: 0.25rem;
  background-color: lightgrey;
  margin: 0rem;
  margin-left: 1rem;	
  transition: background-color 0.4s, box-shadow 0.1s;
  box-shadow: 0rem 0.1rem 0.25rem rgba(0, 0, 0, 0.5);
  text-align: center;;

}

.linkkinappi p
{
  padding: 0.3rem;
}
.linkkinappi:hover
{
  text-decoration: none;
  transition: box-shadow 0.1s;
  box-shadow: 0rem 0.4rem 0.7rem rgba(0, 0, 0, 0.5);
}

.juu
{
  padding-top: 3rem;
}

</style>

</head>
<body>
 
 
 
<header>
 
<div class="top-bar">
<div class="top-bar-left">
<ul class="menu">
<li><a href="#">One</a></li>
<li><a href="#">Two</a></li>
<li><a href="#">Three</a></li>
<li><a href="#">Four</a></li>
</ul>
</div>
<div class="top-bar-right">
<ul class="menu">
<li><input type="search" placeholder="Search"></li>
<li><button type="button" class="button">Search</button></li>
</ul>
</div>
</div>
 
 
<div class="row">
<div class="medium-4 columns">
<img src="https://placehold.it/450x183&text=LOGO" alt="company logo">
</div>
<div class="medium-8 columns">
<img src="https://placehold.it/900x175&text=Responsive Ads - ZURB Playground/333" alt="advertisement for deep fried Twinkies">
</div>
</div>
 
<br>
<div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium">
<button class="menu-icon" type="button" data-toggle></button>
<div class="title-bar-title">Menu</div>
</div>
<div class="top-bar" id="main-menu">
<ul class="menu vertical medium-horizontal expanded medium-text-center" data-responsive-menu="drilldown medium-dropdown">
<li class="has-submenu"><a href="#">Tech</a>
<ul class="submenu menu vertical" data-submenu>
<li><a href="#">One</a></li>
<li><a href="#">Two</a></li>
<li><a href="#">Three</a></li>
</ul>
</li>
<li class="has-submenu"><a href="#">Energy</a>
<ul class="submenu menu vertical" data-submenu>
<li><a href="#">One</a></li>
<li><a href="#">Two</a></li>
<li><a href="#">Three</a></li>
</ul>
</li>
<li class="has-submenu"><a href="#">Space</a>
<ul class="submenu menu vertical" data-submenu>
<li><a href="#">One</a></li>
<li><a href="#">Two</a></li>
<li><a href="#">Three</a></li>
</ul>
</li>
<li class="has-submenu"><a href="#">Medicine</a>
<ul class="submenu menu vertical" data-submenu>
<li><a href="#">One</a></li>
<li><a href="#">Two</a></li>
<li><a href="#">Three</a></li>
</ul>
</li>
<li class="has-submenu"><a href="#">Robotics</a>
<ul class="submenu menu vertical" data-submenu>
<li><a href="#">One</a></li>
<li><a href="#">Two</a></li>
<li><a href="#">Three</a></li>
</ul>
</li>
<li class="has-submenu"><a href="#">Tesla</a>
<ul class="submenu menu vertical" data-submenu>
<li><a href="#">One</a></li>
<li><a href="#">Two</a></li>
<li><a href="#">Three</a></li>
</ul>
</li>
</ul>
</div>
</header>

<body>
  <div class="perkele">
    <img src="http://upvan.in/wp-content/uploads/2015/09/bonsai-1.png" alt="puu">
    <div id="menu">
    <ul class="menu vertical medium-horizontal  medium-text-center" data-responsive-menu="drilldown medium-dropdown">
    <li class="has-submenu"><a href="#">Jaa</a>
    <ul class="submenu menu vertical" data-submenu>
    <li><a href="#">Facebook</a></li>
    <li><a href="#">Twitter</a></li>
    <li><a href="#">Instagram</a></li>
    </ul>
    </li>
    </div>
    <div class="linkkinappi">
           <a href="ruukku2.php">Arvostele</a>
     </div>
     <div class="juu"> 
    <h1>Bonsai puu</h1>
    <p>Bonsai istutetaan muutaman vuoden välein uudelleen, jolloin vaihdetaan multa (hiekansekainen), typistetään juuria noin kolmannes ja tarvittaessa istutetaan suurempaan bonsairuukkuun. Suurempaan ruukkuun istuttaminen on ajankohtaista, kun paakku on niin täynnä juuria että kastelu ei tunnu riittävän ja latvuksen ja juurten koko eivät ole enää tasapainossa. Myös latvusta typistetään leikkaamalla sekä ohjataan versoja rautalangoilla haluttuun suuntaan. Paras ajankohta suuremmalle leikkaamiselle on kevät juuri ennen kasvukauden alkua.</p>
    </div>
  </div>
  <form class="">

</form>
<?php
$nimi = $_POST["nimi"];
$txt = $_POST["txt"];
$arvosana = $_POST["arvosana"];
$send = $_POST["send"];

include "settings.php";

$sql = 'INSERT INTO 533V_verkkokauppa VALUES 
(
NULL,
"'.$nimi.'",
"'.$txt.'",
"'.$arvosana.'",
"'.$id.'"
)';

// arvostelun lisääminen
if($send == "true"){
  $my -> query($sql);
}

// Arvostelujen tulostaminen

$sql2 = 'SELECT * FROM 533V_verkkokauppa WHERE tuotenumero = "'.$id.'"';
$nayta = $my -> query($sql2);

while($t = $nayta -> fetch_object()){
    echo '
        <div class="row arvostelu">
         <div class="row">
          <div class="medium-12 columns">
        <p>'. $t -> user. '</p>
    </div>
</div>
    <div class="row">
        <div class="medium-12 columns">
        <p>'. $t -> msg .'</p>
    </div>
</div>
    <div class="row">
    <div class="medium-12 columns">
        <p>'. $t -> arvosana .'/10</p>
    </div>
 </div>
</div>';
}

$my -> close();

?>
</body>

<footer>
<div class="row expanded callout secondary">
<div class="large-4 columns">
<h5>Samankaltaisia tuotteita</h5>
<div class="row small-up-4">
<div class="column"><img class="thumbnail" src="https://placehold.it/75" alt="image of space dog"></div>
<div class="column"><img class="thumbnail" src="https://placehold.it/75" alt="image of space dog"></div>
<div class="column"><img class="thumbnail" src="https://placehold.it/75" alt="image of space dog"></div>
<div class="column"><img class="thumbnail" src="https://placehold.it/75" alt="image of space dog"></div>
</ul>
</div>
</div>
</footer>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
      $(document).foundation();  
    </script>
<script type="text/javascript" src="https://intercom.zurb.com/scripts/zcom.js"></script>
</body>
</html>
