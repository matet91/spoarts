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
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<link rel="stylesheet" href="materialize/css/stylesheet.css">
	</head>
	

	<body>
		  <div class="navbar-fixed">
			    <nav>
			      <div class="nav-wrapper">
			        <a href="index.php" class="brand-logo"><img  id="logo" src="images/logo-white.png"></a>
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
				          <input id="icon_prefix" type="text" class="validate" required>
				          <label for="icon_prefix">Username</label>
				        </div>
				       </div>
				       <div class="row">
				        <div class="input-field col s12">
				          <i class="material-icons prefix">lock_circle</i>
				          <input id="icon_telephone" type="password" required>
				          <label for="icon_telephone">Password</label>
				        </div>
				      </div>
				    </form>
				  </div>
			    </div>
			    <div class="modal-footer">
			      <a href="#!" class=" modal-action waves-effect waves-green btn-flat">Login</a>
			      <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
			    </div>
			 </div>



			<!--Modal for Register options-->
			<div id="modal2" class="modal">
				<form name="rdbtn" method="POST" action="index.php">
			    <div class="modal-content">
			      <h4><img  id="modal-logo" src="images/logo.png"></h4>
			      <hr>
			      <div class="row">
					   
					   	<h6>Register as: </h6>
					    <div class="input-field col s12">
					      <input class="with-gap" name="RegChoice" type="radio" id="test1" value="0" checked/>
					      <label for="test1" title="This is for Arts and Sports Enthusiasts">Client</label>
					    </div>
					    <div class="input-field col s12">
					      <input class="with-gap" name="RegChoice" type="radio" id="test2" value="1" />
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
			      <button type="submit" name="submit" class="waves-effect waves-green btn-flat">Submit</button>
			      <a class=" modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
			    </div>
			    </form>
			 </div>


			 <div id="modal3" class="modal">
				<form name="rdbtn" method="POST" action="index.php">
			    <div class="modal-content">
			      <h4><img  id="modal-logo" src="images/logo.png"></h4>
			      <hr>
			      <div class="row">
					   
					   	<h6>To view the clinics you must to register or login.</h6>
				  </div>
			    </div>
			    <div class="modal-footer">
			      <button type="submit" href="registration-client.php" name="submit" class="waves-effect waves-green btn blue accent-2">Sign up</button>
			      <a class=" modal-action modal-close waves-effect waves-green btn-flat ">Cancel</a>
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

			$(document).ready(function(){
    			// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
			  $('.modal-trigger').leanModal();
			});


			$(document).ready(function(){
		    	$(".button-collapse").sideNav();
		  	});

		</script>
	</body>


</html>




