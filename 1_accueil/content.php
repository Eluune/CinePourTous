<div class="format" id="accueil_content">
  <div class="content-container">
    <div class="content-prochainnement">
      <div class="content-titre">PROCHAINNEMENT</div>
      <?php $prochainnement = false; ?>
      <?php for($i = 0 ; $i < count($tableau) ; $i++): ?>
        <?php
          $datetime1 = new DateTime($tableau[$i]->date);
          $datetime2 = new DateTime(date('Y-m-j'));
          $interval = $datetime1->diff($datetime2);
        ?>

        <?php if($interval->format('%r%a') < 0): ?>
          <?php $prochainnement = true; ?>
          <div class="content-pro-film">
            <div class="pro-film-image">
              <img src="<?php echo($tableau[$i]->affiche); ?>" alt="">
            </div>

            <div class="pro-film-content">
              <table>
                <tr> <td class="datesemaine"> <span class="datesemaine"> SEMAINE DU </span> <?php echo(formatdate($tableau[$i]->date)); ?> </td> </tr>
                <tr> <td> <span> Date de sortie </span> <?php echo(formatdate($tableau[$i]->datesortie)); ?> </td> </tr>
                <tr> <td> <span> Genre </span> <?php echo($tableau[$i]->genre); ?> </td> </tr>
                <tr> <td> <span> Avec </span> <?php echo($tableau[$i]->acteurs); ?> </td> </tr>
                <tr> <td> <span> De </span> <?php echo($tableau[$i]->realisateur); ?> </td> </tr>
              </table>
            </div>
          </div>
        <?php endIf; ?>
      <?php endFor; ?>

      <?php if($prochainnement == false): ?>
        <p class="NoContent">Aucun film n'est programmé prochainnement</p>
      <?php endIf; ?>
    </div>

    <div class="content-lieu">
      <div class="content-titre" id="lieu">LIEU & PLAN</div>
      <div id="map"></div>
    </div>
  </div>
</div>
