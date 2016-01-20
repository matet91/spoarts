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
		<title>Profile</title>

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
										<?php echo '<img class="z-depth-1" src="data:image;base64,'.$photo.' "> '; ?>
							    	<br/>
							    		<a href="#!" class="grey-text text-darken-3" ><span><?php echo $fullname; ?></span></a>
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

			<div class="col s12 m4 l8">
		    	<div class="section">
			 	  		<!-- Card Content -->
						<?php include'client_home.php'; ?>
			  	</div>
		 	</div>
		</div>




	</body>
</html>

