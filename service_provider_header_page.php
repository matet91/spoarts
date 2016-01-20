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
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<!-- Compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>       
		<script src="//cdn.transifex.com/live.js"></script>
		<link rel="stylesheet" href="materialize/css/service_provider_page.css">
	</head>
	

	<body>
				
			<ul id="dropdown1" class="dropdown-content">
			  <li><a href="#!">Profile</a></li>
			  <li><a href="#!">Change Password</a></li>
			  <li><a href="#!">Edit Profile</a></li>
			  <li class="divider"></li>
			  <li><a href="#!">Logout</a></li>
			</ul>

		  	<div class="navbar-fixed">
			    <nav>
			      <div class="nav-wrapper">
			        <a href="#!" class="brand-logo"><img  id="logo" src="images/logo-white.png"></a>
      				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">toc</i></a>
			        <ul id="navs" class="right hide-on-med-and-down">
			          <li><a href="#">Home</a></li>
			          <li><a href="#">Arts</a></li>
				      <li><a href="#">Sports</a></li>
			          <li>Welcome! Newbies</li>
			          <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons right">more_vert</i></a></li>
			        </ul>
			        <!--ul class="side-nav" id="mobile-demo">
			          <li><a href="#">Home</a></li>
				      <li><a href="#">Sports</a></li>
				      <li><a href="#">Arts</a></li>
			          <li><a href="#!"><i class="material-icons">notifications_none</i></a></li>
			          <li><span style="color:black;">Welcome! Newbies</span></li>

			          <-li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons right">more_vert</i></a></li>
			        <ul-->
			      </div>
			    </nav>
  		 	 </div>


  		 	  <!-- Modal Trigger -->
			  



			  
	</body>

	<script type="text/javascript">

		  $(document).ready(function(){
		    $(".button-collapse").sideNav();
		  });

		  $(document).ready(function(){
		    $(".dropdown-button").dropdown();
		  });
       
	</script>
</html>

