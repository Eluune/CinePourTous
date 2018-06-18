<?php
  function resumer($texte, $mots)
  {
    if(!isset($mot)) { $mots = 30; }
    $chaine = explode(" ", $texte);
    $r = "";

    for($i = 0 ; $i < $mots ; $i++)
    {
      $r = $r." ".$chaine[$i];
    }

    $r = $r."[...]";
    return $r;
  }
?>
