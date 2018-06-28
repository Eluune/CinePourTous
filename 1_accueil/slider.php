<?php
  $date = date('Y').'-'.date('m').'-'.date('j');
  $aujourdhui = new DateTime($date);
  $numero = 0;
  $filmactu = false;

  for($i = 0 ; $i < count($tableau) ; $i++)
  {
    $dateFilm = new DateTime($tableau[$i]->date);
    $interval = $dateFilm->diff($aujourdhui);

    //echo($interval->format('%r%a')." ");

    if($interval->format('%r%a') < 7 && $interval->format('%r%a') >= 0)
    {
      $numero = $i;
      $filmactu = true;
    }
  }

  if($filmactu == false)
  {
    $sql = "SELECT id, date FROM evenement ORDER BY date ASC";
    $resultats=$bdd->query($sql);
    $dernierFilm=$resultats->fetchAll(PDO::FETCH_OBJ);
    $resultats->closeCursor();

    $min = -365;

    for($j = 0 ; $j < count($dernierFilm) ; $j++)
    {
      $dateFilm = new DateTime($dernierFilm[$j]->date);
      $intervalDate = $aujourdhui->diff($dateFilm);
      if($intervalDate->format('%r%a') < 0 && $intervalDate->format('%r%a') > $min)
      {
        $min = $intervalDate->format('%r%a');
        $dernier = $j;
      }
    }


    for($j = 0 ; $j < count($tableau) ; $j++)
    {
      if($tableau[$j]->id == $dernierFilm[$dernier]->id)
      {
        $numero = $j;
      }
    }
  }
?>

<div class="format" id="accueil_slider">
  <div class="slider-container">
    <div class="slider-content" style="background-image: url(<?php echo($tableau[$numero]->affiche); ?>)">
      <div class="slider-titre"><?php if($filmactu==true){echo("FILM DE LA SEMAINE");}else{echo("DERNIER FILM A L'AFFICHE : SEMAINE DU ".formatdate($tableau[$numero]->date));} ?></div>
      <table>
        <tr> <th> <?php echo(strtoupper($tableau[$numero]->nom)); ?> </th> </tr>
        <tr> <td> <hr> </td> </tr>
        <tr> <td> <span class="slider-attribut"> Date de sortie </span> <?php echo(formatdate($tableau[$numero]->datesortie)); ?> </td> </tr>
        <tr> <td> <span class="slider-attribut"> Genre </span> <?php echo($tableau[$numero]->genre); ?> </td> </tr>
        <tr> <td> <span class="slider-attribut"> Avec </span> <?php echo($tableau[$numero]->acteurs); ?> </td> </tr>
        <tr> <td> <span class="slider-attribut"> De </span> <?php echo($tableau[$numero]->realisateur); ?> </td> </tr>
        <tr> <td> <span class="slider-attribut"> Nationalité </span> <?php echo($tableau[$numero]->nationalite); ?> </td> </tr>
        <tr>
          <td>
            <form action="index.html" method="post">
              <fieldset>
                <legend>SYNOPSIS ET DETAILS</legend>
                <?php echo($tableau[$numero]->synopsis); ?>
              </fieldset>
            </form>
          </td>
        </tr>

        <tr>
          <td> <a class="horaire" href="#"> Horaires sur le site du cinéma </a> </td>
        </tr>

      </table>
    </div>
  </div>
</div>
