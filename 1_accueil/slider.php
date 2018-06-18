<div class="format">
  <div class="slider-container">
    <div class="slider-content" style="background-image: url(<?php echo($tableau[0]->affiche); ?>)">
      <div class="slider-titre">FILM DE LA SEMAINE</div>
      <table class="slider-informations">
        <tr> <th> <?php echo(strtoupper($tableau[0]->nom)); ?> </th> </tr>
        <tr> <td> <hr> </td> </tr>
        <tr> <td> <span class="slider-attribut"> Date de sortie </span> <?php echo(formatdate($tableau[0]->datesortie)); ?> </td> </tr>
        <tr> <td> <span class="slider-attribut"> Genre </span> <?php echo($tableau[0]->genre); ?> </td> </tr>
        <tr> <td> <span class="slider-attribut"> Avec </span> <?php echo($tableau[0]->acteurs); ?> </td> </tr>
        <tr> <td> <span class="slider-attribut"> De </span> <?php echo($tableau[0]->realisateur); ?> </td> </tr>
        <tr> <td> <span class="slider-attribut"> Nationalité </span> <?php echo($tableau[0]->nationalite); ?> </td> </tr>
        <tr>
          <td>
            <form action="index.html" method="post">
              <fieldset>
                <legend>SYNOPSIS ET DETAILS</legend>
                <?php echo($tableau[0]->synopsis); ?>
              </fieldset>
            </form>
          </td>
        </tr>
      </table>
    </div>
  </div>
</div>
