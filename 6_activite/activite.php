<?php
  $sql = "SELECT * FROM evenement ORDER BY date DESC";
  $resultats=$bdd->query($sql);
  $evenement=$resultats->fetchAll(PDO::FETCH_OBJ);
  $resultats->closeCursor();

  $sql = "SELECT * FROM reunion ORDER BY date DESC";
  $resultats=$bdd->query($sql);
  $reunion=$resultats->fetchAll(PDO::FETCH_OBJ);
  $resultats->closeCursor();
?>

<div id="section-6">
  <div class="dernierEvent-container" style="background-image:url(<?php echo($evenement[0]->photo); ?>)">
    <div class="dernierEvent-titre">DERNIER EVENEMENT</div>
    <div class="dernierEvent-rond"> . </div>
    <div class="dernierEvent-titreArticle"><?php echo(strtoupper($evenement[0]->titre)); ?></div>
    <div class="dernierEvent-rectangle"> . </div>
    <img class="dernierEvent-fleche" src="images/icone-fleche.svg" alt="">
    <div class="dernierEvent-texte"><?php echo(resumer($evenement[0]->description, 40)); ?></div>
  </div>

  <div class="activite-container" style="margin-top:80px">
    <div class="activite-content">
      <div class="activite-titre">REUNIONS</div>
    </div>

    <div class="activite-content" style="margin-left:5%">
      <div class="activite-titre">EVENEMENTS</div>
    </div>

  </div>

  <div class="activite-container">
    <div class="activite-content" id="reunion">
      <table>
        <?php for($i = 0 ; $i < count($reunion) ; $i++): ?>
          <tr><td><span>REUNION DU</span> <?php echo(formatdate($reunion[$i]->date)); ?> </td></tr>
          <tr><td><span>ORDRE</span> <?php echo($reunion[$i]->ordre); ?> </td></tr>
          <tr><td><span>SALLE</span> <?php echo($reunion[$i]->salle); ?> </td></tr>
          <tr><td> <button id="reunion<?php echo($reunion[$i]->id); ?>" type="button" name="button">VOIR PLUS</button> </td></tr>
          <tr><th><?php if($i != count($reunion)-1): ?><hr><?php endIf; ?></th></tr>
        <?php endFor; ?>
      </table>
    </div>

    <div class="activite-content" id="evenement">
      <table>
        <?php for($i = 0 ; $i < count($reunion) ; $i++): ?>
          <tr><td><?php echo($evenement[$i]->titre); ?> </td></tr>
          <tr><td><span>DATE</span> <?php echo(formatdate($evenement[$i]->date)); ?> </td></tr>
          <tr><td> <button id="evenement<?php echo($evenement[$i]->id); ?>" type="button" name="button">VOIR PLUS</button> </td></tr>
          <tr><th><?php if($i != count($evenement)-1): ?><hr><?php endIf; ?></th></tr>
        <?php endFor; ?>
      </table>
    </div>
  </div>
</div>
