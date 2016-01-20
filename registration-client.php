<!DOCTYPE html>
<html>
	<head>
		
		<title>Create SpoArts Account</title>
		<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="HandheldFriendly" content="true"/>
		<meta name="MobileOptimized" content="320"/> 
		<!-- Compiled and minified CSS -->
		
			 <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

			<link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lobster" />
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Cookie" />
		
		<link rel="stylesheet" href="materialize/css/stylesheet.css">
		<script type="text/javascript" src="js/registrationManager.js"></script>
		<!-- Compiled and minified JavaScript -->
	
		<!--//////////////////////////////////////////////-->
	
	</head>
	

	<body>
		  	<div class="navbar-fixed">
			    <nav>
			      <div class="nav-wrapper">
			        <a href="index.php" class="brand-logo"><img  id="logo" src="images/logo-white.png"></a>
      				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">toc</i></a>
			        <ul id="navs" class="right hide-on-med-and-down">
			          <li><a class="modal-trigger" href="#modal1">Login</a></li>
			          <li><a class="modal-trigger" href="#modal2">Register</a></li>
			        </ul>
			        <ul class="side-nav" id="mobile-demo">
			          <li><a class="modal-trigger" href="#modal1">Login</a></li>
			          <li><a class="modal-trigger" href="#modal2">Register</a></li>
			        </ul>
			      </div>
			    </nav>
  		 	 </div>
  		 	 <div class="container right" style="margin-top: 50px;">
  		 	 	<h4>Create your </span><span id="spo">Spo</span><span id="arts">Arts</span> Client Account</h4>
	  		 	 <div style="margin-top: 50px;" class="row">
				    <form class="col s5">
				      <div class="row">
				        <div class="input-field col s6">
				          <input id="reg_first_name" type="text" class="validate" required><span id="rc_e1"></span>
				          <label for="reg_first_name">First Name</label>
				        </div>
				        <div class="input-field col s6">
				          <input id="reg_last_name" type="text" class="validate" required><span id="rc_e2"></span>
				          <label for="reg_last_name">Last Name</label>
				        </div>
				      </div>
				      <div class="row">
				        <div class="input-field col s12">
				          <input id="reg_email" type="email" class="validate" required><span id="rc_e3"></span>
				          <label for="reg_email" data-error="wrong" data-success="right">Email</label>
				        </div>
				      </div>
				      <div class="row">
				        <div class="input-field col s12">
				          <input id="reg_username" type="text" class="validate" required><span id="rc_e4"></span>
				          <label for="text">Username</label>
				        </div>
				      </div>
				      <div class="row">
				        <div class="input-field col s12">
				          <input name="reg_password" type="password" class="validate" id="reg_password" required><span id="rc_e5"></span>
				          <label for="password">Password</label>
				        </div>
				      </div>
				      <div class="row">
				        <div class="input-field col s12">
				          <input name="reg_confirm_password" id="reg_confirm_password" type="password" class="validate" required><span id="rc_e6"></span>
				          <label for="password" >Confirm password</label><span id='message'></span>
				        </div>
				      </div>
				      <div class="row">
				      	<legend style="margin-left: 10px;">Birthdate</legend>
				        <div class="input-field col s12">
				          <input id="reg_bdate" type="date" class="date-picker" required><span id="rc_e7"></span>
				        </div>
				      </div>
				      <div class="row">
				        <div class="input-field col s12">
				          <input id="reg_address" type="text" class="validate" required><span id="rc_e8"></span>
				          <label for="text">Address</label>
				        </div>
				      </div>
				      <div class="row">
				        <div class="input-field col s12">
				          <input type="tel" size="11" name="tel" id="reg_mobile" required><span id="rc_e9"></span>
				          <label for="tel" data-error="wrong" data-success="right">Mobile phone</label>
				        </div>
				      </div>

				      <div class="row">
				        <div class="right">
				          <button class="btn waves-effect waves-light" type="button" name="action" onclick="reg_onclick_register()">Create Account</button>
				        </div>
				      </div>
				      
				    </form>
				  </div>
			  </div>

			  <!-- Modal Structure -->
			  <div id="modal1" class="modal">
			    <div class="modal-content">
			      <h4><img  id="modal-logo" src="images/logo.png"></h4>
			      <hr>
			      <div class="row">
				    <form class="col s12">
				      <div class="row">
				        <div class="input-field col s12">
				          <i class="material-icons prefix">account_circle</i>
				          <input id="user_login_username" type="text" class="validate">
				          <label for="user_login_username">Username</label>
				        </div>
				       </div>
				       <div class="row">
				        <div class="input-field col s12">
				          <i class="material-icons prefix">lock_circle</i>
				          <input id="user_login_password" type="password" class="validate">
				          <label for="user_login_password">Password</label>
				        </div>
				      </div>
				    </form>
				  </div>
			    </div>
			    <div class="modal-footer">
			      <a href="#!" class=" modal-action waves-effect waves-green btn-flat" onclick="user_login_validate()">Login</a>
			      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
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
					      <input class="with-gap" name="RegChoice" type="radio" id="test1" value="0" />
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
			     
			      <a class=" modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
			    </div>
			    </form>
			 </div>  

			 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script> 
	</body>
	<script>
			$('#test1').click(function(){
				window.location.href="registration-client.php";
			});
			$('#test2').click(function(){
				window.location.href="registration-servicePR.php";
			});
		  	
		  $('#reg_confirm_password').on('keyup', function () {
		    if ($(this).val() == $('#reg_password').val()) {
		        $('#message').html('Password match').css('color', 'green');
		    } else $('#message').html('Password not match').css('color', 'red');$('#rc_e6').empty();
		  });			
	</script>

</html>

