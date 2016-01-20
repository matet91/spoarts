<?php session_start(); ?>
<?php
	if(!isset($_SESSION['islogin']))
	{
		header('Location: index.php');
		exit();
	}
	else
	{	
		$name='';
		if(isset($_SESSION['firstname'] && $_SESSION['lastname']))
		$fullname = $_SESSION['firstname'] ." ".$_SESSION['lastname'];
	}
 ?>

 

<!DOCTYPE html>
<html>
	<head>
		<title>Profile</title>
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/registrationManager.js"></script>

		

	</head>
	
	<body>
		<?php include "client-header.php"; ?>
		<script>
				window.onload=function(){
				
					var url = "controller/dataController.php?action=getArtsClinics";
					$.getJSON(url,function(result){
					
					for(var i=0;i<result.length;i++){
					var c = result[i];

					da(c);
					} 				
				
					});

					function da(c)
				{
					$('#displayclinic').append(

				          	       +'<div class="col s12">'
				          			 +'<div class="card small">'
				            		   +'<div class="card-image">'
				           				 +'<img src="images/brush.jpg">'
				            				+'<a href="service-provider-page.php" title="Click to view the page.">'
				            				   +'<span class="card-title">'
				            				      +'<span>'+c.SPName+'</span>'
				            				   +'</span>'
				            				+'</a>'
				            			 +'</div>'
				            			      +'<div class="card-content">'
				            			      +'<p><span>'+c.SPAddress+'</span>'
				            			      +'<span>'
				            			      	  +'<a href="#!" title="Map location">'
				                					 +'<i class="material-icons right">location_on</i>'
				                			     +'</a>'
				                			  +'</span>'
				                			  +'</p><hr><br>'
				            				+'<p>Offered Services: Dancing, Singing, String Instruments.</p>'
				            		+'<div class="right-align"><a href="service-provider-page.php" class="btn">View</a></div>'
				            				+'</div>'
				            		      +'</div>'
				        		        +'</div>'
							 
												        	
				        	
				        	
				 						);
				}
		}
			
			function viewPage()
			{
				window.location.href="service-provider-page.php";
			}
		</script>


		<div class="row">
			<div class="col s12 m4 l2">
		    	<div class="section">
			 	  	
				 	  <!-- Left aligned menu below button -->
				 	  <div class="row">
					 	  <div class="collection z-depth-1">
					 	  	<div class="collection-item">
								<div class="container">
					 	  			<div class="profile-pic">
							    		<img class="z-depth-1" src="images/cubs.jpg"><a href="#!" class="grey-text text-darken-3" ><span><?php echo $fullname ?></span></a>
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


				<div class="col s12 m4 l10">
			    	<div class="section">
				 	  	<div class="row">
				 	  	<div class="container">
				 	  		<span id="displayclinic"></span>
				 	  	</div>
				 		</div>
				 	</div>
			 	</div>
			 	  	
			 	
</div>		 	
			

	</body>
</html>