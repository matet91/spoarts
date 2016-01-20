<?php session_start(); ?>
<?php 
			$id= '';
			$image = '';
			$name = '';
			$spname = '';
			$spdecription = '';
			$spaddress = '';
			$spowner = '';
			$sptype = '';
			$spemail = '';
			$spcontact = '';
			$spmobile ='';
			$spphoto = '';
			$spusername = '';
			if(isset($_SESSION['spname'])) { $spname = $_SESSION['spname']; $id = $_SESSION['user_id'];}
			if(isset($_SESSION['spname'])) { $spdecription = $_SESSION['spname']; }
			if(isset($_SESSION['spaddress'])) { $spaddress = $_SESSION['spaddress']; }
			if(isset($_SESSION['spcontact'])) { $spcontact = $_SESSION['spcontact']; }
			if(isset($_SESSION['spmobile'])) { $spmobile = $_SESSION['spmobile']; }
			if(isset($_SESSION['spemail'])) { $spemail = $_SESSION['spemail']; }
			if(isset($_SESSION['sptype'])) { $sptype = $_SESSION['sptype']; }
			if(isset($_SESSION['spowner'])) { $spowner = $_SESSION['spowner']; }
			if(isset($_SESSION['username'])) { $spusername = $_SESSION['username']; }
			if(isset($_SESSION['spphoto'])) { $spphoto = $_SESSION['spphoto']; }
		
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Service Provider </title>
	</head>
	
	<body>
	<?php include "sp-landing-header.php"; ?>


	<div class="row">
			<div class="col s2">
		    	<div class="section">
			 	  	
				 	  <!-- Left aligned menu below button -->
				 	  <div class="row">
					 	  <div class="collection z-depth-1">
					 	  	<div class="collection-item">
								<div class="container">
				 	  			<div class="profile-pic">
						    		<?php echo '<img class="z-depth-1" src="data:image;base64,'.$spphoto.' "> '; ?><a href="#!" class="grey-text text-darken-3" ><span><?php echo " $spowner"; ?></span> </a>
						  		</div>
				 	  		</div>					 	  		
					 	  	</div>
					       	<a href="sp-login.php" class="collection-item "><i class="material-icons left">person</i>Profile</a>
					       	<a href="sp-page.php" class="collection-item active"><i class="material-icons left">description</i>Page</a>
					        <a href="sp-reservations.php" class="collection-item"><i class="material-icons left">book</i>Reservations</a>
					        <a href="sp_enrollment.php" class="collection-item"><i class="material-icons left">check_circle</i>Enrolled clients</a>
					        <a href="#!" class="collection-item"><i class="material-icons left">notifications_none</i>News<span class="new badge">4</span></a>
					        <a href="sp_payment.php" class="collection-item"><i class="material-icons left">chrome_reader_mode</i>My payment</a>
					        
					      </div>
				      </div>
			  	</div>
		 	</div>



		 	<div class="col s9">
		    	<div class="section">
			 	  	
				 	  <!-- Left aligned menu below button -->
				 	  <?php include "page.php"; ?>
				    
			  	</div>
		 	</div>

			
		</div>

	</body>
	<!--script type="text/javascript">

		 


	</script-->
</html>