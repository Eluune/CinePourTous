$(document).ready(function()
{
  // Affichage dernière activité
  $(".dernierEvent-rectangle").hide();
  $(".dernierEvent-texte").hide();

  $(".dernierEvent-container").mouseover(function()
  {
    $(".dernierEvent-rectangle").show("drop", { direction: "right"}, 1000);
    $(".dernierEvent-texte").show("drop", { direction: "right"}, 1000);
  });

  $(".dernierEvent-container").mouseleave(function()
  {
    $(".dernierEvent-rectangle").hide("drop", { direction: "right"}, 1000);
    $(".dernierEvent-texte").hide("drop", { direction: "right"}, 1000);
  });

  // Gestion menu activité
  $("#nav-acti").click(function()
  {
    $("#accueil_content").hide("drop", { direction: "left" }, 1000);
    $("#accueil_slider").hide("drop", { direction: "left" }, 1000);
    $("#section-5").hide("drop", { direction: "left" }, 1000);
    
    $("#section-6").show("drop", { direction: "right"}, 2000);
  });

});
