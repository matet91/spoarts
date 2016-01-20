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
		<link rel="stylesheet" href="css/jquery-ui.min.css">
		<script src="js/jquery-1.12.0.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<!-- Compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>       
		<script src="//cdn.transifex.com/live.js"></script>
		<link rel="stylesheet" href="materialize/css/sp-stylesheet.css">

	</head>
	

	<body>

			<ul id="dropdown1" class="dropdown-content">
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
			          <li><input placeholder="Search" type="search" /></li>
			          <li><a href="#!"><i class="material-icons left">search</i></a></li>
			          <li><i class="material-icons left">account_circle</i> Welcome! Service Provider!</li>
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
				          <input id="icon_prefix" type="text" class="validate">
				          <label for="icon_prefix">Username</label>
				        </div>
				       </div>
				       <div class="row">
				        <div class="input-field col s12">
				          <i class="material-icons prefix">lock_circle</i>
				          <input id="icon_telephone" type="tel" class="validate">
				          <label for="icon_telephone">Password</label>
				        </div>
				      </div>
				    </form>
				  </div>
			    </div>
			    <div class="modal-footer">
			      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
			    </div>
			  </div>



			  
	</body>

	<script type="text/javascript">
		  $(document).ready(function(){
		    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
		    $('.modal-trigger').leanModal();
		  });

		  $(document).ready(function(){
		    $(".button-collapse").sideNav();
		  });

		  $(document).ready(function(){
		    $(".dropdown-button").dropdown();
		  });
       
	</script>
</html>

