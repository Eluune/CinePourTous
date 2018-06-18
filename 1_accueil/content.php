<div class="format">
  <div class="titre">ACTUALITES</div>
  <div class="content-container">
    <div class="actualite-content">

    </div>

    <div class="lieu-content">
      <div class="titre" id="lieu">LIEU & PLAN</div>
      <div id="map"></div>
    </div>
  </div>
</div>

<div class="format">
  <div class="titre">LES DERNIERS FILMS</div>
  <div class="content-container">
    <div class="film-content">
      <table>
        <?php for($i = 0 ; $i < 3 ; $i++): ?>
          <tr>
            <th> <img class="film-image" src="<?php echo($tableau[$i]->affiche); ?>" alt=""> </th>
            <td>
              <table class="film-informations">
                <tr> <td> <span class="film-attribut"> Date de sortie </span> <?php echo(formatdate($tableau[0]->datesortie)); ?> </td> </tr>
                <tr> <td> <span class="film-attribut"> Genre </span> <?php echo($tableau[0]->genre); ?> </td> </tr>
                <tr> <td> <span class="film-attribut"> Avec </span> <?php echo($tableau[0]->acteurs); ?> </td> </tr>
                <tr> <td> <span class="film-attribut"> De </span> <?php echo($tableau[0]->realisateur); ?> </td> </tr>
              </table>
            </td>
          </tr>
        <?php endFor; ?>
      </table>

      <div id="btn_programme">VOIR LA PROGRAMMATION</div>
    </div>

    <div class="horaire-content">
      <div class="side-titre">HORAIRES</div>
    </div>
  </div>


</div>
