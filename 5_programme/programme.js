$(document).ready(function()
{
  var home = true;
  var infos = false;
  var activite = false;
  var programmation = false;

  // Menu Header
  $("#nav-prog").click(function()
  {
    $("#accueil_content").hide("drop", { direction: "left" }, 1000);
    $("#accueil_slider").hide("drop", { direction: "left" }, 1000);
    $("#section-5").show("drop", { direction: "right"}, 2000);
  });

  $("#nav-home").click(function()
  {
    $("#section-5").hide("drop", { direction: "right"}, 1000);
    $("#accueil_slider").show("drop", { direction: "left" }, 2000);
    $("#accueil_content").show("drop", { direction: "left" }, 2000);
  });


  var active = false;

  $(".btn_gauche, .btn_droite").click(function()
  {
    var id = $(this).attr("id");
    id = id.substr(8);

    $("#synopsis-resume"+id).slideToggle("slow");
    $("#synopsis-entier"+id).slideToggle("slow");
    $("#info"+id).slideToggle("slow");

    return false;
  });
});
