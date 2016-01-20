<!DOCTYPE html>
<html>
	<head>
		<title>Sports Results</title>
		
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script>
				window.onload=function()
				{
					var url = "controller/dataController.php?action=getNoneRegisteredSportClinics";
					$.getJSON(url,function(result){
						for (var i = 0; i < result.length; i++) {
							var c = result[i];
							display(c);
						}
					});
				}	

					
				
		</script>
	</head>

	<body>
		<header>
			<?php include "header_index.php"; ?>
		</header>
		<script>
				function display(c)
					{
						$('#display_sports_clinics').append
						(
							'<div class="col s12">'
			    				+'<div class="section">'
				 	  	 		+'<div class="row">'
					          	+'<div class="col s12">'
					          	+'<div class="card small">'
					            +'<div class="card-image">'
					            //+'<img src="images/brush.jpg">'
					             +'<img class="z-depth-1" src="data:image;base64,'+c.splogo+' ">'
					            +'<a href="#!" title="Click to view the page."><span class="card-title">'
					            +'<span>'+c.SPName+'</span></span></a>'
					            +'</div>'
					            +'<div class="card-content">'
					         	+'<p><span>'+c.SPAddress+'</span><span><a  href="#" title="Map location" onclick="showmap('+c.SPID+')">'
					            +'<i class="material-icons right" >location_on</i></a></span></p><hr><br>'
					            +'<p>Offered Services: Dancing, Singing, String Instruments.</p>'
					            +'<div class="right-align">'
					            +'<a href="#" class="btn modal-trigger" onclick="viewloginmodal()">Login</a>'
					            +'<a href="registration-client.php" class="btn blue accent-2">Sign up</a></div>'
					            +'</div>'
					            +'</div>'
					        	+'</div>'
					        	+'</div>'
					        	+'</div>'
					        	+'</div>'
							);
					}

					function showmap(id)
		 	{
		 		var url = "controller/dataController.php?action=getNoneRegiteredSportClinicsAddress&id="+id;
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


					function viewloginmodal()
					{
						 $('#modal1').openModal();
					}
		</script>
		<div class="container">
			<div class="row">
				<div class="col s12">
			    	<div class="section">
				 	  	 <div class="row">
				 	  	 <span id="display_sports_clinics"></span>

					     </div>
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