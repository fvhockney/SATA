<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <style>
  #map {
    height: 500px;
    width: 500px;
  }
  </style>
</head>
<body>
  <h3>My Google Maps Demo</h3>
  <div id="map"></div>
  <div id="options">
    <input type="checkbox" id="type" name="type" value="hotel" onclick="filterMarkers(this.value, this.checked);">Hotel</input>
    <input type="checkbox" id="type" name="type" value="restaraunt" onclick="filterMarkers(this.value, this.checked)">Restaraunt</input>
    <input type="checkbox" id="stars" name="1-stars" value="1" onclick="filterMarkers(this.value, this.checked)">1-Star</input>
    <input type="checkbox" id="stars" name="2-star" value="2" onclick="filterMarkers(this.value, this.checked)">2-Star</input>

  </div>
  <script>

  var customLabel = {
    restaraunt: {
      label: 'R'
    },
    hotel: {
      label: 'H',
      color: 'blue'
    }
  };


  function initMap() {
      map = new google.maps.Map(document.getElementById('map'), {
      center: new google.maps.LatLng(31.76, 34.75),
      zoom: 10
    });
    var infoWindow = new google.maps.InfoWindow;
    // Change this depending on the name of your PHP or XML file
    downloadUrl('/xml', myFunction1);
    downloadUrl('/xml', function() {
      filterMarkers;
      markerArray.forEach(function (element){

        var infowincontent = document.createElement('div');
        var strong = document.createElement('strong');
        strong.textContent = element.name;
        infowincontent.appendChild(strong);
        infowincontent.appendChild(document.createElement('br'));

        var text = document.createElement('text');
        text.innerHTML = element.content;
        infowincontent.appendChild(text);

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(element.lat, element.long),
            label: element.label,
            map: map,
            visible: false,
            type: element.type,
            stars: element.stars
        });
displayMarkers.push(marker);
        marker.addListener('click', function() {
          infoWindow.setContent(infowincontent);
          infoWindow.open(map, marker);
        });
      });
    });
  }


var eventArray=[];
var selectedArray=[];
var markerArray = [];
var displayMarkers = [];

filterFunction = function (element){
  return eventArray.includes(element.type);
}

filterMarkers = function (value, checked){
  if (checked){
    eventArray.push(value);
  } else {
    eventArray.splice(eventArray.indexOf(value),1);
  }

  filteredMarkers = displayMarkers.filter(filterFunction);

  displayMarkers.forEach(function(displayMarkers){
    displayMarkers.setVisible(false)
  });

  filteredMarkers.forEach(function(item){
    item.setVisible(true);
  });
}

  function downloadUrl(url, callback) {
    var request = window.ActiveXObject ?
    new ActiveXObject('Microsoft.XMLHTTP') :
    new XMLHttpRequest;

    request.onreadystatechange = function() {
      if (request.readyState == 4) {
        request.onreadystatechange = doNothing;
        callback(request, request.status);
      }
    };

    request.open('GET', url, true);
    request.send(null);
  }


  function myFunction1(data) {
    var xml = data.responseXML;
    var markers = xml.documentElement.getElementsByTagName('marker');
    Array.prototype.forEach.call(markers, function(markerElem) {
      var id = markerElem.getAttribute('id');
      var name = markerElem.getAttribute('name');
      var street_number = markerElem.getAttribute('street_number');
      var street = markerElem.getAttribute('street');
      var city = markerElem.getAttribute('city');
      var zip = markerElem.getAttribute('zip');
      var website = markerElem.getAttribute('website');
      var main_phone = markerElem.getAttribute('main_phone');
      var stars = markerElem.getAttribute('stars');
      var price = markerElem.getAttribute('price');
      var type = markerElem.getAttribute('type');
      var lat = parseFloat(markerElem.getAttribute('lat'));
      var long = parseFloat(markerElem.getAttribute('long'));

      var content =
      "<p>" +
      street_number + ' ' + street + ' ' + "<br>" +
      city + ', ' + zip + "<br>" +
      website + "<br>" +
      main_phone + "<br>" +
      stars + "<br>" +
      price + "<br></p>";

      var icon = customLabel[type] || {};
      var marker = {
        lat: lat,
        long: long,
        label: icon.label,
        type: type,
        content: content,
        stars: stars,
        name: name
      };

      markerArray.push(marker);
    });
  }


  function doNothing() {}
  </script>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOTPtloUIExD_S2PwzoQqW6S337HU-HYE&callback=initMap"></script>
</body>
</html>
