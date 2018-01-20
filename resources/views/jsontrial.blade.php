<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #container {display:inline-flex; width: 100%; height: 100%;}
      #map_canvas { height: 100%; width: 50%; display:inline-block; }
      #options {display:inline-block; width: 50%; height: 100%;}
    </style>

  </head>

  <body>
    <div id="container">
      <div id="map_canvas"></div>
      <div id="options">
        <form id="uniquename" method='POST'>
          <input type="checkbox" name="type" id="type" value="hotel">Hotel</input>
          <input type="checkbox" name="type" id="type" value="restaraunt">Restaraunt</input>
          <input type="checkbox" name="stars" id="stars" value="1">1-Star</input>
          <input type="checkbox" name="stars" id="stars" value="2">2-Star</input>
          <select>
            <option id="price" value=""></option>
            <option id="price" value="1">$</option>
            <option id="price" value="2">$$</option>
            <option id="price" value="3">$$$</option>
            <option id="price" value="4">$$$$</option>
          </select>
          <input id="submit" type="button" value="Submit">
        </form>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOTPtloUIExD_S2PwzoQqW6S337HU-HYE&callback=initMap"></script>
    <script>

    //Makes mapMarkers
    function createMarker(point, map, stars, markerArray){
      var marker = new google.maps.Marker({
        position: point,
        map:map,
        stars: stars
      });
      markerArray.push(marker);
    }

    function populateMarkers(locations, map, markerArray){
      for (var i = 0; i < locations.length; i++) {
        element = locations[i];
        var type = element.type;
        var point = new google.maps.LatLng(element.lat, element.long);
        var stars = element.stars;
        var marker = createMarker(point, map, stars, markerArray);
      }
    }


    //Filters Markers on Submit using AJAX
    function eventArrayProp(markerArray, map){
      for (var j in markerArray){
        // markerArray[j].setVisible(false);
        markerArray[j].setMap(null);
      }
      markerArray.length=0;
      document.getElementById('submit').preventDefault;

      var eventArray= {};
      //Creates empty Array for all checked elements
      $('form#uniquename :input, :selected').each(function(){
        var input= $(this)[0];
        if(input.checked){eventArray[input.id]=[];}
        if(input.selected && input.value != 0){eventArray[input.id]=[];}
        console.log(eventArray);
      });
      //Adds values of checked elements to appropriate Array
      $('form#uniquename :input, :selected').each(function(){
        var input = $(this)[0];
        if(input.checked){eventArray[input.id].push(input.value);}
        if(input.selected && input.value != 0){eventArray[input.id].push(input.value);}
      });



      //Should Filter Markers
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        type: 'POST',
        url: '/updatejson',
        data: eventArray,
        processData: true,
        success: function(ted){
          var compactArray = [];
          for (var i in ted) {
            compactArray.push(ted[i]);
          }
          locations = compactArray;
          populateMarkers(locations, map, markerArray);
        }
      })
    }

    function initMap() {
      var mapOptions = {
        zoom: 10,
        center: new google.maps.LatLng(31.76, 34.75),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      }
      var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
      var locations = @json($json);
      var markerArray=[];

      populateMarkers(locations, map, markerArray);

      document.getElementById('submit').addEventListener('click', function(){eventArrayProp(markerArray, map);}, true);
    }
    </script>
  </body>
</html>
