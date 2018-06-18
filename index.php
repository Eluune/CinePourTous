<?php
  /* Base de données */
  include("bdd/config.php");
  include("bdd/bdd.php");

  /* fonctions */
  include("fonction/formatdate.php");
  include("fonction/resumer.php");

  $sql = "SELECT * FROM evenement ORDER BY date DESC";
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

    <!-- Style -->
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="0_nav/nav.css">
    <link rel="stylesheet" href="1_accueil/accueil.css">
    <link rel="stylesheet" href="8_footer/footer.css">
  </head>
  <body>
    <?php include("0_nav/nav.php"); ?>
    <?php include("1_accueil/accueil.php"); ?>
    <?php include("8_footer/footer.php"); ?>

    <script src="1_accueil/lieu.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBnmptl3ynFMtZf1eIab9JowUu10H_SyA&callback=initMap" async defer></script>
  </body>
</html>
