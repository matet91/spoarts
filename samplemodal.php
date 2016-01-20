<!DOCTYPE html>
<html>
  <head>
    
    <title>SpoArts</title>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="HandheldFriendly" content="true"/>
    <meta name="MobileOptimized" content="320"/> 
    <!-- Compiled and minified CSS -->
    <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lobster" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Cookie" />
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

 
  </head>

  <script type="text/javascript">

    window.onload=function(){
    showmap();    
  }

       function showmap(){
    
      
  
      var geocoder=null;
  var map;

    geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(10.3156992,123.8854366);
    var myOptions = {
      zoom: 16,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
  



    var address = document.getElementById("Subangdaku, Mandaue City").value;
    
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({ 
            map: map,
            position: results[0].geometry.location
        });
      } else {
        alert("Geocode was not successful for the following reason: " + status);
      }
    });
  }

  </script>
  

  <body>
  
 

               <a class="modal-trigger" href="#modal1">Login</a> 
                
              

       

        <!--Modal for login-->
        <div id="modal1" class="modal">
          <div class="modal-content">
          
            <div class="row">
            <form class="col s12">
             <div style="margin-left:10%;"></div>  
            <div id="map_canvas" style="width: 1000px; height: 600px; margin-left:auto;margin-right:auto"></div>
            </form>
              </div>
            
          </div>
          </div>
        
       







    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>       
    <script src="//cdn.transifex.com/live.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
          $('.slider').slider({full_width: true});
      });
     
       $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();
      });

      $(document).ready(function(){
        $(".button-collapse").sideNav();
      });

    </script>
  </body>


</html>


