
<?php session_start(); ?>
<?php 
	$add ='';
	$add = $_GET['addressview'];

  if(!isset($_SESSION['islogin']))
	{
		header('Location: index.php');
		exit();
	}
	else
	{	
		$name='';
		if(isset($_SESSION['firstname']))
		$name = $_SESSION['firstname'] ." ".$_SESSION['lastname'];
	}
 ?>


 

<!DOCTYPE html>
<html>
	<head>
		<title>Profile</title>
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/registrationManager.js"></script>
		 <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script>
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
  



    var address = document.getElementById("address").value;
    
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

		

	</head>
	
	<body>
		<?php include "client-header.php"; ?>
		


		<div class="row">
			<div class="col s12 m4 l2">
		    	<div class="section">
			 	  	
				 	  <!-- Left aligned menu below button -->
				 	  <div class="row">
					 	  <div class="collection z-depth-1">
					 	  	<div class="collection-item">
								<div class="container">
					 	  			<div class="profile-pic">
							    		<img class="z-depth-1" src="images/cubs.jpg"><a href="#!" class="grey-text text-darken-3" ><span><?php echo $name ?></span></a>
							  		</div>
				 	  			</div>					 	  		
					 	  	</div>
					       	<a href="MyClinics.php" class="collection-item"><i class="material-icons left">list</i> My clinics</a>
					        <a href="#!" class="collection-item"><i class="material-icons left">favorite</i>My interests</a>
					        <a href="enrolled-clinics.php" class="collection-item"><i class="material-icons left">check_circle</i>Enrolled clinics</a>
					        <a href="#!" class="collection-item"><i class="material-icons left">notifications_none</i>News<span class="new badge">4</span></a>
					        <a href="#!" class="collection-item"><i class="material-icons left">list</i> My clinics</a>
					        <a href="#!" class="collection-item"><i class="material-icons left">chrome_reader_mode</i>My payment</a>
					        <a href="#!" class="collection-item"><i class="material-icons left">event_available</i>My event</a>
					      </div>
				      </div>

				  	
			  	</div>
		 	</div>
		 		<div class="col s10">
		    	<div class="section">
			 	  	 <div class="row">
		 			<div style="margin-left:10%;"><?php echo $add; ?></div>	
			 	  	<div id="map_canvas" style="width: 1000px; height: 600px; margin-left:auto;margin-right:auto"></div>
			 	  	<input id="address" type="text" value="<?php echo $add; ?>" hidden>
			 	  	</div>
			 	  	</div>
			 	  	</div>

				</div> 	
			

	</body>
</html>