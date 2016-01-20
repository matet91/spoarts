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
		<link rel="stylesheet" href="css/materialize.min-0.97.1.css">
		<link rel="stylesheet" href="materialize/css/landing-page.css">
		<link rel="stylesheet" href="css/jquery-ui.min.css">
		<link rel="stylesheet" href="css/jquery.datetimepicker.css">
		<!-- Compiled and minified JavaScript -->
		<script src="js/jquery-1.12.0.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/jquery.datetimepicker.full.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>       
		<script src="//cdn.transifex.com/live.js"></script>
		
		<script src="js/dataManager.js"></script>
		<script>
			window.onload=function()
			{
				var url = "controller/registrationController.php?action=getSPDetails";
				$.get(url,function(result){
				$('#SP_fullname').text(" "+result);
				});
		  	}
			function SP_logout()
			{
				var url = "controller/registrationController.php?action=SPLogout";
				$.get(url,function(){
				window.location.href="index.php";
			});
			}
		 		$(document).ready(function(){
		    	$(".button-collapse").sideNav();
		  		});

		  		$(document).ready(function(){
		    	$(".dropdown-button").dropdown();
		  		});

				
		</script>
	</head>
	<body>
		  	<div class="navbar-fixed">
			    <nav>
			      <div class="nav-wrapper">
			        <a href="#!" class="brand-logo"><img  id="logo" src="images/logo-white.png"></a>
      				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">toc</i></a>
			        <ul id="navs" class="right hide-on-med-and-down">
			          <li><i class="material-icons left">account_circle</i> Welcome! &nbsp; <span id="SP_fullname"></span></li>
			          <li><a href="#!" onclick="SP_logout()"><i class="material-icons right">power_settings_new</i> Logout</a></li>
			        </ul>
			   
			      </div>
			    </nav>
  		 	 </div>
			 <!-- Modal Trigger -->
			 <!-- Modal Structure -->
	</body>

</html>

