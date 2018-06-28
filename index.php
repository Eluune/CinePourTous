<?php
  /* Base de données */
  include("bdd/config.php");
  include("bdd/bdd.php");

  /* fonctions */
  include("fonction/formatdate.php");
  include("fonction/resumer.php");

  $sql = "SELECT * FROM film ORDER BY date DESC LIMIT 15";
  $resultats=$bdd->query($sql);
  $tableau=$resultats->fetchAll(PDO::FETCH_OBJ);
  $resultats->closeCursor();
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <!-- Meta tag -->
    <meta charset="utf-8">
    <meta name="description" content="Site internet Association CinéPourTous Issoire">
    <meta name="keywords" content="Cinéma, Art&essai, film">
    <meta name="author" content="Aloïs Petit">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine Pour Tous</title>

    <!-- bibliothèques -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

    <!-- Style -->
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="0_nav/nav.css">

    <link rel="stylesheet" href="1_accueil/accueil.css">
    <link rel="stylesheet" href="1_accueil/header.min.css">
    <link rel="stylesheet" href="1_accueil/slider.min.css">
    <link rel="stylesheet" href="1_accueil/content.min.css">

    <link rel="stylesheet" href="5_programme/programme.css">
    <link rel="stylesheet" href="6_activite/activite.min.css">
    <link rel="stylesheet" href="8_footer/footer.css">
  </head>

  <body>
    <?php include("0_nav/nav.php"); ?>
    <?php include("1_accueil/accueil.php"); ?>
    <?php include("5_programme/programme.php"); ?>
    <?php include("6_activite/activite.php") ?>
    <?php include("8_footer/footer.php"); ?>

    <script src="1_accueil/lieu.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBnmptl3ynFMtZf1eIab9JowUu10H_SyA&callback=initMap" async defer></script>
    <script src="5_programme/programme.js" type="text/javascript"></script>
    <script src="6_activite/activite.js" type="text/javascript"></script>
  </body>
</html>
