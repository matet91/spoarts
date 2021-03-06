<?php session_start(); ?>
<?php
	$map = '';
	if(!isset($_SESSION['islogin']))
	{
		header('Location: index.php');
		exit();
	}
	else
	{	
		$name='';
		if(isset($_SESSION['firstname']))
		$fullname = $_SESSION['firstname'] ." ".$_SESSION['lastname'];
	}
 ?>

 <!DOCTYPE html>
<html>
	<head>
		<title>Profile</title>
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/registrationManager.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script>
				window.onload=function()
				{
					    var url = "controller/dataController.php?action=getArtsClinics";
						$.getJSON(url,function(result)
						{
							for(var i=0;i<result.length;i++)
							{
								var c = result[i];
									display(c);
							} 				
					
						});

				    function display(c)
					{
						
						$('#displayclinic').append
						(

							'<div class="col s10">'
			    				+'<div class="section">'
				 	  	 		+'<div class="row">'
					          	+'<div class="col s12">'
					          	+'<div class="card small">'
					            +'<div class="card-image">'
					            +'<img src="images/brush.jpg">'
					            +'<a href="#!" title="Click to view the page."><span class="card-title">'
					            +'<span>'+c.SPName+'</span></span></a>'
					            +'</div>'
					            +'<div class="card-content">'
					         	+'<p><span>'+c.SPAddress+'</span><span><a  href="#" title="Map location" onclick="showmap('+c.SPID+')">'
					            +'<i class="material-icons right" >location_on</i></a></span></p><hr><br>'
					            +'<p>Offered Services: Dancing, Singing, String Instruments.</p>'
					            +'<div class="right-align"><a href="service-provider-page.php?id='+c.SPID+'" class="btn">View</a></div>'
					            +'</div>'
					            +'</div>'
					        	+'</div>'
					        	+'</div>'
					        	+'</div>'
					        	+'</div>'
						);
					}
				}

		 	function showmap(id)
		 	{
		 		var url = "controller/dataController.php?action=getClinicsAddress&id="+id;
		 		$.post(url,id,function(result){
		 				showView(result);
		 				$('#locations').text(result);
		 		}); 
		 	}
		 	function showView(r)
		 	{	
    			 $('#modalmap').openModal();
  				var geocoder=null;
  				var map;
				geocoder = new google.maps.Geocoder();
    			var latlng = new google.maps.LatLng(10.3156992,123.8854366);
    			var myOptions = 
    			{
      				zoom: 16,
      				center: latlng,
      				mapTypeId: google.maps.MapTypeId.ROADMAP
    			}
    			map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    			geocoder.geocode( { 'address': r}, function(results, status) 
    			{
      				if (status == google.maps.GeocoderStatus.OK) 
      				{
        				map.setCenter(results[0].geometry.location);
        				var marker = new google.maps.Marker({ 
            			map: map,
            			position: results[0].geometry.location
        				});
      				}
      				else 
      				{

        				alert("Geocode was not successful for the following reason: " + status);
      				}
    			});
    			
			}
			//END OF GOOGLE MAP
		    $(document).ready(function()
		    {
          		$('.slider').slider({full_width: true});
            });

      		$(document).ready(function()
      		{
        		$(".button-collapse").sideNav();
      		});

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
							    		<img class="z-depth-1" src="images/cubs.jpg"><a href="#!" class="grey-text text-darken-3" ><span><?php echo $fullname; ?></span></a>
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
		 	<!--DISPLAY LIST OF CLINICS-->
		 		<div class="col s10">
		    		<div class="section">
			 	 		<div class="row">
		 			 		<div id="displayclinic"></div>
			 	  		</div>
			 	    </div>
			 	</div>
		</div> 	
					
		<!--Modal MAP-->
 		<div style="width: 900px; height: 700px;" id="modalmap" class="modal modal-fixed-footer">
          <div class="modal-content">
         	<div class="row">
            	<form class="col s12">
             	<div style="margin-left:10%;" id="locations"></div>  
                <div id="map_canvas" style="width: 800px; height: 600px; margin-left:auto;margin-right:auto"></div>
                </form>
            </div>
         </div>
         <div class="modal-footer">
			 <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
	     </div>
       </div>

	</body>
</html>