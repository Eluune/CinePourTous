function initMap() {
  var cinemaLeModerne = {lat: 45.543701, lng: 3.245988};
  var parking = {lat:45.543086, lng:3.242549};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: cinemaLeModerne
  });

  var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Cinéma Le Moderne</h1>';

  var infowindow = new google.maps.InfoWindow({
    content: contentString
  });

  var marker = new google.maps.Marker({
    position: cinemaLeModerne,
    map: map
  });

  infowindow.open(map, marker);

  marker.addListener('mouseover', function() {
    infowindow.open(map, marker);
    infowindow2.close();
  });

  marker.addListener('mouseleave', function() {
    infowindow.close();
  });

/*    Marker n°2     */

  var contentString2 = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Parking gratuit</h1>';

  var infowindow2 = new google.maps.InfoWindow({
    content: contentString2
  });

  var marker2 = new google.maps.Marker({
    position: parking,
    map: map
  });

  marker2.addListener('mouseover', function() {
    infowindow2.open(map, marker2);
    infowindow.close();
  });

  marker2.addListener('mouseleave', function() {
    infowindow2.close();
  });

}
