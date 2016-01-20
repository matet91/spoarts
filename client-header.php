<?php 

		$id = '';
		$name = '';
		$ce_fname = '';
		$ce_lname = '';
		$ce_address = '';
		$ce_username = '';
		$ce_contact = '';
		$ce_email = '';
		$ce_uname = '';
		if(isset($_SESSION['firstname']))
		{   
			$name = $_SESSION['firstname'];
			$id = $_SESSION['user_id'];
			$ce_fname = $name;
		}
		if(isset($_SESSION['lastname']))
		{
			$ce_lname = $_SESSION['lastname'];	
		}
		
		if(isset($_SESSION['address']))
		{
			$ce_address = $_SESSION['address'];
		}
		if(isset($_SESSION['username']))
		{
			$ce_uname = $_SESSION['username'];
		}
		if(isset($_SESSION['contact']))
		{
			$ce_contact = $_SESSION['contact'];
		}
		if(isset($_SESSION['email']))
		{
			$ce_email = $_SESSION['email'];
		}
	?>
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
		<link rel="stylesheet" href="materialize/css/client-profile.css">
		<link rel="stylesheet" href="materialize/css/errormessage.css">
		<!-- Compiled and minified JavaScript -->
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/registrationManager.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>       
		<script src="//cdn.transifex.com/live.js"></script>
	</head>
	<body>
			<ul id="dropdown1" class="dropdown-content">
			  <li><a href="my_client_profile.php"><i class="material-icons left">person</i>Profile</a></li>
			  <li><a href="#changePassword" class="modal-trigger"><i class="material-icons left">lock_outline</i>Change Password</a></li>
			  <li class="divider"></li>
			  <li><a href="#" onclick="client_logout()"><i class="material-icons left">power_settings_new</i>Logout</a></li>
			</ul>

		  	<div class="navbar-fixed">
			    <nav>
			      <div class="nav-wrapper">
			        <a href="index.php" class="brand-logo"><img  id="logo" src="images/logo-white.png"></a>
      				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">toc</i></a>
			        <ul id="navs" class="right hide-on-med-and-down">
			          <li><a href="client-profile.php">Home</a></li>
			          <li><a href="arts_result.php">Arts</a></li>
				      <li><a href="sports_result.php">Sports</a></li>
			          <li>Welcome! <span><?php echo "$name"; ?></span></li>
			          <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons right">more_vert</i></a></li>
			        </ul>
			        
			      </div>
			    </nav>
  		 	 </div>


  		 				  
			<!--MODAL FOR CHANGE PASSWORD-->
			<div id="changePassword" class="modal">
			    <div class="modal-content">
			      <h4><img  id="modal-logo" src="images/logo.png"></h4>
			      <hr>
			      <div class="row">
				    <form class="col s12">

				      <div class="row">
				        <div class="input-field col s12">
				          <i class="material-icons prefix">lock_open</i>
				          <input type="password" required id="cpold"><span id="cpe1"></span>
				          <label>Old Password</label>
				        </div>
				      </div>

				       <div class="row">
				        <div class="input-field col s12">
				          <i class="material-icons prefix">lock_circle</i>
				          <input class="icon_telephone" type="password" required id="cpnew"><span id="cpe2"></span>
				          <label for="icon_telephone">New Password</label>
				        </div>
				      </div>

				      <div class="row">
				        <div class="input-field col s12">
				          <i class="material-icons prefix">lock_circle</i>
				          <input class="icon_telephone" type="password" required id="cpconew"><span id="cpe3"></span>
				          <label for="icon_telephone">Confirm New Password</label>
				        </div>
				      </div>

				    </form>
				  </div>
			    </div>
			    <div class="modal-footer">
			      <a href="#" class=" modal-action waves-effect waves-green btn-flat" onclick="clientChangePassword()">Submit</a>
			      <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
			    </div>
			 </div>



	 <!--MODAL edit your profile-->
  		 	<div id="editProfile" class="modal">
			    <div class="modal-content">
			      <h4><img  id="modal-logo" src="images/logo.png"></h4>
			      <hr>
			     <div class="row">
				    <form class="col s12">

				       <div class="row">
				        <div class="input-field col s12">
				          <i class="material-icons prefix">person</i>
				          <input type="text" required id="ce_fname" value="<?php echo $ce_fname; ?>"><span id="cee_1"></span>
				       <label for="ce_fname">First name</label>
				       </div>
				      </div>

				      <div class="row">
				       <div class="input-field col s12">
				          <i class="material-icons prefix">person</i>
				          <input type="text" required id="ce_lname" value="<?php echo $ce_lname; ?>"><span id="cee_2"></span>
				     	<label>Last name</label>
				        </div>
				      </div>


				      <div class="row">
				       <div class="input-field col s12">
				          <i class="material-icons prefix">account_circle</i>
				          <input type="text" required id="ce_uname" value="<?php echo $ce_uname; ?>"><span id="cee_3"></span>
				     	<label>Username</label>
				       </div>
				      </div>

				      <div class="row">
				      	<div class="input-field col s12">
				          <i class="material-icons prefix">home</i>
				          <input type="text"  required id="ce_address" value="<?php echo $ce_address; ?>"><span id="cee_4"></span>
				      	<label>Home Address</label>
				       </div>
				       </div>

					  <div class="row">
				      	<div class="input-field col s12">
				          <i class="material-icons prefix">contact_phone</i>
				          <input  type="text" required id="ce_contact" value="<?php echo $ce_contact; ?>"><span id="cee_5"></span>
				     	   <label>Contact Number</label>	
				        </div>
				      </div>

				      <div class="row">
				       <div class="input-field col s12">
				          <i class="material-icons prefix">email</i>
				          <input type="email" required id="ce_email" value="<?php echo $ce_email; ?>"><span id="cee_6"></span>
				     	<label>Email</label>
				       </div>
				      </div>
				    </form>
				  </div>
			    </div>
			    <div class="modal-footer">
			      <a href="#!" class=" modal-action waves-effect waves-green btn-flat" onclick="updateClientProfile()">Submit</a>
			      <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
			    </div>
			</div>
			 
			  
	</body>

	<script type="text/javascript">

		  $(document).ready(function(){
		    $(".dropdown-button").dropdown();
		  });
		  $(document).ready(function(){
		    $('.tooltipped').tooltip({delay: 50});
		  });
       
	</script>
</html>

