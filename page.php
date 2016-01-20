	<?php 
		if(!isset($_SESSION['islogin']))
		{
			header('Location: index.php');
			exit();
		}
		else
		{
			$id = '';	
			$spname = '';
			$spdecription = '';
			$spaddress = '';
			$spowner = '';
			$sptype = '';
			$spemail = '';
			$spcontact = '';
			$splogo = '';
			$splogoname = '';
			if(isset($_SESSION['spname'])) { $spname = $_SESSION['spname']; $id = $_SESSION['user_id']; }
			if(isset($_SESSION['spname'])) { $spdecription = $_SESSION['spname']; }
			if(isset($_SESSION['spaddress'])) { $spaddress = $_SESSION['spaddress']; }
			if(isset($_SESSION['spcontact'])) { $spcontact = $_SESSION['spcontact']; }
			if(isset($_SESSION['spemail'])) { $spemail = $_SESSION['spemail']; }
			if(isset($_SESSION['sptype'])) { $sptype = $_SESSION['sptype']; }
			if(isset($_SESSION['spowner'])) { $spowner = $_SESSION['spowner']; }
			if(isset($_SESSION['splogo'])) { $splogo = $_SESSION['splogo']; }
			if(isset($_SESSION['splogoname'])) { $splogoname = $_SESSION['splogoname']; }
		}
    ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Service Provider Page</title>
	<script type="text/javascript" src="js/registrationManager.js"></script>
	<link rel="stylesheet" href="materialize/css/errormessage.css">
	</head>
	
	<body>
		<div class="parallax-container z-depth-1">
		<form method="post" enctype="multipart/form-data">
	      <div class="file-field input-field col s12">
		      <div class="btn small">
		        <span>Image</span>
		        <input type="file" name = "splogo">
		      </div>
		      <div class="file-path-wrapper">
		       <input class="file-path validate" type="text">
		      </div>
		  </div>
		  <div class="right-align" style="padding: 20px;">
			   <button class="btn" type="submit" name="splogoupload">Update</button>
		  </div>
		  </form>
	      <div class="parallax">
	      	<?php echo '<img class="z-depth-1" src="data:image;base64,'.$splogo.' "> '; ?>
	      </div>
	    </div>
	    <div class="row" style="margin-top: 20px;">
		    <div class="col s12">
		      <ul class="tabs">
		        <li class="tab col s3"><a class="active" href="#info">Info</a></li>
		        <li class="tab col s3"><a  href="#services">Services</a></li>
		        <li class="tab col s3"><a  href="#promos">Promos</a></li>
		        <li class="tab col s3"><a href="#gallery">Gallery</a></li>
		        <li class="tab col s3"><a href="#ratings">Ratings & Reviews</a></li>
		      </ul>
		    </div>
		    <!--info tab-->
		    <div id="info" class="col s12">
			    <div class="card-panel">
			 		<?php include "sp_profile_edit.php"; ?>
			    </div>
		    
		    </div>

		    <!--services tab -->
		    <div id="services" class="col s12">
		    	<?php include "sp_services.php" ?>
		    </div>

		    <!--promos tab-->
		    <div id="promos" class="col s12">
			    	<?php include "sp_promos.php"; ?>
		    </div>

		    <!--gallery tab-->
		    <div id="gallery" class="col s12">
			    	<?php include "sp_gallery.php"; ?>
		    </div>

		    <!--ratings tab-->
		    <div id="ratings" class="col s12">
		    	<?php include 'sp_ratings_and_reviews.php';?>
		    </div>

		</div>

<?php
			
			if(isset($_POST['splogoupload']))
			{
				
				if(!getimagesize($_FILES['splogo']['tmp_name'])==FALSE)
				{
						$image = addslashes($_FILES['splogo']['tmp_name']);
						$name = addslashes($_FILES['splogo']['name']);
						$image = file_get_contents($image);
						$image = base64_encode($image);
						saveSPLogo($name,$image,$id);
					
				}
			}


			function saveSPLogo($photoname,$image,$id)
			{
				
				$db = new PDO('mysql:host=localhost;dbname=spoarts',"root","");
				$sql = "UPDATE service_providers SET splogoName = ?, splogo = ? WHERE UserID = ?";
				$cmd = $db->prepare($sql);
				$cmd->execute(array($photoname,$image,$id));
				$db = null;
				getSPLogo($id);

				return "Image uploaded"; 
			}

			function getSPLogo($id)
			{
				$db = new PDO('mysql:host=localhost;dbname=spoarts',"root","");
				$sql = "SELECT * FROM service_providers WHERE UserID = ?" ;
				$cmd = $db->prepare($sql);
				$cmd->execute(array($id));
				$row = $cmd->fetch();
				$db = null;
				if($row)
				{
					$_SESSION['splogo'] = $row['splogo'];
					$_SESSION['splogoname'] = $row['splogoName'];
					echo("<meta http-equiv='refresh' content='0'>");
					
					return $row;
				}
				else
				{
				return "No image found"; 
				}
			}
		?>


		
        

	</body>



	<script type="text/javascript">
		 $(document).ready(function(){
	       $('.parallax').parallax();
	     });
		$(document).ready(function(){
	       $('ul.tabs').tabs('select_tab', 'tab_id');
	  	});

		$(document).ready(function() {
		   $('select').material_select();
		 });
	</script>
</html>