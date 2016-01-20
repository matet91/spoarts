<?php include 'controller/registrationConnection.php'; ?>
<?php
	if(!isset($_SESSION['islogin']))
	{
		header('Location: index.php');
		exit();
	}
	else
	{	
		$photo = '';
		$fullname='';
		if(isset($_SESSION['firstname']))
		{
			$fullname = $_SESSION['firstname'] ." ".$_SESSION['lastname'];
			$id = $_SESSION['user_id'];
			getimage($id);
		}
		if(isset($_SESSION['photo']))
		{
			$photo = $_SESSION['photo'];
		}	
	}
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Arts Results</title>
		<script>
				window.onload=function()
				{
					var url = "controller/dataController.php?action=getNoneRegisteredArtClinics";
					$.getJSON(url,function(result){
					for (var i = 0; i < result.length; i++) {
						var c = result[i];
						display(c);
					var url2 = "controller/dataController.php?action=getClinicsServices&spid="+d.SPID;
					$.getJSON(url2,function(result2){
					for (var i = 0; i < result2.length; i++) 
					{
						var d2 = result2[i];
						dis(result2[i]);
					 };
						function dis(e)
						{
							$('#displayServiceName2').append(" " + e.ServiceName + " ");
						}
					});
						};
		
				function display(d)
				{

								$('#displayArtsClinics').append(
										'<div class="col s12">'
								          +'<div class="card small">'
								            +'<div class="card-image">'
								              +'<img src="data:image;base64,'+d.splogo+'">'
								              +'<a href="#!" title="Arts Clinic"><span class="card-title">'+d.SPName+'</span></a>'
								            +'</div>'
								            +'<div class="card-content">'
								              +'<p><span>'+d.SPAddress+'</span> <span><a href="#!" title="Map location"><i class="material-icons right">location_on</i></a></span></p><hr><br>'
								              +'<p>Offered Services: <span id="displayServiceName2"></span>.</p>'
								              +'<div class="right-align"><a href="service-provider-page.php?id='+d.SPID+'" class="btn">View</a></div>'
								            +'</div>'
								          +'</div>'
								        +'</div>'
									);
						}
					});
				}	
		</script>
	</head>

	<body>
		<header>
			<?php include "client-header.php"; ?>
		</header>

		<div class="row">
			<div class="col s12 m4 l2">
		    	<div class="section">
			 	  	
				 	  <!-- Left aligned menu below button -->
				 	  <div class="row">
					 	  <div class="collection z-depth-1">
					 	  	<div class="collection-item">
								<div class="container">
					 	  			<div class="profile-pic">
							    		<?php echo '<img class="z-depth-1" src="data:image;base64,'.$photo.' "> '; ?>
							    		<br/>
							    		<a href="#!" class="grey-text text-darken-3" ><?php echo "$fullname"; ?></a>
							  		</div>
				 	  			</div>					 	  		
					 	  	</div>
					       	<a href="MyClinics.php" class="collection-item"><i class="material-icons left">list</i> My clinics</a>
					        <a href="#!" class="collection-item"><i class="material-icons left">favorite</i>My interests</a>
					        <a href="enrolled-clinics.php" class="collection-item"><i class="material-icons left">check_circle</i>Enrolled clinics</a>
					        <a href="#!" class="collection-item"><i class="material-icons left">notifications_none</i>News<span class="new badge">4</span></a>
							  <a href="#!" class="collection-item"><i class="material-icons left">chrome_reader_mode</i>My payment</a>
							  </div>
				      </div>

				  	
			  	</div>
		 	</div>

			<div class="col s9">
		    	<div class="section">
			 	  	 <div class="row" id="displayArtsClinics">


				         <!--div class="col s12">
				          <div class="card small">
				            <div class="card-image">
				              <img src="images/brush.jpg">
				              <a href="#!" title="Arts Clinic"><span class="card-title">Arts Clinic</span></a>
				            </div>
				            <div class="card-content">
				              <p>Mandaue City, Cebu <span><a href="#!" title="Map location"><i class="material-icons right">location_on</i></a></span></p><hr><br>
				              <p>Offered Services: Dancing, Singing, String Instruments.</p>
				              <div class="right-align"><a href="#!" class="btn">View</a></div>
				            </div>
				          </div>
				        </div>

				         <div class="col s12">
				          <div class="card small">
				            <div class="card-image">
				              <img src="images/brush.jpg">
				              <a href="#!" title="Arts Clinic"><span class="card-title">Arts Clinic</span></a>
				            </div>
				            <div class="card-content">
				              <p>Mandaue City, Cebu <span><a href="#!" title="Map location"><i class="material-icons right">location_on</i></a></span></p><hr><br>
				              <p>Offered Services: Dancing, Singing, String Instruments.</p>
				              <div class="right-align"><a href="#!" class="btn">View</a></div>
				            </div>
				          </div>
				        </div>

				         <div class="col s12">
				          <div class="card small">
				            <div class="card-image">
				              <img src="images/brush.jpg">
				              <a href="#!" title="Arts Clinic"><span class="card-title">Arts Clinic</span></a>
				            </div>
				            <div class="card-content">
				              <p>Mandaue City, Cebu <span><a href="#!" title="Map location"><i class="material-icons right">location_on</i></a></span></p><hr><br>
				              <p>Offered Services: Dancing, Singing, String Instruments.</p>
				              <div class="right-align"><a href="#!" class="btn">View</a></div>
				            </div>
				          </div>
				        </div-->
				     </div>
			  	</div>
		 	</div>
		</div>
	</body>
</html>