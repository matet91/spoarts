	<?php session_start(); ?>
	<?php 
		if(!isset($_SESSION['islogin']))
		{
			header('Location: index.php');
			exit();
		}
		else
		{	
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
		}

    ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Service Provider </title>
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	</head>
	
	<body>
	<?php include "sp_login_header.php"; ?>


	<div class="row">
			<div class="col s2">
		    	<div class="section">
			 	  	
				 	  <!-- Left aligned menu below button -->
				 	  <div class="row">
					 	  <div class="collection z-depth-1">
					 	  	<div class="collection-item">
								<div class="container">
				 	  			<div class="profile-pic">
						    		<?php echo '<img class="z-depth-1" src="data:image;base64,'.$spphoto.' "> '; ?><a href="#!" class="grey-text text-darken-3" ><span><?php echo $spowner; ?></span></a>
						  		</div>
				 	  		</div>					 	  		
					 	  	</div>
					       	<a href="sp-login.php" class="collection-item active"><i class="material-icons left">person</i>Profile</a>
					       	<a href="sp-page.php" class="collection-item"><i class="material-icons left">description</i>Page</a>
					        <a href="sp-reservations.php" class="collection-item"><i class="material-icons left">book</i>Reservations</a>
					        <a href="sp_enrollment.php" class="collection-item"><i class="material-icons left">check_circle</i>Enrolled clients</a>
					        <a href="#!" class="collection-item"><i class="material-icons left">notifications_none</i>News<span class="new badge">4</span></a>
					        <a href="sp_payment.php" class="collection-item"><i class="material-icons left">chrome_reader_mode</i>My payment</a>
					        
					      </div>
				      </div>
			  	</div>
		 	</div>



		 	<div class="col s10">
		 	<div id="spprof">
		    	<div class="section">
			 	  	<div class="card-panel">
				 	  <!-- Left aligned menu below button -->
				 	  <div class="row">

						  <div>
						    <h5>Owner Profile</h5><hr>  
						  </div>
						  <div id="pic" hidden></div>
							<div class="right-align">
								<a href="#editSPProfile" class="modal-trigger btn tooltipped" data-tooltip="Edit profile">Edit</a>
							</div>
						  
						  <div class="col s3">
						    <div class="profile-pic">
						      <?php echo '<img class="z-depth-1" src="data:image;base64,'.$spphoto.' "> '; ?>
						        <a href="#editSPPicture" class="modal-trigger btn-floating red tooltipped " style="margin-left: -55%; margin-top: 70px;" data-tooltip="Change profile picture">
						        <i class="material-icons left">edit</i></a>
						    </div>
						  </div>
						  
						  <div class="input-field col s9">
						  <h6>Owner Name</h6>
						    <input id="first_name" type="text" value="<?php echo $spowner; ?>" readonly/>
						  </div>

							<div class="input-field col s12">
							  <h6>Clinic Name</h6>
						      <input id="first_name" type="text" value="<?php echo $spname; ?>" readonly/>
						  </div>

							<div class="input-field col s12">
							  <h6>Address</h6>
						      <input id="first_name" type="text" value="<?php echo $spaddress; ?>" readonly/>
						    </div>
						    <div class="input-field col s6">
							  <h6>Telephone number</h6>
						      <input id="first_name" type="text" value="<?php echo $spcontact; ?>" readonly/>
						    </div>
						    <div class="input-field col s6">
							  <h6>Mobile number</h6>
						      <input id="first_name" type="text" value="<?php echo $spmobile; ?>" readonly/>
						    </div>

						    <div class="input-field col s6">
						    <h6>Clinic Type</h6>
						      <input id="first_name" type="text" value="<?php echo $sptype; ?>" readonly/>
						    </div>

						    <div class="input-field col s6">
							  <h6>Email</h6>
						      <input id="first_name" type="text" value="<?php echo $spemail; ?>" readonly/>
						    </div>
						    
						    
						</div>
				    </div>
			  	</div>
		 	</div>

			</div>
		</div>

	</body>


	<div id="editSPProfile" class="modal">
			    <div class="modal-content">
			      <h4 class="center"><img  id="modal-logo" src="images/logo.png"></h4>
			      <hr>
			      <div class="row">
				    <form class="col s12">

				       <div class="row">
				        <div class="input-field col s12">
				          <i class="material-icons prefix">person</i>
				          <input type="text" id="espowner" required value="<?php echo $spowner; ?>"><span id="esp1"></span>
				          <label>Owner Name</label>
				        </div>
				      </div>

				      <div class="row">
				        <div class="input-field col s12">
				          <i class="material-icons prefix">home</i>
				          <input type="text" required id="espname" value="<?php echo $spname; ?>"><span id="esp2"></span>
				          <label>Clinic Name</label>
				        </div>
				      </div>

				      <div class="row">
				        <div class="input-field col s12">
				          <i class="material-icons prefix">account_circle</i>
				          <input type="text" required id="espusername" value="<?php echo $spusername; ?>"><span id="esp3"></span>
				          <label>Username</label>
				        </div>
				      </div>

				      <div class="row">
				        <div class="input-field col s12">
				          <i class="material-icons prefix">location_on</i>
				          <input type="text" class="validate" id="espaddress" required value="<?php echo $spaddress; ?>"><span id="esp4"></span>
				          <label>Address</label>
				        </div>
				       </div>

				       <div class="row">
				        <div class="input-field col s12">
				          <i class="material-icons prefix">contact_phone</i>
				          <input  type="text" required id="espcontact" value="<?php echo $spcontact; ?>"><span id="esp5"></span>
				          <label>Telephone Number</label>
				        </div>
				      </div>

				       <div class="row">
				        <div class="input-field col s12">
				          <i class="material-icons prefix">contact_phone</i>
				          <input  type="text" required id="espmobile" value="<?php echo $spmobile; ?>"><span id="esp6"></span>
				          <label>Mobile Number</label>
				        </div>
				      </div>


				      <div class="row">
				        <div class="input-field col s12">
				        <i class="material-icons prefix">style</i><br>
						  <select class="browser-default" id="esptype"><span id="esp7"></span>
						    <option value="" disabled selected>Clinic Type</option>
						    <option <?php if($sptype=="Arts"){ echo "selected"; }?> value="Arts" >Arts (example: Singing, Dancing, Guitar and etc..)</option>
						    <option <?php if($sptype=="Sports"){ echo "selected"; }?> value="Sports" >Sports (example: Taekwondo, Judo, Basketball and etc..)</option>
						    <option <?php if($sptype=="Both"){ echo "selected"; }?> value="Both">Both (example: Singing, Dancing, Judo, Basketball and etc..)</option>
						  </select>
				        </div>
				      </div>

					 <div class="row">
				        <div class="input-field col s12">
				          <i class="material-icons prefix">email</i>
				          <input type="email" required id="espemail" value="<?php echo $spemail; ?>"><span id="esp8"></span>
				          <label>Email</label>
				        </div>
				      </div>
				    </form>
				  </div>
			    </div>
			    <div class="modal-footer">
			      <a href="#!" class=" modal-action waves-effect waves-green btn-flat" onclick="editSPDetails()">Submit</a>
			      <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
			    </div>
	</div>


		<!--EDIT OWNER PROFILE -->
		<div id="editSPPicture" class="modal">
		<form method="post" enctype="multipart/form-data">
		    <div class="modal-content">
		      <h4 class="center"><img  id="modal-logo" src="images/logo.png"></h4>
		      <hr>
		      <div class="row">
			    <span class="col s12">

			      <div class="row">
			    	 <div class="file-field input-field">
				      <div class="btn tooltipped" data-position="bottom" data-delay="50" 
			      	data-tooltip="Change profile picture">
				        <span>Image</span>
				        <input type="file" name="spimage">
				      </div>
				      <div class="file-path-wrapper">
				        <input class="file-path validate" placeholder="Change profile picture" type="text">
				      </div>
				    </div>
			       </div>
			    </span>
			  </div>
		    </div>
		    <div class="modal-footer">
		     
		       <button class=" modal-action  waves-effect waves-green btn-flat" type="submit" name="spupload" onclick="spRefresh()">Change</button>
		      <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
		    </div>
		    </form>
		</div>

		<?php
			
			if(isset($_POST['spupload']))
			{
				
				if(!getimagesize($_FILES['spimage']['tmp_name'])==FALSE)
				{
						$image = addslashes($_FILES['spimage']['tmp_name']);
						$name = addslashes($_FILES['spimage']['name']);
						$image = file_get_contents($image);
						$image = base64_encode($image);
						saveSPimage($name,$image,$id);
					
				}
			}


			function saveSPimage($photoname,$image,$id)
			{
				
				$db = new PDO('mysql:host=localhost;dbname=spoarts',"root","");
				$sql = "UPDATE service_providers SET spphotoName = ?, spphoto = ? WHERE UserID = ?";
				$cmd = $db->prepare($sql);
				$cmd->execute(array($photoname,$image,$id));
				$db = null;
				getSPimage($id);

				return "Image uploaded"; 
			}

			function getSPimage($id)
			{
				$db = new PDO('mysql:host=localhost;dbname=spoarts',"root","");
				$sql = "SELECT * FROM service_providers WHERE UserID = ?" ;
				$cmd = $db->prepare($sql);
				$cmd->execute(array($id));
				$row = $cmd->fetch();
				$db = null;
				if($row)
				{
					$_SESSION['spphotoname'] = $row['spphotoName'];
					$_SESSION['spphoto'] = $row['spphoto'];
					echo("<meta http-equiv='refresh' content='0'>");
					
					return $row;
				}
				else
				{
				return "No image found"; 
				}
			}
		?>


	<script type="text/javascript">
		/*$(document).ready(function(){
		    $('.modal-trigger').leanModal();
		  });*/

		$(document).ready(function() {
			$('select').material_select();
		});
      
	</script>

	
</html>


