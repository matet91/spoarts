
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
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lobster" />
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Cookie" />
		<link rel="stylesheet" href="materialize/css/stylesheet.css">
		<!--JAVASCRIPT -->
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/registrationManager.js"></script>
	</head>
	<body>
		 <div class="navbar-fixed">
			    <nav>
			      <div class="nav-wrapper">
			        <a href="#!" class="brand-logo"><img  id="logo" src="images/logo-white.png"></a>
      				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">toc</i></a>
			        <ul id="navs" class="right hide-on-med-and-down">
			          <li><a href="index.php">Home</a></li>
			          <li><a href="arts_index_result.php">Arts</a></li>
				      <li><a href="sports_index_result.php">Sports</a></li>
			          <li><a class="modal-trigger" href="#modal1">Login</a></li>
			          <li><a class="modal-trigger" href="#modal2">Register</a></li>
			          <li><a href="#">About us</a></li>
			        </ul>
			        <ul class="side-nav" id="mobile-demo">
			          <li><a href="#">Home</a></li>
				      <li><a href="#">Sports</a></li>
				      <li><a href="#">Arts</a></li>
			          <li><a class="modal-trigger" href="#modal1">Login</a></li>
			          <li><a class="modal-trigger" href="#modal2">Register</a></li>
			          <li><a href="#">About us</a></li>
			        </ul>
			      </div>
			    </nav>
  		  </div>


  		  	<!--Home Slider-->
  		   	<div class="slider fullscreen">
			    <ul class="slides">
			      <li>
			        <img src="images/sportsball.jpg"> <!-- random image -->
			        <div class="caption center-align">
			          <h3><span id="welcome">Welcome to </span><span id="spo">Spo</span><span id="arts">Arts!</span></h3>
			          <h5 class="light grey-text text-lighten-3">Learn from the experts, Go to the right clubs.</h5>
			        </div>
			      </li>
			      <li>
			        <img src="images/arts.jpg"> <!-- random image -->
			        <div class="caption left-align">
			          <h3>Left Aligned Caption</h3>
			          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
			        </div>
			      </li>
			      <li>
			        <img src="images/sports.png"> <!-- random image -->
			        <div class="caption right-align">
			          <h3>Right Aligned Caption</h3>
			          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
			        </div>
			      </li>
			      <li>
			        <img src="images/artscover.jpg"> <!-- random image -->
			        <div class="caption right-align">
			          <h3>This is our big Tagline!</h3>
			          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
			        </div>
			      </li>
			    </ul>
		  	</div>

		  	<!--Modal for login-->
		  	<div id="modal1" class="modal">
			    <div class="modal-content">
			      <h4><img  id="modal-logo" src="images/logo.png"></h4>
			      <hr>
			      <div class="row">
				    <form class="col s12">
				      <div class="row">
				        <div class="input-field col s12">
				          <i class="material-icons prefix">account_circle</i>
				          <input id="user_login_username" type="text" class="icon_prefix validate" required>
				          <label for="icon_prefix">Username</label>
				        </div>
				       </div>
				       <div class="row">
				        <div class="input-field col s12">
				          <i class="material-icons prefix">lock_circle</i>
				          <input id="user_login_password" class="icon_telephone " type="password" required>
				          <label for="icon_telephone">Password</label>
				        </div>
				      </div>
				    </form>
				  </div>
			    </div>
			    <div class="modal-footer">
			      <a href="#" class=" modal-action  waves-effect waves-green btn-flat" onclick="user_login_validate()">Login</a>
			      <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
			    </div>
			 </div>


			<!--Modal for Register options-->
			<div id="modal2" class="modal">
				<form name="rdbtn" method="post">
			    <div class="modal-content">
			      <h4><img  id="modal-logo" src="images/logo.png"></h4>
			      <hr>
			      <div class="row">
					   <h6>Register as: </h6>
					    <div class="input-field col s12">
					      <input type="radio" class="with-gap" name="RegChoice" id="test1" value="0"/>
					      <label for="test1" title="This is for Arts and Sports Enthusiasts">Client</label>
					    </div>
					    <div class="input-field col s12">
					      <input type="radio" class="with-gap" name="RegChoice" id="test2" value="1" />
					      <label for="test2" title="This is for Arts and Sports Providers">Service Provider</label>
					    </div>
					    <div class="row">
					    	<h6 id="reg-note">Note:</h6>
					    	<p id="lbl-reg"><b>Client</b> for those arts and sports enthusiasts</p>
					    	<p id="lbl-reg"><b>Service Provider</b> for those arts and sports providers</p>
					    </div>
				  </div>
			    </div>
			    <div class="modal-footer">
			      <a class=" modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
			    </div>
			    </form>
			 </div>

		<!-- Compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>       
		<script src="//cdn.transifex.com/live.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
			    $('.slider').slider({full_width: true});
			});
			/*
			$(document).ready(function(){
    			// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
			  $('.modal-trigger').leanModal();
			});

				*/
			$(document).ready(function(){
		    	$(".button-collapse").sideNav();
		  	});
			
			$('#test1').click(function(){
				window.location.href="registration-client.php";
			});
			$('#test2').click(function(){
				window.location.href="registration-servicePR.php";
			});
			
		</script>
		<?php //include('controller/registrationConnection.php'); 
		 //clientLogout();
		// SPLogout();	
?>
	</body>
</html>




